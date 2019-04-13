<?php

//Conectarse a una base de datos llamada contososa
//Hostname: localhost, username: root, password: , db: contososa
$mysqli = new mysqli('localhost', 'root', '', 'contososa');

//Realiza un 'query'
$sql = "SELECT * FROM purchase";
$result = $mysqli->query($sql);

//Obtenemos el resultado 
$rows = $result->fetch_all();
var_dump($rows);

$sql = "INSERT INTO purchase (`name`, `email`, `product`) 
    VALUES ('Daniel', 'daniel@gmail.com', 'SEO')";
$result = $mysqli->query($sql);

$sql = "SELECT * FROM purchase";
$result = $mysqli->query($sql);

//Obtenemos el resultado 
$rows = $result->fetch_all();
var_dump($rows);

$purchase->name = 'Daniel';
$purchase->email = 'daniel@gmail.com';
$purchase->product = 'SEO';
$purchase->save();
