<?
		function comprovar_texto($cadena){
			$cadena=str_replace("á", "&aacute;", $cadena);
			$cadena=str_replace("é", "&eacute;", $cadena);
			$cadena=str_replace("í", "&iacute;", $cadena);
			$cadena=str_replace("ó", "&oacute;", $cadena);
			$cadena=str_replace("ú", "&uacute;", $cadena);
			$cadena=str_replace("Á", "&Aacute;", $cadena);
			$cadena=str_replace("É", "&Eacute;", $cadena);
			$cadena=str_replace("Í", "&Iacute;", $cadena);
			$cadena=str_replace("Ó", "&Oacute;", $cadena);
			$cadena=str_replace("Ú", "&Uacute;", $cadena);
			$cadena=str_replace("ñ", "&ntilde;", $cadena);
			$cadena=str_replace("Ñ", "&Ntilde;", $cadena);
			$cadena=str_replace("?", "&#63;", $cadena);
			$cadena=str_replace("¿", "&iquest;", $cadena);
			return $cadena;
		}

?>