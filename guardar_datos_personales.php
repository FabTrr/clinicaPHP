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
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$celular = $_POST["celular"];

// preparar la consulta SQL para insertar los datos del formulario en la tabla 'pacientes'
$sql = "INSERT INTO pacientes (nombre, apellido, fecha_nacimiento, celular) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$celular')";

// ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Datos personales guardados correctamente";
} else {
    echo "Error al guardar los datos personales: " . $conn->error;
}

// cerrar la conexión a la base de datos
$conn->close();
?>