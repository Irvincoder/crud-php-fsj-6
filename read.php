<?php  
include_once "conexion/conexion.php";

$sentencia = $conn->query("SELECT * FROM juegos");
$juego = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>