<?php  
include_once "conexion/conexion.php";
$codigojuego = $_GET['id'];

$consulta = $conn->prepare("SELECT * FROM juegos WHERE id = ?");

$consulta->execute([$codigojuego]);

$juego = $consulta->fetch(PDO::FETCH_OBJ);
//print_r($juego);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar Datos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<div class="text-center jumbotron"><h1>Actualizar Datos</h1></div>
	<div class="container text-center">
	<table class="table">
	<form method="post" action="editar.php">
		<div class="mb-3"><input type="text" value="<?php echo $juego->id ?>"  name="id" readonly></div><br>
		<div class="mb-3"><input type="text" value="<?php echo $juego->nombre ?>"   name="nombre" autofocus></div><br>
		<div class="mb-3"><input type="text" value="<?php echo $juego->plataforma ?>"   name="plataforma"></div><br>
		<div class="mb-3"><input type="text" value="<?php echo $juego->peso ?>"   name="peso"></div><br>
		<div class="mb-3"><input type="text" value="<?php echo $juego->precio ?>"   name="precio"></div><br>
		<div class="mb-3"><input class="btn btn-primary" type="submit" value="Actualizar">
	</form>
	</table>
	</div>
</body>
</html>