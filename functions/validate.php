<?php


// Example constant and variable
const EMAIL = "myname";
$myNewVar = "lorem";

function my_sanitizer(string $data)
{
    global $conn;
    $data = trim($data);
    $data = html_entity_decode($data);
    $data = mysqli_escape_string($conn, $data);

    return $data;
}
