<?php
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = md5($pass . "fg45g5443");
$mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
$res = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
$check = mysqli_num_rows($res);
$user = $res->fetch_assoc();
if ($check) {
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name']
    ];
    header('Location: ../../pages/lichkab.php');
}else{
    $_SESSION['mess1'] = 'Неверный логин или пароль';
    header('Location: ../../pages/lichkab.php');
    exit();
}
?>