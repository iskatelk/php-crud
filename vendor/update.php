<?php

require_once '../config/connect.php';


$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

$query = "UPDATE `goods` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `goods`.`id1` = '$id'";

mysqli_query($connect, $query);

header('Location: /');