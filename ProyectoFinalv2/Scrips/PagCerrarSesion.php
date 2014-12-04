<?php
session_start();

$_SESSION['usuario'] = array();

session_destroy();

echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/FrmLogin.php';</script>";
?>

