<?php 
include("../config.php");
session_start();
if (isset($_POST['email'])) {
		$email = addslashes(trim($_post['email']));
	}else{
		FALSE;
}
if (isset($_POST['senha'])) {
		$senha = md5(trim($_post['email']));;
	}else{
		FALSE;
}
if (!$email || !$senha) {
	echo "Digite o email e a senha";
}
$sql = "SELECT * FROM usuarios WHERE email = $email";
$resultado = mysqli_query($connect, $sql) or die ("Erro");
%total = mysqli_num_rows($connect, )
 ?>