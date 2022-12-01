<?php 
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
        $carrera = $row['carrera'];
        $semestre = $row['semestre'];
	    $email = $row['email'];
	    $fechareg = $row['fecha_reg'];
	    ?>
		<br>
		<br>
        <div class="mostrar">
		    <p>
			    <li><b>ID: </b> <?php echo $id ?><br></li>
                <li><b>Nombre Completo: </b> <?php echo $nombre ?><br></li>
                <li><b>Carrera: </b> <?php echo $carrera ?><br></li>
                <li><b>Semestre: </b> <?php echo $semestre ?><br></li>
                <li><b>Email: </b> <?php echo $email ?><br></li>
        		<li><b>Fecha Registro: </b> <?php echo $fechareg ?><br></li>
		    </p>
        </div> 
	    <?php
	    }
	}
}
?>