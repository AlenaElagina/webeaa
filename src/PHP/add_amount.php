<?php
session_start();
if($_POST) {
    $id_uvel = $_POST['id_uvel'];
    $count_total = $_POST['count_total'];
    $count_buy = $_POST['count_buy'];
    $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
    $mysql->query("INSERT INTO `amount` (`id_uvel`, `count_total`, `count_buy`) VALUES ('$id_uvel', '$count_total', '$count_buy')");
    header('Location: ../../pages/amount.php?id='.$id_uvel);
}
?>