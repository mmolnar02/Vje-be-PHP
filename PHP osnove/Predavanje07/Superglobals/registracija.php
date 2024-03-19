<?php

declare(strict_types = 1);
session_start();

function getDataFromJson(string $filename) {
    if (!file_exists($filename)) {
        return [];
    }

        $data = file_get_contents($filename);
        return json_decode($data, true) ?? [];
}

function checkUsernameInJson(string $username) : bool{
    $users = getDataFromJson('users.json');
       
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return true;
        }
    }
    return false;
}

function registerUser(string $username, string $password): bool | int{
    $users = getDataFromJson('users.json');

    $users[] = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];

    return file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
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

        // Register user
        if (registerUser($username, $password)) {
            
            $_SESSION['username'] = $username;
            
            setcookie('algebra', $username, time() + (86400 * 30), '/', '', false, true);

            // header('Location: pocetna.php');
            exit;
        };

        header('Location: registracija-obrazac.php?error=3');
        exit;

     } else {
        header('Location: registracija-obrazac.php');
        exit;
}