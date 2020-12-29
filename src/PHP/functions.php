<?php
function auth(){
    session_start();
    $id = $_SESSION['user']['id'];
    $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
    $res = $mysql->query("SELECT * FROM `users` WHERE `id` = '$id'");
    $check = mysqli_num_rows($res);
    if ($check) {
        return $res;
    }else{
        return 1;
    }
}

?>