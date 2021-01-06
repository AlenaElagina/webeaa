<?php
session_status();
require_once ('../src/PHP/functions.php');
$user = auth();
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    $mysql = new mysqli('localhost', 'root', 'root', 'Topaz');
    $id = $_GET['id'];
    $add = $mysql->query("SELECT * FROM `amount` WHERE id_uvel = $id");
    $add = mysqli_fetch_all($add);
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id_amount</th>
            <th scope="col">count_total</th>
            <th scope="col">count_buy</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($add as $uel) {
            ?>
            <tr>
                <td><?= $uel[0] ?></td>
                <td><?= $uel[1] ?></td>
                <td><?= $uel[2]?></td>
                <td><a style="color: green" href="upd_amount.php?id=<?=$uel[0]?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure?')" style="color: red" href="/src/PHP/del_amount.php?id=<?=$uel[0]?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <div>
        <form action ="../src/PHP/add_amount.php" method="post"">
            <h4>count_total</h4>
            <input type="text" name="count_total" placeholder="count_total" required>
            <h4>count_buy</h4>
            <input type="number" name="count_buy" placeholder="count_buy" required>
            <h4>Картинка</h4>
            <input type="hidden" name="id_uvel" value="<?=$id?>">
            <input type='submit' value='Добавить' >
        </form
    </div>
    <?php
}
else{
    echo 'вы не админ';
}
?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</body>
</html>