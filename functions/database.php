<?php


// connect the database
function start_db()
{


    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "diary";
    //mysqli_select_db();

    // option one
    $conn = mysqli_connect($host, $user, $password, $database);

    return $conn;
}
