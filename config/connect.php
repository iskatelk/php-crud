<?php
$login = 'root';
$password = '';
$dbName = 'crud';

$connect = mysqli_connect('localhost', $login, $password, $dbName);
if (!$connect) {
    die ('Ошибка подключения к БД');
}