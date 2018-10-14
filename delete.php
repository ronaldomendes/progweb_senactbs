<?php 
include("database/conexao.php");
session_start();

//Verificação de segurança
if (!isset($_SESSION['logado'])):
	header('Location: login.php');
endif;

include("header2.php");
?>


<div class="row container">
	<div class="col s12">
			<!--<h5 class="light center">Consulta de Salas</h5><hr>-->
		<?php 
		//Exibindo uma mensagem de confirmação na tela
		if(isset($_SESSION['msg'])):
			echo $_SESSION['msg'];
			session_unset();
		endif;
		?>
		<p class="center-align flow-text"><strong>Dados excluídos com sucesso!</strong></p>
			<p><a href="javascript:history.go(-1)" class="btn orange" style="margin: 0px 420px">Voltar</a></p>
	</div>
</div>

<?php
	//Inserindo o comando para deletar uma linha do banco de dados
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
	$query = "delete from cadastro_sala where id = $id";
	return mysqli_query($conexao, $query);

	$link = $conexao;

	$linha_afetada = mysqli_affected_rows($link);

	if($linha_afetada > 0):
		$_SESSION['msg'] = "<p style='font-weight: bold; text-align: center; background-color:#00796b; border-radius: 25px; padding: 7px 0; color: #FFFFFF; font-size: 1.5em;'>'$curso' excluído com sucesso! </p>";
		header("Location: consultas.php");
		die();
	endif;

	/*if(mysqli_affected_rows($link > 0)):
		 $_SESSION['msg'] = "<p style='font-weight: bold; text-align: center; background-color:#00796b; border-radius: 25px; padding: 7px 0; color: #FFFFFF; font-size: 1.5em;'>Dados excluídos com sucesso! </p>";
		header("Location: consultas.php");
		die();
	endif;*/
?>

<?php include("footer.php");?>