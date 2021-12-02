<?php

function getMovieById($database, array $actors, $id): array
{
	$query = "SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING, d.NAME,
       (SELECT GROUP_CONCAT(mg.GENRE_ID) FROM movie_genre mg WHERE mg.MOVIE_ID = m.ID) as GENRE,
       (SELECT GROUP_CONCAT(ma.ACTOR_ID) FROM movie_actor ma WHERE ma.MOVIE_ID = m.ID) as CAST
FROM movie m
		INNER JOIN director d on m.DIRECTOR_ID = d.ID
WHERE m.ID = {$id}";

	$result = mysqli_query($database, $query);

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}
	$movies= [];
	while ($row = mysqli_fetch_assoc($result))
	{
		$movies[$row['ID']] =
			[
				'ID' => $row['ID'],
				'TITLE' => $row['TITLE'],
				'ORIGINAL_TITLE' => $row['ORIGINAL_TITLE'],
				'DESCRIPTION' => $row['DESCRIPTION'],
				'DURATION' => $row['DURATION'],
				'AGE_RESTRICTION' => $row['AGE_RESTRICTION'],
				'RELEASE_DATE' => $row['RELEASE_DATE'],
				'RATING' => $row['RATING'],
				'NAME' => $row['NAME'],
				'GENRE' => $row['GENRE'],
				'CAST' => $row['CAST']
			];
	}
	return (convertIdToActors($actors, $movies));

}

function getActors($database, int $id): array
{
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
