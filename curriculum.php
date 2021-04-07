<?php
	require_once('crud_agenda.php');
	require_once('agenda.php');
	$crud   = new CrudAgenda();
	$agenda = new Agenda();
	//busca el agenda utilizando el id, que es enviado por GET desde la vista mostrar.php
	$agenda=$crud->obtenerAgenda($_GET['id']);

	?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Curriculum Vitae</title>
	<meta name="description" content="Blvck - Personal vCard & Resume Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="icons/curriculum.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body style="    background-color: #cacaca;">

<div id="imprimir">


      

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

<!-- Main Wrapper -->
<main class="wrapper" >

	<!-- Header -->
	<header class="header pull-left" style="    background-color: #2a2a2a;" >

		<!-- Mobile menu -->
		<div class="mobile-bar visible-sm visible-xs">
			<div class="hamburger-menu">
				  <div class="bar"></div>	
			</div>
		</div>
		<!-- Mobile menu end -->

		<div class="avatar">
			<img src="https://www.uienfemg.com/wp-content/uploads/elementor/thumbs/bg_foto_perfil_generica-1-ov79mqeiarzxvlbjxdog85jkebg3bftnoalo96lh28.jpg" alt="avatar">
		</div>

		<div class="name">
			<h1><?php echo ucfirst($agenda->getNombre())?> <?php echo ucfirst($agenda->getApellidos())?></h1>
			<span><?php echo ucfirst($agenda->getCargo())?></span>
		</div>

		<!-- Social Icons -->
		<div class="social-icons">
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
				
			</ul>
		</div>
		<!-- Social Icons end -->

		<!-- Navigation bar -->
		<nav class="main-nav">
			<ul class="navigation">
				
				<li><a href="#about">About Me</a></li>
				<li><a href="#experience">Expereince</a></li>
				<li><a href="#education">Education</a></li>
			</ul>
		</nav>
		<!-- Navigation bar end -->

	

	</header>
	<!-- Header end -->

	<!-- Main Content -->
	<div class="main-content pull-right">

		
		<!-- Section About -->
		<section id="about" class="about">

			<div class="section-header">
				<h2>About Me</h2>
				
			</div>

			<!-- Intro -->
			<div class="intro">
				
				<p>Hello, My name is <strong><?php echo ucfirst($agenda->getNombre())?> <?php echo ucfirst($agenda->getApellidos())?></strong> . Lorem ipsum dolor sit amet, usu sumo dicant vulputate in. Quando fabellas adipiscing nam an. An vis congue oporteat, no eros facer suavitate eos. An debet affert aliquid ius. Veritus placerat est ea, est ne nominavi suscipit maluisset.</p>

				<table>
            		<tr>
                		<td style="padding-right: 100px;">
							<ul class="info">
								<li><strong>Nombres:</strong> <?php echo ucfirst($agenda->getNombre()) ?> </li>
								<li><strong>Apellidos:</strong> <?php echo ucfirst($agenda->getApellidos())?> </li>
								<li><strong>Email:</strong> <?php echo $agenda->getCorreo()?></li>
								<li><strong>Telefono:</strong> +57 <?php echo $agenda->getTelefono() ?></li>
							</ul>
						</td>
						
                		<td>
							<ul class="info">
								<li><strong>Documento:</strong> <?php echo $agenda->getDocumento() ?></li>
								<li><strong>Direccion:</strong> <?php echo $agenda->getDireccion() ?> </li>
								<li><strong>Fecha de Nac:</strong> <?php echo $agenda->getEdad()?> </li>
								
							</ul>
						</td>
            		</tr>
       			 </table>
			</div>
			<!-- Intro end -->



		<!-- Section Resume -->
		<section id="experience" class="resume">
			
			<div class="section-header">
				<h2>Expereince</h2>
				
			</div>

			<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="top-item resume-item">
								<h2><?php echo $agenda->getEmpresa() ?></h2>
								<span> <?php echo $agenda->getCargo() ?>     |      <?php echo $agenda->getIni() ?>    -    <?php echo $agenda->getCulmi() ?></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
							</div>
						</div>
	
			</div>

		</section>

		<section id="education" class="resume">
			
			<div class="section-header">
				<h2>Education</h2>
				
			</div>

			<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="top-item resume-item">
								<h2><?php echo $agenda->getInstitucion() ?></h2>
								<span> <?php echo $agenda->getTitulo() ?>    |     <?php echo $agenda->getFecha() ?>  </span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
							</div>
						</div>
	
			</div>

		</section>
		<!-- Section Resume end -->


		
		

		


	</div>
	<!-- Main Content end -->

</main>
<!-- Main Wrapper end -->

<!-- SCRIPTS -->
</div>

<input class="btn btn-secondary"  type="button" onclick="printDiv('imprimir')" value="imprimir Curriculum en PDF" />



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
<script>
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>


</body>
</html>

