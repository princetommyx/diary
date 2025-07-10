<?php

// Always define $countries before the switch so it's available in all cases
$countries = ['nigeria', 'ghana', 'togo'];

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':

    break;
  case 'POST':

    // collect data
    $email = htmlspecialchars($_POST['email']);
    $country = htmlspecialchars($_POST['country']);
    $password = htmlspecialchars($_POST['password']);

    // validate data
    if ($email === false) {
      exit("Email field is required");
    }

    if (in_array($country, $countries, true) === false) {
      exit("Country field is required");
    }

    if (empty($password)) {
      exit(" field is required");
    }


    $email = my_sanitizer($_POST['email']);
    $country = my_sanitizer($_POST['country']);
    $password = my_sanitizer($_POST['password']);

    // Check duplication
    $sql = "SELECT * FROM users WHERE user_email = '$email' LIMIT 1; ";
    $execute = mysqli_query($conn, $sql);
    $count = (int) mysqli_num_rows($execute);
    if ($count > 0) {
      exit("Account already exists");
    }

    $name = explode("@", $email)[0];

    // Hash the password before storing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Persist store in database 
    $sql = "INSERT INTO users (user_name, user_email, user_country, user_password) VALUES (?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $country, $hashedPassword);
    $execute = $stmt->execute();
    if ($execute === false) {
      echo  "Account creation failed";
    }

    session_regenerate_id();
    $_SESSION["user"] = ["name" => $name, "email" => $email];

    //echo "Account created successfully";
    header("Location: dashboard.php");


    break;
}
