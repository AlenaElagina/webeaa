<?php
session_start();
$mysql = new mysqli('localhost', 'root', 'root', 'topaz');
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$name_page = $_POST['name_page'].'.html';
$picture = $_POST['picture'];
if($_POST['delete'] == "true") {
    if($picture != NULL){
        unlink("../../assets/images/$picture");
    }
    $picture = NULL;
    $mysql->query("UPDATE `uvel` SET `name` = '$name', `price` = '$price',  `picture` = '$picture' WHERE `uvel`.`id` = $id");
    header('Location: ../../pages/admin.php');
} else if(!empty($_FILES['file']['name'])) {
    if($picture != NULL){
            unlink("../../assets/images/$picture");
    }
    $uploadDir = "../../assets/images/";
    $file = $_FILES['file'];
    $file_name = preg_replace("/[^A-Z0-9._-]/i","_",$file['name']);
    $allowedTypes = array('image/jpeg', 'image/png', 'image/gif', 'image/jpg');
    $p = 0;
    $parts = pathinfo($file_name);
    while (file_exists($uploadDir.$file_name)){
        $p++;
        $file_name = $parts["filename"] . "-" . $p . "." . $parts["extension"];
    }
    $uploadFile = $uploadDir . basename($file_name);
    $fileChecked = false;
    for ($j = 0; $j < count($allowedTypes); $j++) {
        if ($file['type'] == $allowedTypes[$j]) {
            $fileChecked = true;
            break;
        }
    }
    if ($fileChecked) {
        $success = move_uploaded_file($file['tmp_name'], $uploadFile);
        if(!$success){
            echo "<p>Загрузка файла не удалась</p>";
            exit;
        }
        chmod($uploadDir.$file_name, 0644);
        $mysql->query("UPDATE `uvel` SET `name` = '$name', `price` = '$price',  `picture` = '$file_name' WHERE `uvel`.`id` = $id");
        header('Location: ../../pages/admin.php');
    } else {
        echo "Недопустимый формат файла<br>";
    }
} else {
    $mysql->query("UPDATE `uvel` SET `name` = '$name', `price` = '$price' WHERE `uvel`.`id` = $id");
    header('Location: ../../pages/admin.php');
}
?>
