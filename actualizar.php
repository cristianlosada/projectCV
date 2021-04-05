<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_agenda.php');
	require_once('agenda.php');
	$crud   = new CrudAgenda();
	$agenda = new Agenda();
	//busca el agenda utilizando el id, que es enviado por GET desde la vista mostrar.php
	$agenda=$crud->obtenerAgenda($_GET['id']);
?>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

    <link rel="shortcut icon" href="icons/curriculum.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    

    <!-- google   fonts - stilos de letras -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/eb6b06f2da.js" crossorigin="anonymous"></script>

	<title>Curriculum Vitae</title>
</head>

<body class="container bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

<main role="main" class="inner cover">
    <h1 class="cover-heading" style="color: #ccc;">Curriculum Vitae.</h1>
    </main>

	<hr class="m-0 p-0">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container justify-content-center">
				<p class="navbar-brand fs-2 m-0">Actualizacion de Curriculum Vitae</p>
			</div>
		</nav>
	</div>

	<section>
    <div class="center">
		<form action='administrar_agenda.php' method='post'>

		<hr class="mt-0 mb-0 p-0">

		<input type='hidden' name='id' value='<?php echo $agenda->getId()?>'>
			
		<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Documento</label>
			<input type='number' class="form-control mb-2" name='documento' value="<?php echo $agenda->getDocumento() ?>" >
			<label style="color: #ccc; font-size: 17 ;" class="form-label">Nombre</label>
			<input type='text' class="form-control mb-2" name='nombre' value="<?php echo $agenda->getNombre()?>" >
			<label style="color: #ccc; font-size: 17 ;" class="form-label">Apellido</label>
			<input type='text' class="form-control mb-2" name='apellidos' value="<?php echo $agenda->getApellidos() ?>" >
			<label style="color: #ccc; font-size: 17 ;" class="form-label">Direccion</label>
			<input type='text' class="form-control mb-2" name='direccion' value="<?php echo $agenda->getDireccion()?>" >
			<label style="color: #ccc; font-size: 17 ;" class="form-label">Telefono</label>
			<input type='number' class="form-control mb-2" name='telefono' value="<?php echo $agenda->getTelefono() ?>" >
			<label  style="color: #ccc; font-size: 17 ;" class="form-label">Correo electronico</label>
			<input type='email' class="form-control mb-2" name='correo' value="<?php echo $agenda->getCorreo() ?>">
			<label  style="color: #ccc; font-size: 17 ;" class="form-label">Fecha de nacimiento</label>
			<input type='date' class="form-control mb-2" name='edad' value="<?php echo $agenda->getEdad() ?>" >

			<hr class="mt-0 mb-0 p-0">

			<label style="color: #ccc; font-size: 17 ;" class="form-label">Titulo</label>
			<input type='text' class="form-control mb-2" name='titulo' value="<?php echo $agenda->getTitulo() ?>" >
			<label  style="color: #ccc; font-size: 17 ;" class="form-label">Institucion educativa</label>
			<input type='text' class="form-control mb-2" name='institucion' value="<?php echo $agenda->getInstitucion()?>" >
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha graduacion</label>
			<input type='date' class="form-control mb-2" name='fecha' value="<?php echo $agenda->getFecha() ?>" >

			<hr class="mt-0 mb-0 p-0">

			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Empresa</label>
			<input type='text' class="form-control mb-2" name='empresa' value="<?php echo $agenda->getEmpresa() ?>" >
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Cargo</label>
			<input type='text' class="form-control mb-2" name='cargo' value="<?php echo $agenda->getCargo()?>" >
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha inicio</label>
			<input type='date' class="form-control mb-2" name='getIni' value="<?php echo $agenda->getIni() ?>" >
			<label style="color: #ccc; font-size: 17 ;" class="form-label">Fecha finalizacion</label>
			<input type='date' class="form-control mb-2" name='getCulmi' value="<?php echo $agenda->getCulmi() ?>" >

			<input type='hidden' name='actualizar' value='actualizar'>

			<hr class="mt-0 mb-0 p-0">


	<div class="d-grid gap-2 mt-4">
		<input class="btn btn-primary" type='submit' value='Guardar'>
		<a href="mostrar.php" class="btn btn-danger" type="button">Volver</a>
	</div>
	</form>
	</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js " integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin=" anonymous "></script>
</body>

</html>