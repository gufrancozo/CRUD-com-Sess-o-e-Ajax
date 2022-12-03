<?php
session_start();

require_once('../../db/DBConnection.php');

if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['password'])) {

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $instance = DBConnection::getInstance();
    $conn = $instance->getConnection();

    $result = $conn->query("SELECT * FROM USUARIO WHERE login = '$login' AND password = '$password'");

    $row = $result->fetch(PDO::FETCH_ASSOC);

    if ($row > 0) {
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        header('location:../../index.php');
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['password']);
        $msg = "Login Fail";
        header("location:login.php?msg=$msg");
    }
}

?>