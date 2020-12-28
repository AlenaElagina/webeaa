<?php
session_start();
require_once("functions.php");
if($_POST) {
    $id = $_SESSION['user']['id'];
    $mysql = new mysqli('localhost', 'root', 'root', '');

    if($_POST['name'] != NULL){
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        if (mb_strlen($name) <= 2 || mb_strlen($name) > 100) {
            $_SESSION['mess2'] = 'Имя должено быть от 2 до 100 символов';
            header('Location: ../../pages/lichkab.php');
            exit();
        }
        $_SESSION['user']['name'] = $name;
        $res = $mysql->query("UPDATE users1 SET name = $name WHERE users1.id = $id");
    }
    if($_POST['surname'] != NULL){
        $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
        if (mb_strlen($surname) <= 2 || mb_strlen($surname) > 100) {
            $_SESSION['mess2'] = 'Фамилия должена быть от 2 до 100 символов';
            header('Location: ../../pages/lichkab.php');
            exit();
        }
        $res = $mysql->query("UPDATE `users1` SET `surname` = '$surname' WHERE `users1`.`id` = $id");
    }
    if($_POST['email'] != NULL){
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
        if (mb_strlen($email) <= 2 || mb_strlen($email) > 100) {
            $_SESSION['mess2'] = 'Имя должено быть от 2 до 100 символов';
            header('Location: ../../pages/lichkab.php');
            exit();
        }
        $res = $mysql->query("SELECT * FROM `users1` WHERE `email` = '$email'");
        $check = mysqli_num_rows($res);
        if ($check) {
            $_SESSION['mess2'] = 'Данный пользователь уже зарегестрирован';
            header('Location: ../../pages/lichkab.php');
            exit();
        }
        $res = $mysql->query("UPDATE users1 SET email = $email WHERE users1.id = $id");
    }
    if($_POST['pass'] != NULL){
        $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
        $pass = md5($pass . "fg45g5443");
        $res = $mysql->query("UPDATE users1 SET pass = $pass WHERE users1.id = $id");
    }
    $mysql->close();
    header('Location: ../../pages/lichkab.php');
}else{
    $_SESSION['mess2'] = 'Вы не прошли проверку reCaptcha';
    header('Location: ../../pages/lichkab.php');
    exit();
}

?>


