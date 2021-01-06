<?php
function auth(){
    session_start();
    $id = $_SESSION['user']['id'];
    $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
    $res = $mysql->query("SELECT * FROM `users` WHERE `id` = '$id'");
    $check = mysqli_num_rows($res);
    $res = $res->fetch_assoc();
    if ($check) {
        return $res;
    }else{
        return 1;
    }
}
function UPD_INFO($id){
    $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
    $res = $mysql->query("SELECT * FROM `uvel` WHERE `id` = '$id'");
    $check = mysqli_num_rows($res);
    $res = $res->fetch_assoc();
    if ($check) {
        return $res;
    }else{
        return NULL;
    }
}
function UPD_INFO_AMOUNT($id){
    $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
    $res = $mysql->query("SELECT * FROM `amount` WHERE `id_uvel` = '$id'");
    $check = mysqli_num_rows($res);
    $res = $res->fetch_assoc();
    if ($check) {
        return $res;
    }else{
        return NULL;
    }
}
?>