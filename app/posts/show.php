<?php 
	include("layout/header.php");
	include("../../config.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT *FROM posts WHERE id = $id";
	$post = mysqli_fetch_assoc(mysqli_query($connect, $sql));
}

?>

<b>Titulo:</b><br>
<?php echo $post['titulo']; ?><br>
<b>Conteudo:</b><br>
<?php echo $post['conteudo']; ?><br>
<b>Data de Criação:</b><br>
<?php echo $post['criado_em']; ?><br>

<a href="index.php"><< Voltar</a> |  <a href="edit.php?id=<?php echo $id; ?>Editar"</a>

