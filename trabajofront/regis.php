<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<title>REGISTROS</title>
	<link rel="icon" href="logo.ico">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<br>
	<br>
    <div class="titul">
		<h1> ESCUELA MILITAR DE INGENIERIA</h1>
	</div>
	<br>
	<div class="ref">
	  <li>
		  <a href="index.php"> Menu Principal </a>
      </li>
	</div>
	<br>
    <div class="form">
	  <form method="post">
    	   <h1>REGISTRO DE ESTUDIANTES</h1>
    	   <input type="text" name="name" placeholder="Nombre completo">
    	   <input type="text" name="carrera" placeholder="Carrera">
		   <input type="text" name="semestre" placeholder="Semestre">
		   <input type="email" name="email" placeholder="Email">		
    	   <input type="submit" name="register" value="REGISTRAR">
        </form>
    </div>
	<?php 
        include("registrar.php");
    ?>
	
</body>
</html>