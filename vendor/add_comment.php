<?php

require_once '../config/connect.php';


$product_id = $_POST['id'];
$comment = $_POST['comment'];

$query = "INSERT INTO `comments` (`id`, `product_id`, `comment`) VALUES (NULL, '$product_id', '$comment')";

mysqli_query($connect, $query);

header("Location: ../product.php?id=$product_id");