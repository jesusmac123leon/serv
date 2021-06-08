	<?php

	 $host_db = "us-cdbr-iron-east-05.cleardb.net";

	 $user_db = "b83c2d293c6136";

	 $pass_db = "22fe08c4";
	 $db_name = "heroku_eaf83c356a363bf";

	 $tbl_name = "Usuarios";
	  
	 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
	 

	 if ($conexion->connect_error) {

	 die("La conexion falló: " . $conexion->connect_error);
	}

	 

	 $buscarUsuario = "SELECT * FROM $tbl_name
	 WHERE nombre_usuario = '$_POST[username]' ";

	 
	 $result = $conexion->query($buscarUsuario);

	 
	 $count = mysqli_num_rows($result);

	 
	 if ($count == 1) {
	 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

	 

	 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";

	 }
	 else{

	 
	  $_POST['password'];

	  
	 
	 

	 $query = "INSERT INTO Usuarios (nombre_usuario, password)

	           VALUES ('$_POST[username]', '$_POST[password]')";

	 

	 if ($conexion->query($query) === TRUE) {

	  

	 echo "<br />" . "<h2>" . "error correo o contraseña" . "</h2>";

	 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";

	 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>";
	 }

	 

	 else {
	 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
	   }
	 }

	 mysqli_close($conexion);

	?>