<?php
	$conexao = mysqli_connect("localhost", "root","", "cadastro");

	//Ajustando o charset de comunicação entre a aplicação e o banco de dados
	//mysqli_set_charset($conexao, "utf8"); --  Mudar o charset para ANSI

	/*
	Dúvida sobre o charset obtida no link abaixo:
	https://pt.stackoverflow.com/questions/43193/d%C3%BAvida-com-charset-iso-8859-1-e-utf8
	*/

    if (mysqli_connect_error()) :
    	echo "Falha na conexão com o banco de dados: ".mysqli_connect_error();
    	exit;
    endif;

    if (!mysqli_set_charset($conexao, 'utf8')) :
    	printf("Erro ao usar utf8: %s,", mysqli_error($conexao));
    	exit;
    endif;
