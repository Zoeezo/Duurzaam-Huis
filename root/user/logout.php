<?php
    session_start();

    $_SESSION['loggedIn'] = false;
    $_SESSION['username'] = null;
    $_SESSION['userid'] = null;

    header('Location: ../../');