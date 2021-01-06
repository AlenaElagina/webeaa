<?php
session_start();
if($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    if (!empty($_FILES['file']['name'])) {
        $uploadDir = "../../assets/images/";
        $file = $_FILES['file'];
        $file_name = preg_replace("/[^A-Z0-9._-]/i", "_", $file['name']);
        $allowedTypes = array('image/jpeg', 'image/png', 'image/gif', 'image/jpg');
        $p = 0;
        $parts = pathinfo($file_name);
        while (file_exists($uploadDir . $file_name)) {
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
            if (!$success) {
                echo "<p>Загрузка файла не удалась</p>";
                exit;
            }
            chmod($uploadDir . $file_name, 0644);
            $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
            $mysql->query("INSERT INTO `uvel` (`name`, `price`, `picture`, `category`) VALUES ('$name', '$price', '$file_name', '$category')");
            header('Location: ../../pages/admin.php');
        } else {
            echo "Недопустимый формат <br>";
        }
    } else {
        echo "Вы не прислали файл!";
    }
}
?>