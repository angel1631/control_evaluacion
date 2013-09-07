<?php
	session_start();
	require_once("../granlibreria.php");
	require_once("funciones.php");
	if($_POST['valores']){
		
		$usuario=$_SESSION['id_usuario'];
		$ahora=date("Y-m-d H:i:s");
		$tabla=comprovar_texto($_POST['tabla']);
		$valores=comprovar_texto($_POST['valores']);
		$valores=$valores.", '$usuario', '$ahora', '', '1'";
		$db=conecbase();
		if($_POST['duplicidad']!=""){
			$duplicidad=stripslashes($_POST['duplicidad']);
			$duplicidad=comprovar_texto($duplicidad);
			$valores=stripslashes($valores);
			//$query_sql=stripslashes("UPDATE ".$tabla." SET ".$valores." WHERE ".$condiciones);
			$con_duplicado=$db->query("SELECT id_usuario FROM $tabla WHERE $duplicidad");
			if($con_duplicado->num_rows>0){
				echo "<input type=hidden value=2 id=respuesta />";
				exit;
			}
		}
		$insertar_valores=$db->query("INSERT INTO $tabla values($valores)");
		if($db->affected_rows>0){
			echo "<input type=hidden value=1 id=respuesta />";
		}else{
			echo "<input type=hidden value=0 id=respuesta />";
		}
		
	}
	
?>