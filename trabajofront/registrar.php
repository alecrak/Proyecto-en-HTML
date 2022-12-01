<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['carrera']) >= 1  && strlen($_POST['semestre']) >=1) {
	    $name = trim($_POST['name']);
		$carrera = trim($_POST['carrera']);
		$semestre = trim($_POST['semestre']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, carrera, semestre, email, fecha_reg) VALUES ('$name','$carrera','$semestre','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los Capos Requeridos!</h3>
           <?php
    }
}

?>