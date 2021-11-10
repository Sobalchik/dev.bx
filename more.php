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

if (isset($_GET['genre']))
{
	$movies = getMovieByGenre($movies, $_GET['genre']);
	$currentPage = $_GET['genre'];
}
else
{
	$currentPage = getFileName(__FILE__);
}

//render movie-list
$movieListPage = renderTemplate("./resources/pages/more.php", [
	'movies' => $movies,
]);

//render layout
renderLayout($movieListPage, [
	'genres' => $genres,
	'currentPage' => $currentPage,
]);
