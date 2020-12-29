<?php
session_start();
require_once("../src/PHP/functions.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Lobster&display=swap" rel="stylesheet"> </head>
<link rel="stylesheet" href="assets/CSS/style.css">


<body>
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #0000FF;">
    <div class="collapse navbar-collapse" id="navbarSupportedContent" ">
    <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <form action="../index.php">
                <button type="submit" class="btn btn-outline-light" style="font-family: 'Lobster', cursive;">Главная</button>
            </form>
        </li>

        <li class="nav-item active">
            <form action="lichkab.php">
                <button type="submit" class="btn btn-outline-light" style="font-family: 'Lobster', cursive;">Личный кабинет</button>
            </form>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item my-2 my-lg-0">
            <form action="korzina.php">
                <button type="submit" class="btn btn-outline-light" style="font-family: 'Lobster', cursive;">Корзина</button>
            </form>
        </li>
    </ul>

</nav>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="font-family: 'Lobster', cursive;">
    <h1 class="display-3" style="color:#000099">Топаз </h1>
</div>
    <div class="container-fluid">
        <div class="container">
            <div class="row text-left justify-content-around">
                <div class="col-xs-2 col-sm-2 col-lg-4 ">
                    <form action="../src/PHP/del_mat.php" method="post">
                        <div class="form-froup">
                            <label ></label>
                            <input type="text" class="form-control" name="str" value=" " placeholder="Введите текст" required >
                            <button type="submit" class="btn btn-primary">Отправить</button>
                            <?php
                            if(isset($_SESSION['mat']))
                            {
                                ?>
                                <input type="text" class="form-control" name="name"  value="<?=$_SESSION['mat']?>" required >
                                <label></label>
                            <?php
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</body>
</html>