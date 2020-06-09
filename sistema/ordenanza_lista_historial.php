<?php 
	
	include '../conexion/modelo.php';
	$modelo = new Curl();
	$link = "http://limpieza.azurewebsites.net/ws/api/laboratorio/mostrar.php";

	//ejecutamos la API de conexión y enviamos los parámetros
	$data_lab = $modelo -> sentenciaSelect($link);
	//print_r($data_lab);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include 'includes/scripts.php' ?>
	<title>Historial</title>
</head>
<body>
	<?php include 'includes/header.php';?>

	<section id="container">
		<center><h1>Lista Historial</h1>

		

		<table>
			<tr>
				<th>ID</th>
				<th>Lunes</th>
				<th>Martes</th>
				<th>Miercoles</th>	
				<th>Jueves</th>
				<th>Viernes</th>
				<th>Sabado</th>
				<th>Domingo</th>
				<th>Fecha Inicio</th>
				<th>Fecha Final</th>
				<th>Hora inicio</th>
				<th>Hora final</th>
			</tr>
			<tr>

			<?php 

			$link = "http://limpieza.azurewebsites.net/ws/api/vistaHorario/mostrarOrdenanza.php?idOrdenanza=".$_SESSION['idUser'];

			//ejecutamos la API de conexión y enviamos los parámetros
			$data = $modelo -> sentenciaSelect($link);

			foreach ($data as $key) {

				echo '<td>'.$key['idHorario'].'</td>';
				echo '<td>'.$key['lunes'].'</td>';
				echo '<td>'.$key['martes'].'</td>';
				echo '<td>'.$key['miercoles'].'</td>';
				echo '<td>'.$key['jueves'].'</td>';
				echo '<td>'.$key['viernes'].'</td>';
				echo '<td>'.$key['sabado'].'</td>';
				echo '<td>'.$key['domingo'].'</td>';	
				echo '<td>'.$key['fIni'].'</td>';
				echo '<td>'.$key['fFin'].'</td>';
				echo '<td>'.$key['hIni'].'</td>';
				echo '<td>'.$key['hFin'].'</td>';
				echo '<td>';

				//echo '<td>'.$key['fCrea'].'</td>';
			?>
				</td>
			</tr>

			<?php } ?>		
				
		</table>
	</section>

	<?php include 'includes/footer.php' ?>
</body>
</html>