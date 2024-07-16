<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT id, password FROM user WHERE name='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: ..");
            exit();
        } else {
            $_SESSION['error'] = "Invalid email or password.";
        }
    } else {
        $_SESSION['error'] = "Invalid email or password.";
    }
}

header("Location: ../pages/login.php");
exit();
