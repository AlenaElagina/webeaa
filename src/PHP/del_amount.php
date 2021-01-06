<?php
session_start();
$mysql = new mysqli('localhost', 'root', 'root', 'topaz');
$id = $_GET['id'];
$mysql->query("DELETE FROM `amount` WHERE id_uvel = $id");
header('Location: ../../pages/amount.php?id='.$id);
?>