<?php
    include_once 'dbh_inc.php';

    $name = $_POST['name'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    $sql = "INSERT INTO contact (nume, prenume, email, message) VALUES ('$name', ' $last', '$email', ' $text');";
    mysqli_query($conn, $sql);

    header("Location: ../index.html?contact=succes");

