<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>
 
<?php 

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	if (isset($_POST['enviado'])) {
		date_default_timezone_set('America/Belem');
		$data=date("Y-m-d H:i:m");

		$sqlUpdate = "UPDATE posts SET titulo = '{$_POST['titulo']}',
		conteudo = '{$_POST['conteudo']}', atualizado_em = '$data'
		WHERE id = $id";

		print_r($sqlUpdate);
		mysqli_query($connect, $sqlUpdate) or die (mysqli_error($connect));
		echo "post salvo com sucesso";
		echo "<a href='index.php'><< Voltar</a>";
	}
	$sql = "SELECT * FROM posts WHERE id = $id";
	$post = mysqli_fetch_assoc(mysqli_query($connect, $sql));
 ?>

 <form method="post" action"edit.php?id=<?php echo $id; ?>">
 	<label>Titulo:</label><br>

 	<input name = "titulo" type="text" 
 	value="<?php echo $post['titulo']; ?>"/><br>

 	<label>Conteudo:</label><br>
 	<textarea name="conteudo"><?php echo $post['conteudo']; ?></textarea><br>
 	<input type="hidden" name="usuario_id" value="1">
 	<input type="hidden" name="enviado" value="1">
 	<input type="submit" value="Salvar">

 </form>