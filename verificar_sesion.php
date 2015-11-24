<?php 
session_start();
if($_SESSION["usuariosesion"]=="")

header("location:index.php");

?>