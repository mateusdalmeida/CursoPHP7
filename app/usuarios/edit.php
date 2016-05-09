<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>

 <?php 

	 if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
 	if (isset($_POST['enviado'])) {
 		
 		$sqlUpdate = "UPDATE usuarios SET nome = '{$_POST['nome']}', 
 		email = '{$_POST['email']}', tipo = '{$_POST['tipo']}' 
 		WHERE id = $id";

 		mysqli_query($connect, $sqlUpdate) or die(mysqli_error($connect));
 		echo "Usuario editado com sucesso";
 		echo "<a href='index.php'><< Voltar</a>";
 	}
 	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$usuario = mysqli_fetch_assoc(mysqli_query($connect, $sql));
  ?>

 <form method="post" action="">
 	<label>Nome:</label><br/>

 	<input name="nome" type="text"
 	value="<?php echo $usuario['nome']; ?>" /><br/>
 	
 	<label>Email:</label><br />
 	<input name="email" type="text"
 	value="<?php echo $usuario['email']; ?>" /><br/>

 	<label>Tipo:</label><br />
 	<select name="tipo">
 		<option>--</option>
 		<option value="0">Editor</option>
 		<option value="1">Administrador</option>
 	</select>

 	<input type="submit" name="enviado" value="Salvar" />

 </form>


