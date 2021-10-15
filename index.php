<?php

require "./movies/movies-functions.php";
require "./movies/movies.php";

/** @var array $movies */


    $age = setUserAge();
    if(checkValid($age))
    {
        printMovies($movies, $age);
    }
else
    return 0;