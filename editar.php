<?php  
print_r($_POST);

include_once "conexion/conexion.php";

$identificador = $_POST['id'];
$nombre = $_POST['nombre'];
$plataforma = $_POST['plataforma'];
$peso = $_POST['peso'];
$precio = $_POST['precio'];

$consulta = $conn->prepare("UPDATE juegos SET nombre = ?, plataforma = ?, peso = ?, precio = ? WHERE id = ?");
$respuesta = $consulta->execute([$nombre,$plataforma,$peso,$precio,$identificador]);

if ($respuesta) {
	//echo "actualizado correctamente";
	header("Location: index.php");
}else{
	echo "error al actualizar";
}
?>