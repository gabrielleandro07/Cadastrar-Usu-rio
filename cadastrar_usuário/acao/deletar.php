<?php
	session_start();
	
	$id = $_POST['id'];

	$conn = mysqli_connect('localhost', 'root', '', 'usuario') or die ('Ocorreu um erro ao conectar com o banco de dados');
	$query = "DELETE FROM usuario WHERE id=$id;";


	$result = mysqli_query($conn, $query);

	if ($result)
	    $_SESSION['mensagem'] = '<div class="alert alert-primary" role="alert">Usuário deletado com sucesso</div>';
	else
	    $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Ocorreu um erro ao deletar o usuário</div>';

	header("Location: ../index.php ");
?>