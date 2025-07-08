<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        break;
    case 'POST':
        // collect data
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // validate data
        if ($email === false) {
            exit("Email field is required");
        }
        if (empty($password)) {
            exit("Password field is required");
        }

        var_dump($_POST);
        //pass the database connection and the string to escape

        require_once __DIR__ . '/../functions/database.php';
        $conn = start_db();

        //checking credentials

        // Pass the database connection and sanitize the email and password
        require_once __DIR__ . '/../functions/database.php';
        $conn = start_db();


        require_once __DIR__ . '/../functions/validate.php';
        $email = my_sanitizer($_POST['email']);
        $password = my_sanitizer($_POST['password']);

        // validate data

        // check account duplication

        // set misc values

        // persist/store in database

        // return
        var_dump($_POST);


        break;
}
