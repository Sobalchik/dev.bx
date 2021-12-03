<?php

function getFileName($path): string
{
	return basename($path, ".php");
}

function selectAllFilms():string
{
	return "SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING, d.NAME,
       (SELECT GROUP_CONCAT(mg.GENRE_ID) FROM movie_genre mg WHERE mg.MOVIE_ID = m.ID) as GENRE,
       (SELECT GROUP_CONCAT(ma.ACTOR_ID) FROM movie_actor ma WHERE ma.MOVIE_ID = m.ID) as CAST
FROM movie m
		INNER JOIN director d on m.DIRECTOR_ID = d.ID ";
}