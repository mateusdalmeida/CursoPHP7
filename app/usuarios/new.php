<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>

 <?php 
 	if (isset($_POST['enviado'])) {
 		
 		$sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES('{$_POST['nome']}', '{$_POST['email']}', '{$_POST['senha']}', '{$_POST['tipo']}' )";
 		mysqli_query($connect, $sql) or die (mysqli_error($connect));
 		echo "Usuario salvo com sucesso";
 		echo "<a href='index.php'><< Voltar</a>";
 	}else{
 		echo "Post vazio";
 	}
  ?>

 <form method="post" action="new.php">
 	<label>Nome:</label><br/>
 	<input name="nome" type="text" /><br/>
 	<label>Email:</label><br />
 	<input type="text" name="email"  /><br />
 	<label>Senha:</label><br />
 	<input type="password" name="senha" />
 	<label>Tipo:</label><br />
 	<select name="tipo">
 		<option>--</option>
 		<option value="0">Editor</option>
 		<option value="1">Administrador</option>
 	</select>

 	<input type="submit" name="enviado" value="Salvar" />

 </form>
<br />
 <a href="index.php"><< Voltar</a>