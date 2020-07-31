<?php
session_start();
require_once 'db.php';

if(isset($_SESSION['login'])&&isset($_SESSION['email'])){
    $login = $_SESSION['login'];
    $email = $_SESSION['email'];
    if (($_POST['password'] === $_SESSION['password']) || (empty($_POST['password']))) {
        $password = $_SESSION['password'];
    } else {
        $password = $mysqli->real_escape_string($_POST['password']);
        $_SESSION['password'] = $password;
    }
    if (($_POST['name'] === $_SESSION['name']) || (empty($_POST['name']))) {
        $name = $_SESSION['name'];
    } else {
        $name = $mysqli->real_escape_string($_POST['name']);
        $_SESSION['name'] = $name;
    }

    $mysqli->query("UPDATE work_users SET password = '$password', name = '$name' WHERE login = '$login' AND email = '$email'");
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}

