<?php

session_start();
// REATRIBUINDO VALOR COM # PARA -
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

// ABRINDO UM ARQUIVO.TXT
$arquivo = fopen('../../app_help-desk/dados.hd', 'a');


// RECUPERANDO OS DADOS DO ARRAY POST
$texto = $_SESSION['id'] . '#' . $titulo . '#' .  $categoria . '#' . $descricao . PHP_EOL;

// ADD VALORES NO ARQUIVO
fwrite($arquivo, $texto);

// FECHAR ARQUIVO
fclose($arquivo);

header('Location: abrir_chamado.php');
