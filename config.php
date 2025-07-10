<?php
session_start();
error_reporting(E_ALL);

require_once __DIR__ . '/functions/database.php';
require_once __DIR__ . '/functions/validate.php';

//var_dump(start_db());

$conn = start_db();


if ($conn == false) {
    die("Server not found");
}
$exempt = ["signup.php", "signin.php", "index.php"];
$current_script = trim($_SERVER["SCRIPT_NAME"], "/");
if (!in_array($current_script, $exempt) && !isset($_SESSION["user"])) {
    exit("User Session not found");
}
//unset($_SESSION["user"]);
//session_destroy();

if (in_array($current_script, $exempt) && isset($_SESSION["user"])) {
    exit("User session active");
}
//unset($_SESSION["user"]);
//session_destroy();