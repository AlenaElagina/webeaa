<?php
session_start();
    $str = $_POST['str'];
    session_start();
    $str = mb_strtolower($str);
    $_SESSION['mat'] = strtr($str, array(" бля"=>" ***", "еба"=>"***", "еби"=>"***", "хуй"=>"***", "пизд"=>"****", "хуе"=>"***", "хуя"=>"***", "ебе"=>"***", " сук"=>" ***"));
    header('Location: ../../pages/mat.php');
?>