<?php
session_status();
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
        <?php
        if($user['id'] == 3)
        {
            ?>
            <li class="nav-item active">
                <form action="admin.php">
                    <button type="submit" class="btn btn-outline-light" style="font-family: 'Lobster', cursive;">Админ панель</button>
                </form>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0" method="get" action="find_uvel.php">
                    <input type="search" name="search" class="form-control mr-sm-2" placeholder="Поиск" aria-label="Search" autofocus>
                    <button type="submit" name="subBtn" class="btn btn-outline-success my-2 my-sm-0">Найти</button>
                </form>
            </li>
            <?php
        }
        ?>
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
<?php
if($user['id'] == 3)
{
    $connect = new mysqli("127.0.0.1", "root", "root", "Topaz");
    $search_get = $_GET['search'];
    $sql = "SELECT * FROM `uvel` WHERE `name` LIKE '%$search_get%'";
    $select = $connect->query($sql);
    $select_wile = $select->fetch_assoc();
    $i = 0;
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">priсe</th>
            <th scope="col">picture</th>
            <th scope="col">category</th>
            <th scope="col">amount</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for (; $i < mysqli_num_rows($select); $i++) {
            ?>
            <tr>
                <td><?= $select_wile['id'] ?></td>
                <td><?= $select_wile['name'] ?></td>
                <td><?= $select_wile['price'] ?></td>
                <td><?= $select_wile['picture']  ?></td>
                <td><?= $select_wile['category']  ?></td>
                <td><a href="amount.php?id=<?=$select_wile['id'] ?>">Посмотреть</a></td>
                <td><a style="color: green" href="upd_admin.php?id=<?=$select_wile['id'] ?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure?')" style="color: red" href="/src/PHP/del_admin.php?id=<?=$select_wile['id'] ?>&picture=<?=$uel[3]?>">Delete</a></td>
            </tr>
            <?php
            $select_wile = $select->fetch_assoc();
        }
        ?>
        </tbody>
    </table>
    <?php

}

else{
    echo 'вы не админ';
}
?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</body>
</html>