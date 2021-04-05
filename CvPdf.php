<?php
require('fpdf/fpdf.php');
// require('conexion.php');

require_once('crud_agenda.php');
require_once('agenda.php');
$crud   = new CrudAgenda();
$agenda = new Agenda();
//busca el agenda utilizando el id, que es enviado por GET desde la vista mostrar.php
$agenda=$crud->obtenerAgenda($_GET['id']);

//obtiene todos los amigos de la agenda con el método mostrar de la clase crud



// class PDF extends FPDF
// {
    
// // Page header
// function Header()
// {
//     // Logo
//     $this->Image('icons/usco.png',10,10,23);
//     $this->Image('icons/usco.png',180,10,23);
//     // Arial bold 15
//     $this->SetFont('Arial','B',15);
//     // Move to the right
//     $this->Cell(80);
//     // Title
//     $this->Cell(30,10,'Curriculum Vitae',0,0,'C');
//     // Line break
//     $this->Line(60,20,150,20);
//     $this->Ln(20);
// }

// // Page footer
// function Footer()
// {
//     // Position at 1.5 cm from bottom
//     $this->SetY(-15);
//     // Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Page number
//     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    
// }
// }




// Instanciation of inherited class
$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',20);




    // Move to the right
$pdf->Cell(80);
    // Title
$pdf->Cell(30,10,'Datos Basicos',0,10,'C',0);
$pdf->Line(75,40,135,40);
$pdf->Line(75,40.5,135,40.5);

$pdf->SetFont('Times','',12);
$pdf->Cell(-60);
$pdf->Cell(0,30,'Nombre:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-30,'nombre',0,10,'L',0);

$pdf->SetFont('Times','',12);
$pdf->Cell(-40);
$pdf->Cell(0,45,'Apellido:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-45,'aqui va el apellido',0,10,'L',0);

$pdf->SetFont('Times','',12);
$pdf->Cell(-40);
$pdf->Cell(0,60,'Documento:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-60,'aqui va el documento',0,10,'L',0);

$pdf->SetFont('Times','',12);
$pdf->Cell(-40);
$pdf->Cell(0,75,'Telefono:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-75,'aqui va el Telefono',0,10,'L',0);

$pdf->Cell(-40);
$pdf->Cell(0,90,'Fecha de nacimiento:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-90,'aqui va la f. nac',0,10,'L',0);

$pdf->Cell(-40);
$pdf->Cell(0,105,'Correo electronico:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-105,'aqui va el correo electroncio',0,10,'L',0);

$pdf->Cell(-40);
$pdf->Cell(0,120,'Direccion:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-120,'aqui va la direccion',0,10,'L',0);


$pdf->SetFont('Times','',20);
$pdf->Cell(20);
    // Title
$pdf->Cell(30,160,'Informacion Academica',0,10,'C',0);
$pdf->Line(65,125,145,125);
$pdf->Line(65,125.5,145,125.5);

$pdf->SetFont('Times','',12);
$pdf->Cell(-60);
$pdf->Cell(0,-115,'Titulo:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,115,'aqui va el titulo',0,10,'L',0);

$pdf->Cell(-40);
$pdf->Cell(0,-100,'Institucion:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,100,'aqui va la institucion',0,10,'L',0);

$pdf->Cell(-40);
$pdf->Cell(0,-85,'Fecha de graduacion:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,85,'aqui va la fecha de graducacion',0,10,'L',0);


$pdf->SetFont('Times','',20);
$pdf->Cell(20);
    // Title
$pdf->Cell(30,-50,'Informacion Laboral',0,10,'C',0);
$pdf->Line(65,180,145,180);
$pdf->Line(65,180.5,145,180.5);

$pdf->SetFont('Times','',12);
$pdf->Cell(-60);
$pdf->Cell(0,81,'Empresa:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-81,'aqui va la empresa',0,10,'L',0);

$pdf->Cell(-40);
$pdf->Cell(0,96,'Cargo Ocupado:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-96,'aqui va el cargo',0,10,'L',0);

$pdf->Cell(-40);
$pdf->Cell(0,111,'Fecha de ingreso:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-111,'aqui va la f ingreso',0,10,'L',0);

$pdf->Cell(-40);
$pdf->Cell(0,126,'Fecha de salida:',0,10,'L',0);
$pdf->Cell(40);
$pdf->Cell(0,-126,'aqui va la f salida',0,10,'L',0);

$pdf->SetTitle('Curriculum vitae');
$pdf->SetAuthor('Crissoft and jisita');

$pdf->Output();

$crud=new CrudAgenda();
$agenda= new Agenda();
$agenda=$crud->obtenerAgenda($_GET['id']);



?>