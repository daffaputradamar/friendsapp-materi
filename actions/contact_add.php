<?php
require_once('../config/db.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    db();
    global $link;

    $query = "INSERT INTO contacts(name, email, message) VALUE ('$name', '$email', '$message')";
    $insert = mysqli_query($link, $query);

    header('Location: ../contactus.php');

    mysqli_close($link);
}
