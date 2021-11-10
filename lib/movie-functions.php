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

function getMovieByGenre(array $movies, string $genre): array
{
	return array_filter($movies, function ($movie) use ($genre) {
		foreach ($movie['genres'] as $gen)
		{
			if ($gen === $genre)
			{
				return true;
			}
		}
		return false;
	});
}
function getGenres(array $genres):string
{
	$result="";
	foreach ($genres['genres'] as $genre)
		$result .=  $genre.",";

	return mb_substr($result, 0, -1);
}