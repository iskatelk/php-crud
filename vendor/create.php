<?php

require_once '../config/connect.php';


$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];


$query = "INSERT INTO `goods` (`id1`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')";

mysqli_query($connect, $query);

header('Location: /');