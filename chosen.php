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


//render movie-list
$result = renderTemplate("./resources/pages/layout.php", [
	'genres' => $genres,
	'currentPage' => getFileName(__FILE__),
]);
echo $result;
