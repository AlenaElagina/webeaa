<?php
function auth(){
    session_start();
    $id = $_SESSION['user']['id'];
    $mysql = new mysqli('localhost', 'root', 'root', '');
    $res = $mysql->query("SELECT * FROM `users1` WHERE `id` = '$id'");
    $check = mysqli_num_rows($res);
    if ($check) {
        return $res;
    }else{
        return 1;
    }
}
function user_exit(){
    session_start();
    unset($_SESSION['user']);
    header('Location: ../../pages/lichkab.php.php');
}

?>