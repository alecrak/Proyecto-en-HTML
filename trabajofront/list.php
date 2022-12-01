<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LISTA DE REGISTRADOS</title>
    <link rel="icon" href="logo.ico">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
    <h1> LISTA DE ESTUDIANTES REGISTRADOS </h1>
    <div class="ref2">
	  <li>
		  <a href="index.php"> Menu Principal </a>
      </li>
	</div>
    <br>
    <div class="list">
        <?php 
        include("mostrar.php");
        ?>
    </div>
    
</body>
</html>