<?php 
	include 'conexionbd.php';
	$sql= "SELECT `NombreUsuario`,`Nombres`,`Apellidos`,`Cedula`,`Direccion`,`CodigoCarnet` from usuario;";
	if ($c=$conn->query($sql)) {
		while ($data=mysqli_fetch_array($c,MYSQLI_ASSOC)) {
			echo "<tr>
				<td>$data[NombreUsuario]</td>

				<td>$data[Nombres]</td>

				<td>$data[Apellidos]</td>

				<td>$data[Cedula]</td>

				<td>$data[Direccion]</td>

				<td>$data[CodigoCarnet]</td>
			</tr>";
		}
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
 ?>