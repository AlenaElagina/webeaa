<?php
session_start();
require_once ('../src/PHP/functions.php');
$user = auth();
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
            <form action="mat.php">
                <button type="submit" class="btn btn-outline-light" style="font-family: 'Lobster', cursive;">Удаление мата</button>
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
<?php
if(isset($_SESSION['user']))
{
    ?>
<div class="container-fluid">
    <div class="container">
        <div class="row text-left justify-content-around">
            <div class="col-xs-2 col-sm-2 col-lg-4 ">
                <form action="../src/PHP/change.php" method="post" class="auth">
                    <h5 class="Modal-title">Добро пожаловать в личный кабинет <?=$_SESSION['user']['name']?> </h5>
                    <h5 class="Modal-title">Сменить данные: </h5>
                    <div class="form-froup">
                        <label ></label>
                        <input type="text" class="form-control" name="name" id="usrname" placeholder="<?= $user['name'] ?>">
                        <label></label>
                        <input type="text" class="form-control" name="surname" placeholder="<?= $user['surname'] ?>">
                        <label></label>
                        <input type="email" class="form-control" name="email" placeholder="<?= $user['email'] ?>" >
                        <label></label>
                        <input type="password" class="form-control" name="pass"  id="psw" placeholder="Пароль"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        <label></label>
                        <label></label>
                        </div>
                        <div id="message" style="font-family: unset">
                            <h3>Пароль должен содержать следующее:</h3>
                            <p id="letter" class="invalid">Хотябы одна строчная буква Английская</p>
                            <p id="capital" class="invalid">Хотябы одна заглавня буква< Английская</p>
                            <p id="number" class="invalid">Число</p>
                            <p id="length" class="invalid">От 8 до 32 символов</p>
                        </div>
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >
                        <button type="submit" class="btn btn-primary">Сменить</button>
                </form>
                    <form action="../src/PHP/user_exit.php">
                        <p><input type="submit">Выйти</p>
                    </form>
                </div>
            </div>>
        </div>
    </div>
</div>
<?php
}else{
?>
<div class="container-fluid">
    <div class="container">
        <div class="row text-left justify-content-around">
            <div class="col-xs-2 col-sm-2 col-lg-4 ">
                <form action="../src/PHP/registration.php" method="post" class="auth">
                    <h5 class="Modal-title">Регестрация: </h5>
                    <div class="form-froup">
                        <label ></label>
                        <input type="text" class="form-control" name="name"  placeholder="Имя" required >
                        <label></label>
                        <input type="text" class="form-control" name="surname" placeholder="Фамилия" required >
                        <label></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required >
                        <label></label>
                        <input type="password" class="form-control" name="pass"  id="psw" placeholder="Пароль" required
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        <label></label>
                        <label></label>
                    </div>
                    <div id="message" style="font-family: unset">
                        <h3>Пароль должен содержать :</h3>
                        <p id="letter" class="invalid">одна строчная буква</p>
                        <p id="capital" class="invalid">одна заглавня буква</p>
                        <p id="number" class="invalid">Число</p>
                        <p id="length" class="invalid">От 6 до 32 символов</p>
                    </div>
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >
                    <button type="submit" class="btn btn-primary">Регестрация</button>
                </form>
            </div>
            <div class="col-xs-3 col-sm-2 col-lg-4">
                <form action="../src/PHP/auth.php" method="post" class="auth" >
                    <div class="form-froup">
                        <h5 class="Modal-title">Авторизация</h5>
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                        <label></label>
                        <label></label>
                        <input type="password" class="form-control" name="pass" placeholder="Пароль" required>
                        <label></label>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                    <?php
                    if($_SESSION['mess1'])
                        echo '<div class="msg">'. $_SESSION['mess1'] .'</div>';
                    unset($_SESSION['mess1']);
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
    <?php
    }
    ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</body>
</html>