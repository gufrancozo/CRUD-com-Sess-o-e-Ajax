<?php

session_start();
require('../../db/DBConnection.php');

if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['passwrd']) == true)){
    header('location:login.php');
}

$logado = $_SESSION['login'];

if(isset($_POST['submit'])) {

    $instance = DBConnection::getInstance();
    $conn = $instance->getConnection();


    $sql = 'SELECT * FROM PRODUTO';

    try {
        $conn->query($sql);
        echo "<script>alert('Produto Cadastrado!');</script>";
        header("location:../../index.php");
    } catch (PDOException $e) {
        echo "<script>alert('Produto não Cadastrado! Houve um erro.');</script>";
    }

}

?>