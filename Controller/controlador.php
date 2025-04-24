<?php

	//requiere_once "../Model/modelo.php";
	require('../Model/modelo.php');
	
	class vistasControlador extends vistasModelo{
		public function obtener_plantilla_controlador(){
			return require_once "./View/plantilla.php";
		}
		
		public function obtener_vistas_controlador(){
			if(isset($_GET['view'])){
				$ruta=explode("", $_GET['view']);
				$respuesta=visitasModelo::obtener_vistas_Modelo($ruta[0]);
			}else{
				$respuesta="login";
			}
			return $respuesta;
		}
	}


?>