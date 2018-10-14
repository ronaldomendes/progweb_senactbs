<?php

session_start();

//Verificação de segurança
if (!isset($_SESSION['logado'])):
	header('Location: login.php');
endif;

?>
<?php include("header2.php");?>

	<div class="row container">
		<div class="col s12">
			<h5 class="light center">Editar Informações</h5><hr>
		</div>
	</div>

	<?php 
		include ("database/conexao.php");

		//Recebendo uma informação para ser editada
		$link = new mysqli("localhost", "root","", "cadastro");
		$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
		$_SESSION['id'] = $id;
		$conexao = $link->query("SELECT * FROM cadastro_sala WHERE id = '$id'");
		while ($registros = $conexao->fetch_assoc()):
			$sala = $registros['sala'];
			$hora_inicio = $registros['hora_inicio'];
			$hora_fim = $registros['hora_fim'];
			$andar = $registros['andar'];
			$curso = $registros['curso']; 
			$professor = $registros['professor'];
		endwhile;
	 ?>

	 	<!--Incluindo o Formulário-->
	<div class="row container">
		<p>&nbsp;</p>
		<form action="update.php" method="post" class="col s12">
			<fieldset class="form">
				<legend><img src="img/user.png" alt="[imagem]" width="100"></legend>
				<h5 class="light center">Alteração de Dados</h5>

				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="sala" id="sala" maxlength="40" value="<?php echo $sala ?>" required="" autofocus="">
					<label for="sala">Sala</label>
				</div>

				<div class="input-field col s4">
					<i class="material-icons prefix">access_time</i>

					<input type="time" name="hora_inicio" id="hora_inicio" value="<?php echo $hora_inicio ?>">
					<input type="time" name="hora_fim" id="hora_fim" value="<?php echo $hora_fim ?>">
					<label for="hora_inicio">Horário</label>
				</div>

				<div class="input-field col s8">
					<i class="material-icons prefix">location_city</i>
					<input type="text" name="andar" value="<?php echo $andar ?>">
					<label for="andar">Andar</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">school</i>
					<input type="text" name="curso" id="curso" maxlength="70" value="<?php echo $curso ?>" required="">
					<label for="curso">Curso</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">face</i>
					<input type="text" name="professor" id="professor" maxlength="70" value="<?php echo $professor ?>" required="">
					<label for="professor">Professor</label>
				</div>

				<div class="input-field col s12">
					<input type="submit" name="" value="alterar" class="btn indigo darken-4">
					<a href="consultas.php" class="btn orange">cancelar</a>
				</div>

			</fieldset>
		</form>
	</div>

<?php include("footer.php");?>