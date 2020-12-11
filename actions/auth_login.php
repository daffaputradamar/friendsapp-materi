<?php
session_start();

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $email = $_POST['password'];

    $_SESSION['name'] = $name;

    header('Location: ../friend.php');
}
