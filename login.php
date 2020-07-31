<?php
session_start();
require_once 'db.php';

if(isset($_POST['login'])&&isset($_POST['password'])) {
    $login = $mysqli->real_escape_string($_POST['login']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $query = "select * from work_users where login = '$login' and password = '$password'";
    if ($mysqli->query($query)->num_rows > 0) {
        $result = $mysqli->query($query)->fetch_assoc();
        $_SESSION['email'] = $result['email'];
        $_SESSION['login'] = $result['login'];
        $_SESSION['password'] = $result['password'];
        $_SESSION['name'] = $result['name'];
        echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }
} else {
    echo json_encode(array('success' => 0));
}
