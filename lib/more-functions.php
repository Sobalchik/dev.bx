<?php

function getActors($database, string $id): array
{
	$id = (int)$id;
	$query = "SELECT a.ID, a.NAME
			  FROM actor a
					 INNER JOIN movie_actor ma on a.ID = ma.ACTOR_ID
					 WHERE ma.MOVIE_ID = {$id}  ";
	$result = mysqli_query($database, $query);

	$actors = [];

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}
	while ($row = mysqli_fetch_assoc($result))
	{
		$actors[$row['ID']] =
			[
				'NAME' => $row['NAME'],
			];
	}
	return $actors;
}

function getMovieById($database, array $actors, string $id): array
{
	$id = (int)$id;
	$query = selectAllFilms() . "WHERE m.ID = {$id}";

	$result = mysqli_query($database, $query);

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}

	$movie = mysqli_fetch_assoc($result);

	return (convertIdToActors($actors, $movie));
}


function convertIdToActors(array $actors, array $movie) : array
{
		$arrayWithActors = explode(',',$movie['CAST']);
		foreach ($arrayWithActors as &$actor )
		{
			$actor = $actors[$actor]['NAME'];
		}
		unset($actor);
		$movie['CAST'] = implode(', ',$arrayWithActors);
	return $movie;
}

function getColorByRating($rating): string
{
	if (floor($rating) >= 7)
	{
		return "-green";
	}
	if ((floor($rating) <= 6) && (floor($rating) > 4))
	{
		return "-yellow";
	}
	return "-red";
}

function getDirectorId($database, string $director): int
{
	$query ="SELECT ID from director WHERE NAME = '{$director}'";

	$result = mysqli_query($database, $query);

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}

	$id = mysqli_fetch_row($result);

	return $id[0];
}

function addDirector($database, string $director): int
{
	$query = "INSERT into director(NAME) value ('{$director}')";

	$result = mysqli_query($database, $query);

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}

	return mysqli_insert_id($database);
}

function checkDirectorExist($database, $director): bool
{
	$query = selectAllDirectorsName() . " WHERE NAME = '{$director}'";

	$result = mysqli_query($database, $query);

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}

	$res = mysqli_fetch_assoc($result);

	if(count($res)>0)
	return true;

	return false;
}
