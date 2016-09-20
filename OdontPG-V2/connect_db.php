<?php

$host="localhost";
$user="root";
$password="";
$db="db_proyecto";
$mysqli = new MySQLi($host,$user,$password,$db);
		//$mysqli = new MySQLi("localhost", "root","", "db_proyecto");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}

?>