<?php 
// Include database class
include 'conectar.class.php';

	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$nombre1 = $_POST['nombre1'];
	$nombre2 = $_POST['nombre2'];
	$cedula	= $_POST['idperson'];
	$edad = $_POST['edad'];
	$tel = $_POST['tel'];
	$cel = $_POST['cel'];
	$sexo = $_POST['sexo'];
	$depar = $_POST['depar'];
	$study = $_POST['study'];
	$lugar = $_POST['lugar'];
	$carrera = $_POST['carrera'];
	$turno = $_POST['turno'];
	$tpm	= $_POST['pm'];
		$ss = '';
	foreach ($_POST['doc'] as $dc){
		if ($ss=='') {
			# code...
			$ss= $dc;
		} else {
			# code...
			$ss = $ss.', '.$dc;
		}
  		
	} 

	date_default_timezone_set('America/Managua');
	$fecha = $hoy = date("Y-m-d H:i:s");

	$database = new Database();

	$database->query('INSERT INTO datos (idpm,  apellido1, apellido2, nombre1,nombre2,cedula,edad,correo,celular,sexo,departamento,estudia,lugar_estudio,carrera,turno,tipo,documentos,fechainscrip) VALUES (:idpm,  :apellido1, :apellido2, :nombre1,:nombre2,:cedula,:edad,:correo,:celular,:sexo,:departamento,:estudia,:lugar_estudio,:carrera,:turno,:tipo,:documentos,:fechainscrip)');

	
	$database->bind(':idpm', 0);
	$database->bind(':apellido1', $apellido1);
	$database->bind(':apellido2', $apellido2);
	$database->bind(':nombre1', $nombre1);
	$database->bind(':nombre2', $nombre2);
	$database->bind(':cedula', $cedula);
	$database->bind(':edad', $edad);
	$database->bind(':correo', $tel);
	$database->bind(':celular', $cel);
	$database->bind(':sexo', $sexo);
	$database->bind(':departamento', $depar);
	$database->bind(':estudia', $study);
	$database->bind(':lugar_estudio', $lugar);
	$database->bind(':carrera', $carrera);
	$database->bind(':turno', $turno);
	$database->bind(':tipo', $tpm);
	$database->bind(':documentos', $ss);
	$database->bind(':fechainscrip', $fecha);

	$database->execute();
	$id = $database->lastInsertId();
	header("location:../comprobante.php?id=".$id);
	
	?>