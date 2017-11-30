<?php 
// Include database class
include 'conectar.class.php';
$database = new Database();

	$database->query("UPDATE datos SET asiste=".$_GET['n']." WHERE idpm=".$_GET['x']);
    $database->execute();
    header("location:../asistencia.php");
?>