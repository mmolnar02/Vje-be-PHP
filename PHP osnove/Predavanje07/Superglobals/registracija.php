<?php

function checkUsernameInJson($username) {
    $users = file_get_contents('users.json');
    $users = json_decode($users, true);
    
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return true;
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

        if (empty($username) || empty($password)) {
        header('Location: registracija-obrazac.php?error=1');
        exit;
        }

        if (checkUsernameInJson($username)) {
        header('Location: registracija-obrazac.php?error=2');
        exit;
        }
     } else {
    header('Location: registracija-obrazac.php');
    exit;
}