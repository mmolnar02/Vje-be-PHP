<?php
// Provjera je li forma poslana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Provjera je li postavljeno ime i omiljeno jelo
    if (isset($_POST['name']) && isset($_POST['favorite_food'])) {
        $name = $_POST['name'];
        $favorite_food = $_POST['favorite_food'];

        // Pohrana u kolačić
        setcookie('favorite_food', $favorite_food, time() + (86400 * 30), "/"); // Kolačić vrijedi 30 dana

        // Povećanje broja posjeta korisnika
        session_start();
        if (!isset($_SESSION['visits'])) {
            $_SESSION['visits'] = 1;
        } else {
            $_SESSION['visits']++;
        }

        // Pohrana u JSON datoteku
        $data = array('name' => $name, 'favorite_food' => $favorite_food);
        $json_data = json_encode($data);
        file_put_contents('data.json', $json_data . PHP_EOL, FILE_APPEND);

        echo "Podaci uspješno pohranjeni.";
    } else {
        echo "Molimo unesite ime i omiljeno jelo.";
    }
} else {
    echo "Neovlašten pristup.";
}