<?php session_start();

session_destroy();
$_SESSION = array();

header('Location: login.php');

//Hola mundo
//Segundo comentario
?>