<?php

$servername = "127.0.0.1";
$username = "root";
$password = "kali";
$dbName = "first";

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
    die("<div class='text-center'>Ошибка подключения: </div>" . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if (!mysqli_query($link, $sql)) {
    echo "<div class='text-center'>Не удалось создать БД</div>";
}

mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS users(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL
)";

if(!mysqli_query($link, $sql)) {
    echo "<div class='text-center'>Не удалось создать таблицу Users</div>";
}

mysqli_close($link);

?>