<?php
    session_start();

    $username =  $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $response = ["success" => true, "errors" => []];

    // Mysql variables
    $server  = 'localhost';
    $database = 'dashboard';
    $table = 'userinfo';
    $name = 'root';
    $pwd = 'root';

    function addError($errorType, $error) {
        global $response;

        $response = array_replace($response, ["success" => false]);
        $response['errors'][] = ['errorType' => $errorType, 'error' => $error];
    }

    // Connect to server
    $connect = mysqli_connect("$server:3306", $name, $pwd, $database);

    if (mysqli_connect_errno()) {
        throw new Exception("Connect error: " . mysqli_connect_error());
    }

    // Check the username
    if(strlen($username) < 3) {
        addError('username', 'Min. length is 3 characters!');
    }

    if(strlen($username) > 12) {
        addError('username', 'Max. length is 12 characters!');
    }

    $usernameSQL = "SELECT * FROM $table WHERE username = \"$username\"";
    $usernameResult = mysqli_query($connect, $usernameSQL);

    if(mysqli_num_rows($usernameResult) != 0) {   // If there are rows that means there's already an account with that username.
        addError('username', 'Username already exists!');
    }

    mysqli_free_result($usernameResult);

    // Check the email
    if(strlen($email) <= 0) {
        addError('email', 'Email can\'t be empty!');
    }

    $emailSQL = "SELECT * FROM $table WHERE email = \"$email\"";
    $emailResult = mysqli_query($connect, $emailSQL);

    if(mysqli_num_rows($emailResult) != 0) {   // If there are rows that means there's already an account with that email.
        addError('email', 'Email already registered!');
    }

    mysqli_free_result($emailResult);

    // Check the password
    if(strlen($password) <= 0) {
        addError('password', 'Password can\'t be empty!');
    }

    if($response['success'] == true) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $id = uniqid();

        $registerSQL = "INSERT INTO `userinfo`(`userid`, `username`, `email`, `pwd`) VALUES ('$id','$username','$email','$hash')";
        if(!mysqli_query($connect, $registerSQL)) {
            addError('database', 'Something went wrong, please try again later');
        } else {
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $id;
        }
    }

    echo json_encode($response);
    mysqli_close($connect);