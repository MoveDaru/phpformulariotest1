<div class="container">
	<h4>Ingrese datos del trabajador:</h4>
	<form action="registrotrabajador.php" method="POST" class="form-default">
		<div class="form-group">
		    <label for="username">Nombre de Usuario:</label>
		    <input type="text" class="form-control" id="username" name="NombreUsuario">
	  	</div>
	  	<div class="form-group">
		    <label for="password">Contraseña:</label>
		    <input type="password" class="form-control" id="password" name="Password">
	  	</div>
	  	<div class="form-group">
		    <label for="Nombres">Nombres:</label>
		    <input type="text" class="form-control" id="Nombres" name="Nombres">
	  	</div>
		<div class="form-group">
		    <label for="Apellidos">Apellidos:</label>
		    <input type="text" class="form-control" id="Apellidos" name="Apellidos">
	  	</div>
		<div class="form-group">
		    <label for="cedula">Cedula:</label>
		    <input type="text" class="form-control" id="cedula" name="cedula">
	  	</div>
	  	<div class="form-group">
	  		<label for="departament">Departamento:</label>	  		
		  	<select name="IdDepartamento" id="departament" class="form-control">
				<option value="1">Departamento de trabajo especial de grado</option>
		  	</select>
	  	</div>
	  	<div class="form-group">
		    <label for="Rol">Roles:</label>
		    <select name="IdRol" id="Rol" class="form-control">
				<option value="1">Administrador</option>
				<option value="2">Trabajador</option>
		  	</select>
	  	</div>
	  	<div class="form-group">
		    <label for="Direccion">Direccion:</label>
		    <input type="text" class="form-control" id="Direccion" name="Direccion">
	  	</div>

	  	<div class="form-group">
		    <label for="corr">Correo:</label>
		    <input type="email" class="form-control" id="corr" name="Correo">
	  	</div>

	  	<div class="form-group">
		    <label for="code">Codigo carnet:</label>
		    <input type="text" class="form-control" id="code" name="CodigoCarnet">
	  	</div>
	  	<input type="submit" class="btn btn-default" value="Registrar usuario">
  	</form>
</div>
