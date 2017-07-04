<?php
		include  'conexionbd.php';

		$NombreUsuario= $_POST["NombreUsuario"];
		$passwordusu= $_POST["Password"];
		$Nombres= $_POST["Nombres"];
		$Apellidos= $_POST["Apellidos"];
		$cedula= $_POST["Cedula"];
		$IdDepartamento= $_POST["IdDepartamento"];
		$IdRol= $_POST["IdRol"];
		$Direccion= $_POST["Direccion"];
		$Correo= $_POST["Correo"];
		$CodigoCarnet= $_POST["CodigoCarnet"];

		$sql = "INSERT INTO usuario (NombreUsuario,Password,Nombres,Apellidos,IdDepartamento,IdRol,Direccion,Correo,CodigoCarnet)
		VALUES ('$NombreUsuario', '$passwordusu', '$Nombres', '$Apellidos', '$IdDepartamento', '$IdRol', '$Direccion', '$Correo', '$CodigoCarnet')";

		if ($conn->query($sql) === TRUE) {
			header('Location: http://localhost/Reg-Con_Php/index.php?var=lis');
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
?>