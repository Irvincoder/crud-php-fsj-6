<?php  
include_once "conexion/conexion.php";

$nombre = $_POST['nombre'];
$plataforma = $_POST['plataforma'];
$peso = $_POST['peso'];
$precio = $_POST['precio'];

$sentencia = $conn->prepare("INSERT INTO juegos(nombre,plataforma,peso,precio) VALUES(?,?,?,?);");
$resultado = $sentencia->execute([$nombre,$plataforma,$peso,$precio]);

if ($resultado) {
	//echo "Insertado correctamente";
	header("Location: index.php");

} else {
	echo "Error...";	
}
?>