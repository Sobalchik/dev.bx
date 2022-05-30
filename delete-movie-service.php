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


$id = $_POST["id"];
deleteMovie($db,$id);

header("Location: http://dev.bx/index.php");
 exit( );



