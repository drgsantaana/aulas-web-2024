<?php

//captura de variaveis
$codigoEscondido = $_POST['hddCodigo'];
$codigo = $_POST['txtCodigo'];
$nome = trim($_POST['txtNome']);  //trim para cortar os espaços vazios nas laterais
$senha = 'Senha nao informada';
if (isset($_POST[$senha])) {  //verifica se variavel existe na url
	$senha = $_POST['txtSenha'];
}
$email = trim($_POST['txtEmail']);

//exibicao de variaveis
echo 'Codigo escondido: ' . $codigoEscondido . '<br>';
echo 'Codigo: ' . $codigo . '<br>';

if (empty($name)) {  //verifica se esta vazio
	echo 'Nome nao informado <br>';
} else {
	echo 'Nome: ' . $nome . '<br>';
}

echo 'Senha: ' . $senha . '<br>';
echo 'Email: ' . $email . '<br>';
