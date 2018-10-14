<?php include("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

//Ordenando os cursos pelahora de início e nome do curso
$sql = "select * from cadastro_sala where curso like '%$filtro%' order by hora_inicio, sala, andar, curso";
$consulta = mysqli_query($conexao, $sql);

if ($consulta == FALSE){
	die (mysqli_error($conexao));
}

while ($exibirRegistros = mysqli_fetch_array($consulta)){
	$id = $exibirRegistros['id'];
	$sala = $exibirRegistros['sala'];
	$hora_inicio = $exibirRegistros['hora_inicio'];
	$hora_fim = $exibirRegistros['hora_fim'];
	$andar = $exibirRegistros['andar'];
	$curso = $exibirRegistros['curso']; 
	$professor = $exibirRegistros['professor'];

	print "<tr>";
	print "<td>$sala</td><td>$hora_inicio</td><td>$hora_fim</td><td>$andar</td><td>$curso</td><td>$professor</td>";
	print "</tr>";
}
	mysqli_close($conexao);
?>