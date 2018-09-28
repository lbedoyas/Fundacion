<?php	
	require('../Conexion/Conexion.php');

	$conn = mysqli_connect($host, $usuario, $clave);

    if(mysqli_connect_errno())
	{
		echo "La conexion no esta establecida<br>";
	}
	mysqli_select_db($conn, $db) or die ("<br><br>No se encuentra la base de datos");

?>