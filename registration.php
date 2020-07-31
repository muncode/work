<?php

require_once 'db.php';

if(isset($_POST['login'])&&isset($_POST['password'])) {
    $login = $mysqli->real_escape_string($_POST['login']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $name = $mysqli->real_escape_string($_POST['name']);
    $mysqli->query("INSERT INTO work_users (email, login, password, name) VALUES ('$email','$login','$password','$name')");
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}
