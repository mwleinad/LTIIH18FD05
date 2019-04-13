<?php
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];

if(!is_numeric($number1) || !is_numeric($number2)) {
    echo "Ambos cambos deben de ser numeros";
} else {
    echo $number1 + $number2;
}
