<?php

//captura de variaveis

use function PHPSTORM_META\map;

$codigoEscondido = $_POST['hddCodigo'];
$codigo = $_POST['txtCodigo'];
$nome = 'Nome nao informado';
if (!empty($_POST['txtNome'])) {
	$nome = trim($_POST['txtNome']);  //trim para cortar os espaços vazios nas laterais
}

$senha = 'Senha nao informada';
if (isset($_POST[$senha])) {  //verifica se variavel existe na url
	$senha = $_POST['txtSenha'];
}

$email = trim($_POST['txtEmail']);

$dataNascimento = 'Data de nascimento nao informada ou invalida';
if (!empty($_POST['txtDataNasc'])) {  //verifica se variavel existe na url
	$dataNascimento = date('d/m/Y', strtotime($_POST['txtDataNasc']));
}

$arquivo = $_FILES['txtArquivo'];

$renda = 'Renda nao informada';
if (!empty($_POST['rdbRenda'])) {  //verifica se variavel existe na url
	$renda = $_POST['rdbRenda'];
}

$musica = [];
if (isset($_POST['chkLofi'])) {
	array_push($musica, 'Lofi');
} elseif (isset($_POST['chkRock'])) {
	$musica = 'Rock';
} elseif (isset($_POST['chkSamba'])) {
	$musica = 'Samba';
} elseif (isset($_POST['chkPagode'])) {
	$musica = 'Pagode';
}



//exibicao de variaveis
echo 'Codigo escondido: ' . $codigoEscondido . '<br>';
echo 'Codigo: ' . $codigo . '<br>';
echo 'Nome: ' . $nome . '<br>';
echo 'Senha: ' . $senha . '<br>';
echo 'Email: ' . $email . '<br>';
echo 'Data de nascimento: ' . $dataNascimento . '<br>';
// print_r($arquivo);  //print de um array
echo 'Nome do arquivo: ' . $arquivo['name'] . ' - ' . ' Tamanho: ' . $arquivo['size'] . 'kb' . '<br>';

if ($renda == 1) {
	echo 'Renda: Não paga o alugel no fim do mes <br>';
} elseif ($renda == 2) {
	echo 'Renda: Já da para pagar o alugel no fim do mes <br>';
} else {
	echo 'Renda: Ala o cara trabalha de graça kkkkkkkkkkkkkkkkkkkkkkkkkkkkkk <br>';
}

echo 'Estilo Musical: ';
for ($i = 0; $i < count($musica); $i++) {
	echo $musica[$i];
}
