<?php
session_start();
echo $_SESSION['username'];
echo $_COOKIE['algebra'];

setcookie('algebra', '', time() - 3600, '/', '', false, true);