<?php session_start();?>
<?php include("conexao.php");

    //FILTER_SANITIZE_SPECIAL_CHARS é utilizado para remover caracteres especiais
	$sala = filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_SPECIAL_CHARS);
	$hora_inicio = filter_input(INPUT_POST, 'hora_inicio', FILTER_SANITIZE_SPECIAL_CHARS);
	$hora_fim = filter_input(INPUT_POST, 'hora_fim', FILTER_SANITIZE_SPECIAL_CHARS);
	$andar = filter_input(INPUT_POST, 'andar', FILTER_SANITIZE_SPECIAL_CHARS);
	$curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_SPECIAL_CHARS);
	$professor = filter_input(INPUT_POST, 'professor', FILTER_SANITIZE_SPECIAL_CHARS);


	$sql = "INSERT INTO cadastro_sala VALUES (default, '$sala', '$hora_inicio', '$hora_fim', '$andar', '$curso', '$professor')";

    $query = mysqli_query($conexao, $sql);

    if (mysqli_insert_id($conexao)) {
        $_SESSION['msg'] = /*"<p class='center-align flow-text card-panel teal darken-2 white-text'><strong>'$curso' cadastrado com sucesso!</strong></p>";*/ "<p style='font-weight: bold; text-align: center; background-color:#00796b; border-radius: 25px; padding: 7px 0; color: #FFFFFF; font-size: 1.5em;'>'$curso' cadastrado com sucesso! </p>";
        $_SESSION['logado'] = 1;
        header("Location: ../cadastro.php");
        die();
    }
?>