<?php
session_start();
$mysql = new mysqli('localhost', 'root', 'root', 'topaz');
$id = $_GET['id'];
$picture = $_GET['picture'];
if($picture != NULL) {
    $link = "../../assets/images/$picture";
    unlink($link);
}
$mysql->query("DELETE FROM `uvel` WHERE `uvel`.`id` = $id");
$mysql->query("DELETE FROM `amount` WHERE id_uvel = $id");
header('Location: ../../pages/admin.php');
?>