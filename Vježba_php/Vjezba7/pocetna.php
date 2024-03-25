<?php
session_start();
echo $_SESSION['name'];
echo $_COOKIE['favorite_food'];

setcookie('favorite_food', '', time() - 3600, '/', '', false, true);