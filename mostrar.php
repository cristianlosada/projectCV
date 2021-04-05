<?php
//incluye la clase Agenda y CrudAgenda
require_once('crud_agenda.php');
require_once('agenda.php');
$crud=new CrudAgenda();
$agenda= new Agenda();
//obtiene todos los amigos de la agenda con el método mostrar de la clase crud
$listaAgenda=$crud->mostrar();
?>

<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

    <link rel="shortcut icon" href="icons/curriculum.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">

    <!-- google   fonts - stilos de letras -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/eb6b06f2da.js" crossorigin="anonymous"></script>

	<title>Curriculum Vitae</title>
</head>

<body class="container bg-dark">

<!-- Preloader -->
<div class="preloader-outer">
	<div class="preloader">
		<div class="lines">
			<div class="line line-1"></div>
			<div class="line line-2"></div>
			<div class="line line-3"></div>
		</div>

		<div class="loading-text"> Curriculum </div>
	</div>
</div>
<!-- Preloader end -->

<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<main role="main" class="inner cover">
    <a style=" text-decoration: none;" href="index.php"><h1 class="cover-heading" style="color: #ccc;" > Curriculum Vitae.</h1></a>
    </main>
		</nav>
	</div>
	<hr class="m-0 p-0">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container justify-content-center">
				<p class="navbar-brand fs-5 m-0">Datos básicos</p>
			</div>
		</nav>
	</div>
	<div class="table-responsive">
		<table class="table table-dark table-triped">

		<thead>
		
		

		<tr>
			<th scope="col">DOCUMENTO</th>
			<th scope="col">NOMBRES</th>
			<th scope="col">APELLIDOS</th>
			<th scope="col">F. NACIMIENTO</th>
			<th scope="col">DIRECCIÓN</th>
			<th scope="col">TELÉFONO</th>
			<th scope="col">CORREO</th>
			<th scope="col">Mas Info</th>
			<th scope="col">Actualiza</th>
			<th scope="col">Elimina</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($listaAgenda as $agenda) {?>
			<tr>
				<td><?php echo $agenda->getDocumento() ?></td>
				<td><?php echo $agenda->getNombre() ?></td>
				<td><?php echo $agenda->getApellidos() ?></td>
				<td><?php echo $agenda->getEdad() ?></td>
				<td><?php echo $agenda->getDireccion() ?></td>
				<td><?php echo $agenda->getTelefono() ?></td>
				<td><?php echo $agenda->getCorreo() ?></td>
				<td class="text-center"><a class="btn btn-secondary" href="more.php?id=<?php echo $agenda->getId()?>&accion=a"><i class="fas fa-eye" ></i></a></td>
				<td class="text-center"><a class="btn btn-secondary" href="actualizar.php?id=<?php echo $agenda->getId()?>&accion=a"><i class="fas fa-pen-square" ></i></a></td>
				<td class="text-center"><a class="btn btn-secondary" href="administrar_agenda.php?id=<?php echo $agenda->getId()?>&accion=e"><i class="fas fa-trash-alt"></i></a></td>
			</tr>
			<?php }?>
		</tbody>

			
		</table>
	</div>
	<div class="d-grid gap-2 mt-4">
		<a href="index.php" class="btn btn-danger" type="button">Volver</a>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js " integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin=" anonymous "></script>
	<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.onepage-scroll.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.filterizr.js"></script>
	<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/smoothscroll.min.js"></script>
</body>

</html>