<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        break;
    case 'POST':
        // collect data
        $email = $_POST['email'];
        $password = $_POST['password'];

        // validate data
        if (empty($email)) {
            exit("Email field is required");
        }
        if (empty($password)) {
            exit("Password field is required");
        }


        $stmt = $conn->prepare("SELECT user_id, user_name, user_email, user_password, user_country FROM users WHERE user_email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            echo "<div class='alert alert-danger'>Invalid email or password</div>";
            break;
        }

        $user = $result->fetch_assoc();
        if (!password_verify($password, $user['user_password'])) {
            echo "<div class='alert alert-danger'>Invalid email or password</div>";
            break;
        }

        // Successful login
        session_regenerate_id(true);
        $_SESSION['user'] = [
            'id' => $user['user_id'],
            'name' => $user['user_name'],
            'email' => $user['user_email'],
            'country' => $user['user_country'] ?? null
        ];
        $_SESSION['login_success'] = "Welcome back, {$user['user_name']}!";
        header('Location: dashboard.php');
        exit;
}
