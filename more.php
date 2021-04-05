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

	<style>
    .center {
      width: 700px;
      /* border: 15px solid #555;
      padding: 50px; */
      margin: 0 auto;
      position: relative;
    }
	</style>
	<title>Curriculum Vitae</title>
</head>

<body class="container bg-dark">



<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<main role="main" class="inner cover">
    <a style=" text-decoration: none;" href="index.php"><h1 class="cover-heading" style="color: #ccc;" > Curriculum Vitae.</h1></a>
	<td class="text-center"><a class="btn btn-secondary" href="crearPdf.php?id=<?php echo $agenda->getId()?>&accion=a"><i class="fa fa-download" aria-hidden="true"> </i>  Download Curriculum</a>

</td>
<td class="text-center"><a class="btn btn-secondary" href="curriculum.php?id=<?php echo $agenda->getId()?>&accion=a"><i class="fa fa-download" aria-hidden="true"> </i>  Download Curriculum</a>

</td>
    </main>
		</nav>
	</div>
	<hr class="m-0 p-0">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container justify-content-center">
				<a class="navbar-brand fs-4 fw-bold m-0" href="#">Curriculum Vitae: <strong><?php echo ucfirst($agenda->getNombre())?></strong> </a>
			</div>
		</nav>
	</div>

	<hr class="mt-0 mb-0 p-0">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid justify-content-center">
				<p class="navbar-brand fs-2 m-0">Datos básicos</p>
			</div>
		</nav>
	</div>
	<hr class="mt-0 mb-5 p-0">

	<section>
    <div class="center">
        <div class="overlai" id="overlai">
		<form action='administrar_agenda.php' method='post' class="mt-4">
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Documento</label>
			<input type='number' class="form-control mb-2" name='documento' placeholder="<?php echo $agenda->getDocumento() ?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Nombre</label>
			<input type='text' class="form-control mb-2" name='nombre' placeholder="<?php echo $agenda->getNombre()?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Apellido</label>
			<input type='text' class="form-control mb-2" name='apellidos' placeholder="<?php echo $agenda->getApellidos() ?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Direccion</label>
			<input type='text' class="form-control mb-2" name='direccion' placeholder="<?php echo $agenda->getDireccion()?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Telefono</label>
			<input type='number' class="form-control mb-2" name='telefono' placeholder="<?php echo $agenda->getTelefono() ?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Correo electronico</label>
			<input type='email' class="form-control mb-2" name='correo' placeholder="<?php echo $agenda->getCorreo() ?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha de nacimiento</label>
			<input type='text' class="form-control mb-2" name='edad' value="<?php echo $agenda->getEdad() ?>" disabled>
            <!-- </form> -->
    	</div>
  	
    </section>
				<hr class="mt-5 mb-0 p-0">
				<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid justify-content-center">
				<p class="navbar-brand fs-2 m-0">Estudios Realizadoss</p>
			</div>
		</nav>
	</div>
				<hr class="mt-0 mb-0 p-0">
				<section>
    <div class="center">
        <div class="overlai" id="overlai">
		<form action='administrar_agenda.php' method='post' class="mt-4">
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Titulo</label>
			<input type='number' class="form-control mb-2" name='documento' placeholder="<?php echo $agenda->getTitulo() ?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Institucion educativa</label>
			<input type='text' class="form-control mb-2" name='nombre' placeholder="<?php echo $agenda->getInstitucion()?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha graduacion</label>
			<input type='text' class="form-control mb-2" name='apellidos' placeholder="<?php echo $agenda->getFecha() ?>" disabled>
			
            <!-- </form> -->
    	</div>
  	</div>
    </section>
		
				<hr class="mt-0 mb-0 p-0">
				<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid justify-content-center">
				<p class="navbar-brand fs-2 m-0">Informacion Laboral</p>
			</div>
		</nav>
	</div>
				<hr class="mt-0 mb-0 p-0">

				<section>
    <div class="center">
        <div class="overlai" id="overlai">
		<form action='administrar_agenda.php' method='post' class="mt-4">
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Empresa</label>
			<input type='number' class="form-control mb-2" name='documento' placeholder="<?php echo $agenda->getEmpresa() ?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Cargo</label>
			<input type='text' class="form-control mb-2" name='nombre' placeholder="<?php echo $agenda->getCargo()?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha inicio</label>
			<input type='text' class="form-control mb-2" name='apellidos' placeholder="<?php echo $agenda->getIni() ?>" disabled>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha finalizacion</label>
			<input type='text' class="form-control mb-2" name='apellidos' placeholder="<?php echo $agenda->getCulmi() ?>" disabled>
			
            <!-- </form> -->
    	</div>
  	</div>
    </section>
	</div>

		
	</div>
	<div class="d-grid gap-2 mt-4 mb-5">
		<a href="mostrar.php" class="btn btn-danger" type="button">Volver</a>
	</div>
	</form>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js " integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin=" anonymous "></script>

</body>

</html>