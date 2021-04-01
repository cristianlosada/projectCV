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

	<style>
    .center {
      width: 700px;
      border: 15px solid #999;
      padding: 50px;
      margin: 0 auto;
      position: relative;
    }
  
</style>
</head>
<!-- TITULOS -->

<body class="container bg-dark "   style="background-color: #111;"  >
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
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
			<div class="container-fluid justify-content-center">
				<p class="navbar-brand fs-2 m-0">Datos básicos</p>
			</div>
		</nav>
	</div>

	<!-- TITULOS -->

	
	<section>
    <div class="center">
        <div class="overlai" id="overlai">
		<form action='administrar_agenda.php' method='post' class="mt-4">
			<input type='number' class="form-control mb-2" name='documento' placeholder="Documento" required>
			<input type='text' class="form-control mb-2" name='nombre' placeholder="Nombres" required>
			<input type='text' class="form-control mb-2" name='apellidos' placeholder="Apellidos" required>
			<input type='text' class="form-control mb-2" name='direccion' placeholder="Direccion" required>
			<input type='number' class="form-control mb-2" name='telefono' placeholder="Telefono" required>
			<input type='email' class="form-control mb-2" name='correo' placeholder="Correo electronico" required>
			<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha de nacimiento</label>
			<input type='date' class="form-control mb-2" name='edad' placeholder="Fecha de Nacimiento" required>
            <!-- </form> -->
    	</div>
  	</div>
    </section>


		<!-- ESTUDIOS REALIZADOS -->
		<hr class="mt-2 mb-0 p-0">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid justify-content-center">
					<p class="navbar-brand fs-2 m-0">Estudios realizados</p>
				</div>
			</nav>
		</div>
		<hr class="mt-0 mb-2 p-0">


			<section>
    <div class="center">
        <div class="overlai" id="overlai">
		
			<div class="contenedor-inputs">
				<input type='text' class="form-control mb-2" name='titulo' placeholder="Titulo" required>
				<input type='text' class="form-control mb-2" name='institucion' placeholder="Institucion" required>
				<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha Culminacion</label>
				<input type='date' class="form-control mb-2" name='fecha' placeholder="Fecha Culminacion" required>
                </div>
            <!-- </form> -->
    	</div>
  	</div>
    </section>

			<!-- LABORAL -->

			<hr class="mt-2 mb-0 p-0">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<div class="container-fluid justify-content-center">
						<p class="navbar-brand fs-2 m-0">Laboral</p>
					</div>
				</nav>
			</div>
			<hr class="mt-0 mb-2 p-0">

	<section>
    <div class="center">
        <div class="overlai" id="overlai">
           
                <div class="contenedor-inputs">
					<input type='text' class="form-control mb-2" name='empresa' placeholder="Nombre de la empresa" required>
					<input type='text' class="form-control mb-2" name='cargo' placeholder="Cargo ocupado" required>
					<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha Inicio</label>
					<input type='date' class="form-control mb-2" name='ini' placeholder="Fecha inicio" required>
					<label for="fecha" style="color: #ccc; font-size: 17 ;" class="form-label">Fecha Culminacion</label>
					<input type='date' class="form-control mb-2" id="fecha" name='culmi' placeholder="Fecha culminacion" required>
                </div>
            
    	</div>
  	</div>
    </section>
				

				<section>
			<input type='hidden' name='insertar' value='insertar'>
	  <hr class="mb-4 mt-6 p-12">
		<div class="d-grid gap-2">
			<input type='hidden' name='insertar' value='insertar'>
			<button class="btn btn-primary" type="submit" value="Guardar">Guardar</button>
			<a href="index.php" class="btn btn-secondary">Volver</a>
	    </div>
		</section>
		</form>
			<hr class="mt-5 mb-2 p-0">

			</div>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js " integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin=" anonymous "></script>
    

</body>

</html>