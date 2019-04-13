<?php

//Conectarse a una base de datos llamada contososa
$mysqli = new mysqli('localhost', 'root', '', 'contososa');

//Realiza un 'query'
$name = $mysqli->real_escape_string($_GET['name']);
$sql = "SELECT * FROM purchase WHERE name = '{$name}'";
$result = $mysqli->query($sql);

//Obtenemos el resultado 
$rows = $result->fetch_all();
var_dump($rows);