<?php session_start(); ?>
<?php include("database/conexao.php"); ?>

<?php 
//Verificação de segurança
if (!isset($_SESSION['logado'])):
	$_SESSION['logado'] = 0;
	header('Location: login.php');
else:
	$_SESSION['logado'] ++ ;
endif;

//Conferindo os dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);

//Fechando a conexão
mysqli_close($conexao);
?>


<?php include("header2.php");?>

	<!--Incluindo o Formulário-->
	<div class="row container">
		<p>&nbsp;</p>
		<h4 class="center-align">Bem vindo (a) <strong> <?php echo $dados['nome']; ?></strong>!</h4>
		<!--<p>&nbsp;</p>-->
		<form action="database/create.php" method="post" class="col s12">
			<fieldset class="form">
				<legend><img src="img/user.png" alt="[imagem]" width="100"></legend>
				<h5 class="center-align flow-text">Cadastro de Salas</h5>


				<?php 
				//Exibindo uma mensagem de confirmação na tela
					if(isset($_SESSION['msg'])):
						echo $_SESSION['msg'];
						session_unset();
					endif;
				 ?>

				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="sala" id="sala" maxlength="40" required="" autofocus="">
					<label for="sala">Sala</label>
				</div>

				<div class="input-field col s4">
					<i class="material-icons prefix">access_time</i>
					<input type="time" name="hora_inicio" id="hora_inicio">
					<input type="time" name="hora_fim" id="hora_fim">
					<label for="hora_inicio">Horário</label>
				</div>

				<div class="input-field col s8">
					<i class="material-icons prefix">location_city</i>
					<input type="text" name="andar">
					<label for="andar">Andar</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">school</i>
					<input type="text" name="curso" id="curso" maxlength="50" required="">
					<label for="curso">Curso</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">face</i>
					<input type="text" name="professor" id="professor" maxlength="50" required="">
					<label for="professor">Professor</label>
				</div>

				<div class="input-field col s12">
					<input type="submit" name="" value="cadastrar" class="btn indigo darken-4">
					<input type="reset" name="" value="limpar" class="btn orange">
				</div>

			</fieldset>
		</form>
	</div>

<?php include("footer.php");?>