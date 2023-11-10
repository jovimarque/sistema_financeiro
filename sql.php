<?php



$DB_HOST ='localhost';
$DB_NAME='teste';
$DB_USER ='root';
$DB_PASS='';



$conn = new PDO('mysql:host='. $DB_HOST .';dbname='.$DB_NAME,$DB_USER,$DB_PASS);

//Habilitar erros PDO

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false );