<?php
declare(strict_types = 1);
/** @var array $movies */
/** @var array $genres */
/** @var array $config */
require_once "./config/app.php";
require_once "./data/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";
require_once "./lib/helper-functions.php";
require_once "./lib/more-functions.php";

if (isset($_GET['id']))
{
	$movie = getMovieById($movies, $_GET['id']);
}

//render _movie
$movieListPage = renderTemplate("./resources/blocks/_more.php", [
	'movie' => $movie,
]);

//render layout
renderLayout($movieListPage, [
	'genres' => $genres,
]);
