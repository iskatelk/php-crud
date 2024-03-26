<?php

require_once 'config/connect.php';

$good_id = $_GET['id'];

$query = "SELECT * FROM `goods` WHERE `id1` = '$good_id'";

$good = mysqli_query($connect, $query);
$good = mysqli_fetch_assoc($good);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Обновить товар</title>
</head>

<body>

    <h2>Обновить товар</h2>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $good_id ?>">
        <p>Название</p>
        <input type="text" name="title" required value="<?= $good['title'] ?>">
        <p>Описание</p>
        <textarea name="description" required><?= $good['description'] ?></textarea>
        <p>Цена</p>
        <input type="number" name="price" required value="<?= $good['price'] ?>">
        <button type="submit">Обновить</button>
    </form>

</body>

</html>