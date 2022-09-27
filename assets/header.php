<?php 
include_once "conexion/conexion.php";
include_once "read.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tienda de video juegos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
	<div class="text-center"><h1>Tienda de video juegos</h1></div>
	<div class="container text-center">
		<table class="table table-dark">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Plataforma</th>
				<th>Peso</th>
				<th>Precio</th>
				<th>Acciones</th>
			</tr>
			<?php  
				foreach ($juego as $dato) {
			?>
				<tr>
					<td><?php echo $dato->id; ?></td>
					<td><?php echo $dato->nombre; ?></td>
					<td><?php echo $dato->plataforma; ?></td>
					<td><?php echo $dato->peso; ?></td>
					<td><?php echo $dato->precio; ?></td>
					<td><a href="updates.php?id=<?php echo $dato->id?>"><iconify-icon icon="emojione:pencil"></iconify-icon></a></td>
				</tr>
			<?php  
				}
			?>				
		</table>
	</div>
	<div>
		<div class="text-center"><h1>Registro de juegos</h1></div>
		<div class="container text-center">
		<table class="table">
		<form action="create.php" method="post">
			<div class="mb-3"><input class="form-control" type="text" name="nombre" placeholder="Nombre"></div><br>
			<div class="mb-3"><input class="form-control" type="text" name="plataforma" placeholder="Plataforma"></div><br>
			<div class="mb-3"><input class="form-control" type="text" name="peso" placeholder="Peso"></div><br>
			<div class="mb-3"><input class="form-control" type="text" name="precio" placeholder="Precio"></div><br>
			<div class="mb-3"><input class="btn btn-primary" type="submit" value="Ingresar">
		</form>
		</table>
		</div>
	</div>
<script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>