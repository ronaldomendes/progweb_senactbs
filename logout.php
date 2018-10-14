<?php 

//Comandos para encerrar a conexão
session_start();
session_unset();
session_destroy();
header('Location: index.php');

