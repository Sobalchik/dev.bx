<?php

function getShortText(string $text, int $lengths): string
{
	if (strlen($text) > $lengths)
	{
		$text = substr($text, 0, $lengths);
		$text = mb_substr($text, 0, mb_strrpos($text, ' ')) . "...";
	}
	return $text;
}

function getMovieLink(string $linkToFolder, int $pictureId): string
{
	return ("$linkToFolder/$pictureId.jpg");
}

function getMovieLengthInHours(int $FilmLengthInMinute): string
{
	$minutes = $FilmLengthInMinute % 60;
	$hours = $FilmLengthInMinute / 60;
	if ($minutes < 10)
	{
		return "0" . floor($hours) . ":0" . $minutes;
	}
	return "0" . floor($hours) . ":" . $minutes;

}

function getGenres($database): array
{
	$query = "SELECT * FROM genre";
	$result = mysqli_query($database, $query);
	$genres = [];
	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}
	while ($row = mysqli_fetch_assoc($result))
	{
		$genres[$row['ID']] =
			[
				'CODE' => $row['CODE'],
				'NAME' => $row['NAME'],
			];
	}
	return $genres;
}



function getMovies($database, array $genres, string $genre = ''): array
{
	if ($genre == '')
	{
		$query = "SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING, d.NAME,
       (SELECT GROUP_CONCAT(mg.GENRE_ID) FROM movie_genre mg WHERE mg.MOVIE_ID = m.ID) as GENRE,
       (SELECT GROUP_CONCAT(ma.ACTOR_ID) FROM movie_actor ma WHERE ma.MOVIE_ID = m.ID) as CAST
FROM movie m
		INNER JOIN director d on m.DIRECTOR_ID = d.ID ";
	}
	else
	{
		$query = "SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING, d.NAME,
       (SELECT GROUP_CONCAT(mg.GENRE_ID) FROM movie_genre mg WHERE mg.MOVIE_ID = m.ID) as GENRE,
       (SELECT GROUP_CONCAT(ma.ACTOR_ID) FROM movie_actor ma WHERE ma.MOVIE_ID = m.ID) as CAST
FROM movie m
		INNER JOIN director d on m.DIRECTOR_ID = d.ID
		INNER JOIN movie_genre mg on m.ID = mg.MOVIE_ID
		INNER JOIN genre g on mg.GENRE_ID = g.ID
		WHERE CODE = '{$genre}'";
	}
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
	return (convertIdToGenres($genres,$movies));
}


