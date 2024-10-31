<?php

//captura de variaveis
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
};
if (isset($_POST['chkRock'])) {
	array_push($musica, 'Rock');
};
if (isset($_POST['chkSamba'])) {
	array_push($musica, 'Samba');
};
if (isset($_POST['chkPagode'])) {
	array_push($musica, 'Pagode');
};

$mensagem = $_POST['txtMensagem'];

$meninas = 'Pouco';
if ($_POST['slcMeninas'] == 2) {
	$meninas = 'Maromeno';
};
if ($_POST['slcMeninas'] == 3) {
	$meninas = 'Muito';
};
if ($_POST['slcMeninas'] == 4) {
	$meninas = 'PRA KRL';
};

$faixaEtaria = 'Não gostaria de informar';
if ($_POST['slcFaixaEtaria'] == 1) {
	$faixaEtaria = 'Menos que 18 anos';
};
if ($_POST['slcFaixaEtaria'] == 2) {
	$faixaEtaria = 'Entre 18 anos e 50 anos';
};
if ($_POST['slcFaixaEtaria'] == 3) {
	$faixaEtaria = 'Passei da data de validade';
};

$indicesListadeCompras = [];
if (isset($_POST['slcListaDeCompras'])) {
	$indicesListadeCompras = $_POST['slcListaDeCompras'];
}

$listaDeCompras = [];
for ($i = 0; $i < count($indicesListadeCompras); $i++) {
	if ($indicesListadeCompras[$i] == 1.1) {
		array_push($listaDeCompras, 'Biscoito');
	}
	if ($indicesListadeCompras[$i] == 1.2) {
		array_push($listaDeCompras, 'Bolacha');
	}
	if ($indicesListadeCompras[$i] == 2.1) {
		array_push($listaDeCompras, 'Pasta de Dente');
	}
	if ($indicesListadeCompras[$i] == 2.2) {
		array_push($listaDeCompras, 'Creme dental');
	}
	if ($indicesListadeCompras[$i] == 3.1) {
		array_push($listaDeCompras, 'Chips');
	}
	if ($indicesListadeCompras[$i] == 3.2) {
		array_push($listaDelistaDeCompras, 'Salgadinho');
	}
}

$medio = 'Materia nao informada';
if (!empty($_POST['rdbMedio'])) {  //verifica se variavel existe na url
	$medio = $_POST['rdbMedio'];
}
$tecnico = 'Materia nao informada';
if (!empty($_POST['rdbTecnico'])) {  //verifica se variavel existe na url
	$tecnico = $_POST['rdbTecnico'];
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
foreach ($musica as $item) {
	echo $item . " ";
}
echo '<br>';

echo 'A mensagem digitada foi: ' . $mensagem . '<br>';

echo 'Voce gosta ' . $meninas . ' de meninas' . '<br>';

echo 'Faixa etaria: ' . $faixaEtaria . '<br>';

echo 'Lista de compras:';
echo '<ul>';
foreach ($listaDeCompras as $item) {
	echo '<li>' . $item . '</li>';
}
echo '</ul>';

echo 'Materias favoritas: <br> ';
echo 'Ensino medio: ' . $medio . '<br>';
echo 'Ensino tecnico: ' . $tecnico . '<br>';