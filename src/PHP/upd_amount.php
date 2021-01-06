<?php
session_start();
if($_POST){
    $mysql = new mysqli('localhost', 'root', 'root', 'topaz');
    $id_uvel = $_POST['id_uvel'];
    $count_total = $_POST['count_total'];
    $count_buy = $_POST['count_buy'];
    $mysql->query("UPDATE `amount` SET `count_total` = '$count_total', `count_buy` = '$count_buy' WHERE id_uvel = $id_uvel");
    header('Location: ../../pages/amount.php?id='.$id_uvel);
}
?>
