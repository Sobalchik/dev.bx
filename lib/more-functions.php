<?php

function getMovieById(array $movies, string $id): array
{
		return $movies[(int)$id - 1];
}

function getColorByRating($rating):string
{
	if (floor($rating)>=7)
		return "-green";
	if ((floor($rating)<=6)&&(floor($rating)>4))
		return "-yellow";
	return "-red";

}
function getCast(array $cast):string
{
	$result="";
	foreach ($cast['cast'] as $person)
		$result .=  $person.", ";

	return mb_substr($result, 0, -2);
}