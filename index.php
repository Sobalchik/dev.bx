<?php

require "./movies/movies-functions.php";
require "./movies/movies.php";

/** @var array $movies */

$age = 0;
if(setUserAge($age))
    printMovies($movies,$age);
else
    return 0;