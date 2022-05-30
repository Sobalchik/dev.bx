<?php
declare(strict_types = 1);
/** @var array $movies */
/** @var array $config */
require_once "./config/app.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";
require_once "./lib/helper-functions.php";
require_once "./config/connection.php";
require_once "./lib/more-functions.php";

$db = getConnection($config);

$title= $_POST["TITLE"];
$originalTitle = $_POST["ORIGINAL_TITLE"];
$description = $_POST["DESCRIPTION"];
$duration = $_POST["DURATION"];
$ageRestriction= $_POST["AGE_RESTRICTION"];
$releaseDate = $_POST["RELEASE_DATE"];
$rating = $_POST["RATING"];
$director = $_POST["DIRECTOR"];

if(checkDirectorExist($db,$director))
	$director = getDirectorId($db,$director);
else
    $director = addDirector($db,$director);

addMovie($db,$title,$originalTitle,$description,$duration,$ageRestriction,$releaseDate,$rating,$director);
header("Location: http://dev.bx/index.php");
exit( );



