<?php
// conectarse a la base de datos 'clinica'
$host = "localhost";
$dbname = "clinica";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_error){
	die("Error en la conexión: " . $conn->connect_error);
}

// obtener los datos del formulario
$estudio_clinico = $_POST["estudio_clinico"];
$fecha_reserva = $_POST["fecha_reserva"];

// preparar la consulta SQL para obtener las fechas disponibles según el estudio clínico y la fecha de reserva
$sql = "SELECT fecha FROM fechas_disponibles WHERE estudio_clinico='$estudio_clinico' AND fecha='$fecha_reserva'";

// ejecutar la consulta SQL
$resultado = $conn->query($sql);

// mostrar las fechas disponibles
if ($resultado->num_rows > 0) {
	echo "Fechas disponibles para $estudio_clinico el $fecha_reserva: <br>";
	while($fila = $resultado->fetch_assoc()) {
		echo $fila["fecha"] . "<br>";
	}
} else {
	echo "No hay fechas disponibles para $estudio_clinico el $fecha_reserva";
}

// cerrar la conexión a la base de datos
$conn->close();
?>