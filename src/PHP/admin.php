<?php
session_start();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $picture = $_POST['picture'];
    $category = $_POST['category'];
    $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
    $mysql->query("INSERT INTO `uvel` (`name`, `price`, `picture`, `category`) VALUES ('$name', '$price', '$picture', '$category')");
    header('Location: ../../pages/admin.php');
?>