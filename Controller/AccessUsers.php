<?php

require('../Model/Conexion.php');
require('Constants.php');

If(!isset($_SESSION)){
	session_start();
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$con = new conexion();

$searchUser = $con->getUser($usuario,$password);

foreach($searchUser as $user){
	$tipo = $user['tipo'];
	$id_usuario = $user['id_usu'];
	$nombres = $user['nombre'];
	$password = $user['password'];
	$foto = $user['foto'];
}

if(empty($searchUser)){
	echo '
		<script language= javascript>
		aler("Usuario o Password incorrectos, por favir intenta de nuevo");
		self.location = "../index.php"
		</script>';
	
}Else if($tipo == 'VENTAS'){
	require('../views/WellcomeVentas.php');
}Else if($tipo == 'ADMINISTRADOR'){
	$urlViews = URL_VIEWS;
}