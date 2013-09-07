<?php require_once("../granlibreria.php");
	encabezado("Inicio de control de evaluacion, parte administracion");
?>
	<style type="text/css">
		#marco_control_evaluacion{
			width:100%;
			height: 100%;
		}#encabezado_control_evaluacion{
			background: rgb(200,215,225);
			height: 225px;
			position: relative;
			width: 100%;
		}
		#encabezado_control_evaluacion label{
			width: 20%;
			display: inline-block;
			margin-left: 1%;
		}#encabezado_control_evaluacion input{
			margin-left: 2%;
			margin-bottom: 12px;
			height: 28px;
		}
		.input_largo{
			width: 50%;
		}.input_mediano{
			width: 25%;
		}.boton_guardar{
			margin-left: 35%;
			
		}
	</style>
	<script type="text/javascript" src="http://tecnodisa.com/librerias/funciones.js"></script>
	<div id="marco_control_evaluacion">
		<div id="encabezado_control_evaluacion">
			<label>Nombre Curso: </label><br>
				<input type="text" class=".vacio solo_letras input_largo" id="nombre" /><br>
			<label>Inicia: </label><br>
				<input type="text" class="fecha input_mediano" id="inicia" /><br>
			<label>Finaliza: </label><br>
				<input type="text" class="fecha input_mediano" id="finaliza" /><br>
			<button class="boton_guardar" id="guardar_curso">Guardar Curso</button>
		</div>
	</div>

