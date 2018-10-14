<?php
//Realizando a coxexão com o banco de dados
require_once 'database/conexao.php';

//Inicializando uma sessão
session_start();

//Ação para o botão enviar
if (isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string($conexao, $_POST['login']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);

	//Verificando se os campos login e senha estão vazios
	if(empty($login) or empty($senha)):
		$erros[] = "<p class='center-align flow-text'><strong> O campo login/senha precisa ser preenchido!</strong></p>";
	else:
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$resultado = mysqli_query($conexao, $sql);
		
		//Fazendo testes para ver se o usuário está cadastrado ou não
		if (mysqli_num_rows($resultado) > 0):
			$senha = md5($senha);
			$sql = "SELECT login FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($conexao, $sql);

				if (mysqli_num_rows($resultado) == 1):
					$dados = mysqli_fetch_array($resultado);
					//Fechando a conexão
					//mysqli_close($conexao);
					
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					header('Location: cadastro.php');
				else:
					//Mensagem de erro, caso o usuário ou senha estejam incorretos
					$erros[] = "<p class='center-align flow-text'><strong>Usuário e/ou senha incorretos!</strong></p>";
				endif;			
			else:
				//Mensagem de erro, caso o usuário não exista
				$erros[] = "<p class='center-align flow-text'><strong> Usuário inexistente!</strong></p>";
		endif;
	endif;
endif;
 ?>

<?php include("header1.php");?>

	<div class="row container">
		<p>&nbsp;</p>
		<?php 
		if (!empty($erros)):
			foreach ($erros as $erro):
				echo $erro;
			endforeach;
		endif;
		 ?>

		<form class="col s12" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="input-field inline">
				<i class="material-icons prefix">person</i>
				<input type="text" name="login" id="login">
				<label for="login">Login:</label><br>
			</div>
			<div class="input-field inline">
				<i class="material-icons prefix">lock</i>
				<input type="password" name="senha" id="senha">
				<label for="senha">Senha:</label><br>
			</div>
			<div class="input-field inline">
				<button type="submit" name="btn-entrar" class="btn indigo darken-4">Entrar</button>
				<button type="reset" name="btn-limpar" class="btn orange">Limpar</button>
			</div>			
		</form>
	</div>

<?php include("footer.php");?>