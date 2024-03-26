<?php

require_once '../config/connect.php';


$id = $_GET['id'];

$query = "DELETE FROM `goods` WHERE `goods`.`id1` = '$id'";

mysqli_query($connect, $query);

header('Location: /');