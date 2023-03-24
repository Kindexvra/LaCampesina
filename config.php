<?php

//conección con la base de datos
	
	//Servidor
	$server = "localhost";
	//Base de Datos
	$database = "laCampesina";
	//usuarioDB
	$user = "lacampedb";
	//claveDB
	$password ="tGde=fIWQsVI";

 	$conexion = mysqli_connect($server, $user, $password) or die ("No se ha podido conectar al servidor de Base de datos");;
  
  	mysqli_select_db($conexion, $database) or die ( "Upps! no se ha podido conectar a base de datos" );


?>