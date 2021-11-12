<?php

function getMovieById(array $movies, string $id): array
{
	foreach ($movies as $movie)
	{
		if ($movie['id'] === (int)$id)
		{
			return $movie;
		}
	}
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
