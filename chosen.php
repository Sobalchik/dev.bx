<?php
declare(strict_types = 1);
/** @var array $movies */
/** @var array $config */
require_once "./config/app.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";
require_once "./lib/helper-functions.php";
require_once "./config/connection.php";

$db = connection($config);
$genres = getGenres($db);

//render movie-list
$result = renderTemplate("./resources/pages/layout.php", [
	'genres' => $genres,
	'currentPage' => getFileName(__FILE__),
]);
echo $result;
