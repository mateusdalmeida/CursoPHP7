<?php 

$connect = mysqli_connect("localhost", "root", "");

if (!$connect) {
	die("Falha na Conexão");
}

mysqli_select_db($connect, "meublog");

 ?>