<?php require_once("../granlibreria.php");
	encabezado("Inicio de control de evaluacion, parte administracion");
?>
	<link rel="stylesheet" type="text/css" href="css/tema.css">
	<script type="text/javascript" src="http://tecnodisa.com/librerias/funciones.js"></script>
	<div id="marco_control_evaluacion">
		<div id="encabezado_control_evaluacion">
			<label>Nombre Curso: </label><br>
				<input type="text" class=".vacio solo_letras input_largo" id="nombre" /><br>
			<label>Descripcion del curso: </label><br>
				<textarea></textarea><br>
			<label>Inicia: </label><br>
				<input type="text" class="fecha input_mediano" id="inicia" /><br>
			<label>Finaliza: </label><br>
				<input type="text" class="fecha input_mediano" id="finaliza" /><br>
			<button class="boton_guardar" id="guardar_curso">Guardar Curso</button>
		</div>
		<div id="data_control_evaluacion">
			<div class="marco_input">
				<label>Titulo: </label><input type="text" id="titulo_data"><label>Descripcion: </label><textarea></textarea><label>URL: </label><input type="text" id="url">
				<label>Tipo: </label>
					<select id="tipo_data">
						<option value="pdf">Documento PDF</option>
						<option value="doc">Documento Word</option>
						<option value="video">Video</option>
						<option value="ppt">Power Point</option>
						<option value="xls">Documento excel</option>
					</select>
				<button class="boton_agregar">Agregar</button>
			</div>
			<div id="recarga_data"></div>
		</div>
		<div id="preguntas_control_evaluacion">
			<div class="marco_input">
				<label>Pregunta: </label><input type="text" id="pregunta"><label>Respuesta: </label><input type="text" id="respuesta" /><label>Posible 1: </label><input type="text" id="p1">
				<label>Posible 2: </label><input type="text" id="p1">
				<button class="boton_agregar">Agregar</button>
			</div>
			<div id="recarga_data"></div>
		</div>
	</div>

