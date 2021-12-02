<?php

function getFileName($path): string
{
	return basename($path, ".php");
}


function convertIdToGenres(array $genres, array $movies) : array
{
	foreach ($movies as &$movie)
		{
			$string = explode(',',$movie['GENRE']);
			foreach ($string as &$value )
			{
				$value = $genres[$value]['NAME'];
			}
			unset($value);
			$movie['GENRE']= implode(', ',$string);
		}
	return $movies;
}

function convertIdToActors(array $actors, array $movies) : array
{
	foreach ($movies as &$movie)
	{
		$string = explode(',',$movie['CAST']);
		foreach ($string as &$value )
		{
			$value = $actors[$value]['NAME'];
		}
		unset($value);
		$movie['CAST'] = implode(', ',$string);
	}
	return $movies;
}