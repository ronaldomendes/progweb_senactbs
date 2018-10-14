<?php session_start();?>
<?php include("header1.php");?>


	<div class="row container">
		<div class="col s12">
			<h5 class="center-align flow-text">Consulta de Salas</h5><hr>

			<div class="input-field col s12">
				<form method="get" action="">
				<i class="tiny material-icons">school</i>
				<label for="sala">Filtrar por Curso <b class="right">Ex:&nbsp;&nbsp;&nbsp; Informática = "inf"; &nbsp;&nbsp;&nbsp; Enfermagem = "enf"; &nbsp;&nbsp;&nbsp; Administração = "adm"</b></label>
				<input type="text" name="filtro" class="campo" required autofocus>
				<input type="submit" name="button" value="pesquisar" class="btn indigo darken-4">
				</form>
			</div>

			<table class="highlight">
				<thead>
					<tr class="">
						<th>Sala</th>
						<th>Hora Início</th>
						<th>Hora Fim</th>
						<th>Andar</th>
						<th>Curso</th>
						<th>Professor</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					include_once "database/read2.php";
					 ?>
				</tbody>
			</table>
		</div>
	</div>

	<script type="text/javascript"></script>

<?php include("footer.php");?>