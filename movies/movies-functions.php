<?php

function checkAge(int $age, int $age_restriction): bool
{
	if ($age >= $age_restriction)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function printMovies(array $movies, int $age): void
{
	$numberInTheList = 1;
	foreach ($movies as $movie)
	{
		if (checkAge($age, $movie["age_restriction"]))
		{
			echo $numberInTheList . formatMovie($movie);
			$numberInTheList++;
		}
	}
}

function setUserAge()
{
	return readline("Enter your age: ");
}

function checkValid($input): bool
{
	if (is_numeric($input))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function formatMovie(array $movie): string
{
	return ". {$movie["title"]} ({$movie["release_year"]}), {$movie["age_restriction"]}+. Rating - {$movie["rating"]}\n";
}