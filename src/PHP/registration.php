<?php
session_start();
if($_POST){
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
    if (mb_strlen($email) < 5 || mb_strlen($email) > 100) {
        $_SESSION['mess 2'] = 'Email должен быть от 5 до 100 символов';
        header('Location: ../../pages/lichkab.php');
        exit();
    } else if (mb_strlen($name) <= 2 || mb_strlen($email) > 100) {
        $_SESSION['mess2'] = 'Имя должено быть от 2 до 100 символов';
        header('Location: ../../pages/lichkab.php');
        exit();
    } else if (mb_strlen($surname) <= 2 || mb_strlen($surname) > 100) {
        $_SESSION['mess2'] = 'Фамилия должена быть от 2 до 100 символов';
        header('Location: ../../pages/lichkab.php');
        exit();
    }

    $pass = md5($pass . "fg45g5443");

    $res = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $check = mysqli_num_rows($res);
    if ($check) {
        $_SESSION['message2'] = 'Данный пользователь уже зарегестрирован';
        header('Location: ../../pages/c.php');
        exit();
    }
    $mysql->query("INSERT INTO `users` (`email`, `name`, `surname`, `pass`) VALUES('$email','$name','$surname','$pass')");

    $user = $mysql->query("SELECT `id`, `name` FROM users WHERE `surname` = `$surname` AND `pass` = :`$pass`");
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name']
    ];
    $_SESSION['mess2'] = 'Регистрация прошла успешно';
    header('Location: ../../pages/lichkab.php');
}else{
    $_SESSION['mess2'] = 'Вы не ввели данные';
    header('Location: ../../pages/lichkab.php');
    exit();
}
?>


