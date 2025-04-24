<?php

 class vistasModelo{
	 
	 protected static function obtener_vistas_modelo($visitas){
		 $listaBlanca=[];
		 		
		if(in_array($vistas, $listaBlanca)){
			if(is_file(" ./View/contenidos/".$vistas."-view.php") ) {
				$contenido = "./View/contenidos/".$vistas."-view.php";
				$contenido = "404";
				}elseif($vistas=="login" || $vistas=="index"){
					$contenido="login";
				}else{
					$contenido="404";
				}
		return $contenido;
		}
	}
 }
?>