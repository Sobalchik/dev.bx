<?php
declare(strict_types = 1);
/** @var array $movies */
/** @var array $config */
require_once "./config/app.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";
require_once "./lib/helper-functions.php";
require_once "./config/connection.php";

$db = getConnection($config);
$genres = getGenres($db);

$movies = getMovies($db, $genres, (string)$_GET['genre'], (string)$_GET['request']);
$currentPage = $_GET['genre'] ?? getFileName(__FILE__);

//render movie creation
$movieListPage = renderTemplate("./resources/pages/movie-creation.php", [

]);

//render layout
renderLayout($movieListPage, [
	'genres' => $genres,
	'currentPage' => $currentPage,
]);


