<?php
session_status();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Lobster&display=swap" rel="stylesheet"> </head>



<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #0000FF;">
    <div class="collapse navbar-collapse" id="navbarSupportedContent" ">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <form action="lichkab.php">
                <button type="submit" class="btn btn-outline-light" style="font-family: 'Lobster', cursive;">Личный кабинет</button>
            </form>
        </li>
        <li class="nav-item active">
            <form action="mat.php">
                <button type="submit" class="btn btn-outline-light" style="font-family: 'Lobster', cursive;">Удаление мата</button>
            </form>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item my-2 my-lg-0">
            <form action="../index.php">
                <button type="submit" class="btn btn-outline-light" style="font-family: 'Lobster', cursive;">Главная</button>
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
    <h3 class="display-6" style="color:#0000FF">Подвески </h3>
</div>


<div class="container">
    <div class="row align-items-center">

        <div class="col">
            <form action="sergy.php">
                <button type="submit" class="btn btn-outline-primary btn-lg" style="font-family: 'Lobster', cursive;">Серьги</button>
            </form>
        </div>

        <div class="col">
            <form action="kolca.php">
                <button type="submit" class="btn btn-outline-primary btn-lg" style="font-family: 'Lobster', cursive;">Кольца</button>
            </form>
        </div>

        <div class="col">
            <form action="podvesky.php">
                <button type="submit" class="btn btn-outline-primary btn-lg" style="font-family: 'Lobster', cursive;">Подвески</button>
            </form>
        </div>

        <div class="col">
            <form action="braslety.php">
                <button type="submit" class="btn btn-outline-primary btn-lg" style="font-family: 'Lobster', cursive;">Браслеты</button>
            </form>
        </div>

        <div class="col">
            <form action="cepochky.php">
                <button type="submit" class="btn btn-outline-primary btn-lg" style="font-family: 'Lobster', cursive;">Цепочки</button>
            </form>
        </div>

        <div class="col">
            <form action="broshky.php">
                <button type="submit" class="btn btn-outline-primary btn-lg" style="font-family: 'Lobster', cursive;">Броши</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P1.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P2.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P3.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P4.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

    </div>
</div>


<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P5.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P6.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P7.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P8.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

    </div>

</div>



<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P9.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P10.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P11.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P12.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

    </div>

</div>


<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P13.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P14.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P15.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P16.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

    </div>

</div>



<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P17.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P18.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P19.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P20.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

    </div>

</div>


<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P22.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P34.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P23.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P33.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

    </div>

</div>

<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P32.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P24.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P30.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P25.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>
    </div>

</div>

<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P31.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P26.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P29.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

        <div class="col-3">
            <form action="">
                <button class="btn btn-outline-primary" id="close-image"><img src="../assets/images/P27.jpg" class="rounded float-left" width="250" height="250"></button>
            </form>
        </div>

    </div>

</div>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</body>
</html>