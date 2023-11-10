<?php 
session_start();
session_destroy();

	
	unset($_SESSION['logado']);
	header('Location: index.php');
