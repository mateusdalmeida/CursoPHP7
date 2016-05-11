<?php 
include("../config.php");
session_start();
if (isset($_POST['email'])) {
		$email = addslashes(trim($_post['email']));
	}else{
		FALSE;
}
if (isset($_POST['senha'])) {
		$senha = md5(trim($_post['email']));
	}else{
		FALSE;
}
if (!$email || !$senha) {
	echo "Digite o email e a senha";
}
$sql = "SELECT * FROM usuarios WHERE email = $email";
$resultado = mysqli_query($connect, $sql) or die mysqli_error($connect);
$total = mysqli_num_rows($resultado);
if ($total) {
	$dados = mysqli_fetch_array($resultado);
	if (!strcmp($senha, $dados['senha'])) {
		$_SESSION["usuario_id"] = $dados["id"];
		$_SESSION["usuario_nome"] = $dados["nome"];
		$_SESSION["usuario_tipo"] = $dados["tipo"];
		header("Location: posts/index.php");
		exit;
	}else{
		echo "Senha Inválida";
		exit;
	}
}else{
	echo "Email inexistente";
	exit;
}

 ?>