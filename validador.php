<?php
session_start();

if($_SESSION['logado'] != 'SIM' ){

    header('Location: index.php');
}