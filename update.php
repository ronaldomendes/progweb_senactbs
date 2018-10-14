<?php 

session_start();

//Verificação de segurança
if (!isset($_SESSION['logado'])):
	header('Location: login.php');
endif;

?>
<?php include("database/conexao.php");?>

<?php

	//Inserindo a informação editada no banco de dados 
	$id = $_SESSION['id'];

	$sala = filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_SPECIAL_CHARS);
	$hora_inicio = filter_input(INPUT_POST, 'hora_inicio', FILTER_SANITIZE_SPECIAL_CHARS);
	$hora_fim = filter_input(INPUT_POST, 'hora_fim', FILTER_SANITIZE_SPECIAL_CHARS);
	$andar = filter_input(INPUT_POST, 'andar', FILTER_SANITIZE_SPECIAL_CHARS);
	$curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_SPECIAL_CHARS);
	$professor = filter_input(INPUT_POST, 'professor', FILTER_SANITIZE_SPECIAL_CHARS);

    //$link = new mysqli("localhost", "root","", "cadastro");
    $link = $conexao;

	$queryUpdate = $link->query("update cadastro_sala set sala='$sala', hora_inicio='$hora_inicio', hora_fim='$hora_fim', andar='$andar', curso='$curso', professor='$professor' WHERE id = '$id' ");
	$linha_afetada = mysqli_affected_rows($link);

	if($linha_afetada > 0):
		header("Location: consultas.php");
		die();
	endif;
 ?>