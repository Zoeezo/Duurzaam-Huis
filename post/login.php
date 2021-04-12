<?php
    session_start();

    $username =  $_POST['username'];
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

    $sql = "SELECT * FROM $table WHERE username = \"$username\"";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) == 0) {   // If there are no rows that means there's no account with that username.
        addError('username', 'No account with that username!');
    } else {
        $row = mysqli_fetch_assoc($result);

        $correct = password_verify($password, $row['pwd']);
    
        if($correct == true) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['userid'] = $row['userid'];
        } else {
            addError('password', 'Password incorrect!');
        }
    }

    echo json_encode($response);
    mysqli_close($connect);

   