<!DOCTYPE html>
<html>
<head>
	<title>Citas Médicas</title>
</head>
<body>
	<h1>Cita Médica</h1>
	<h2>Datos Personales</h2>
	<form action="guardar_datos_personales.php" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br>

		<label for="apellido">Apellido:</label>
		<input type="text" id="apellido" name="apellido" required><br>

		<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
		<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>

		<label for="celular">Celular:</label>
		<input type="tel" id="celular" name="celular" required><br>

		<input type="submit" value="Guardar">
	</form>

	<h2>Reserva</h2>
	<form action="consultar_fechas_disponibles.php" method="post">
		<label for="estudio_clinico">Estudio Clínico:</label>
		<select id="estudio_clinico" name="estudio_clinico">
			<option value="Psicofísico para Libreta de Conducir Amateur">Psicofísico para Libreta de Conducir Amateur</option>
			<option value="Evaluación Médica y Psicológica para Porte y Tenencia">Evaluación Médica y Psicológica para Porte y Tenencia</option>
			<option value="Psicotécnico para Libreta Profesional">Psicotécnico para Libreta Profesional</option>
			<option value="Carne de salud laboral">Carne de salud laboral</option>
		</select><br>

		<label for="fecha_reserva">Fecha de Reserva:</label>
		<input type="date" id="fecha_reserva" name="fecha_reserva" required><br>

		<input type="submit" value="Consultar">
	</form>
</body>
</html>