<?php
declare(strict_types=1);
/** @var array $movies */
/** @var array $genres */
require_once "./data/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";

//render movie-list
$movieListPage = renderTemplate("./resources/pages/movie-list.php", [
	'movies' => $movies
]);

//render layout
renderLayout($movieListPage,['genres'=>$genres]);

