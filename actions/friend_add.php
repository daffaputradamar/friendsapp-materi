<?php
require_once('../config/db.php');

if (isset($_POST['friend'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    db();
    global $link;

    $query = "INSERT INTO friends(name, email, contact_no) VALUE ('$name', '$email', '$contact')";
    $insert = mysqli_query($link, $query);

    header('Location: ../friend.php');

    mysqli_close($link);
}
