<?php
	include("layout/header.php");
	include("../../config.php");



	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	
	$sql = "DELETE FROM posts where id=$id";
	mysqli_query($connect, $sql);

	if (mysqli_affected_rows($connect)) {
		echo "Registro Removido";
	}else{
		"Houve um erro";
	}
	echo "<a href='index.php'><< Voltar</a>";

	}
?>