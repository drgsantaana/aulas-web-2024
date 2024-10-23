<!-- ##############################
Nome: Daniel Reis
Curso: Engenharia de Computação - IFMG - Campus Bambui
Descrição: Desafio 2 - Utilizando php e tabelas criar um tabuleiro de xadrez com as peças
############################## -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xadrez - Daniel</title>
	<style>
		* {
			padding: 0;
			margin: 0;
		}

		.container {
			height: 100vh;
			width: 100vw;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}

		.tabuleiro {
			border: 1px solid;
			height: 600px;
			width: 600px;
			border-collapse: collapse;
		}

		.tabuleiro td {
			width: 75px;
			height: 75px;
			text-align: center;
			vertical-align: middle;
		}

		.escuro {
			background-color: #006400;
			color: #fff;
		}

		.claro {
			background-color: #fff;
			color: #000;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Xadrez dos cria</h1>
		<table class="tabuleiro">
			<?php
			$pretas = [
				'<img src="./assets/peaoPreta.svg" alt="peaoPreto">',
				'<img src="./assets/torrePreta.svg" alt="torrePreta">',
				'<img src="./assets/cavaloPreta.svg" alt="cavaloPreto">',
				'<img src="./assets/bispoPreta.svg" alt="bispoPreto">',
				'<img src="./assets/rainhaPreta.svg" alt="rainhaPreta">',
				'<img src="./assets/reiPreta.svg" alt="reiPreto">',
			];
			$brancas = [
				'<img src="./assets/peaoBranca.svg" alt="peaoBranco">',
				'<img src="./assets/torreBranca.svg" alt="torreBranca">',
				'<img src="./assets/bispoBranca.svg" alt="bispoBranco">',
				'<img src="./assets/cavaloBranca.svg" alt="cavaloBranco">',
				'<img src="./assets/reiBranca.svg" alt="reiBranco">',
				'<img src="./assets/rainhaBranca.svg" alt="rainhaBranca">',
			];

			for ($i = 0; $i < 8; $i++) {
				echo '<tr>';
				for ($j = 0; $j < 8; $j++) {
					if (($i + $j) % 2 == 0) {
						switch ($i) {
							case 0:
								switch ($j) {
									case 0:
										echo '<td class="escuro">' . $brancas[1]  . '</td>';
										break;
									case 1:
										echo '<td class="escuro">' . $brancas[3]  . '</td>';
										break;
									case 2:
										echo '<td class="escuro">' . $brancas[2]  . '</td>';
										break;
									case 3:
										echo '<td class="escuro">' . $brancas[5]  . '</td>';
										break;
									case 4:
										echo '<td class="escuro">' . $brancas[4]  . '</td>';
										break;
									case 5:
										echo '<td class="escuro">' . $brancas[2]  . '</td>';
										break;
									case 6:
										echo '<td class="escuro">' . $brancas[3]  . '</td>';
										break;
									case 7:
										echo '<td class="escuro">' . $brancas[1]  . '</td>';
										break;
								}
								break;
							case 1:
								echo '<td class="escuro">' . $brancas[0]  . '</td>';
								break;
							case 6:
								echo '<td class="escuro">' . $pretas[0]  . '</td>';
								break;
							case 7:
								switch ($j) {
									case 0:
										echo '<td class="escuro">' . $pretas[1]  . '</td>';
										break;
									case 1:
										echo '<td class="escuro">' . $pretas[2]  . '</td>';
										break;
									case 2:
										echo '<td class="escuro">' . $pretas[3]  . '</td>';
										break;
									case 3:
										echo '<td class="escuro">' . $pretas[4]  . '</td>';
										break;
									case 4:
										echo '<td class="escuro">' . $pretas[5]  . '</td>';
										break;
									case 5:
										echo '<td class="escuro">' . $pretas[3]  . '</td>';
										break;
									case 6:
										echo '<td class="escuro">' . $pretas[2]  . '</td>';
										break;
									case 7:
										echo '<td class="escuro">' . $pretas[1]  . '</td>';
										break;
								}
								break;

							default:
								echo '<td class="escuro"></td>';
								break;
						}
					} else {
						switch ($i) {
							case 0:
								switch ($j) {
									case 0:
										echo '<td class="claro">' . $brancas[1]  . '</td>';
										break;
									case 1:
										echo '<td class="claro">' . $brancas[3]  . '</td>';
										break;
									case 2:
										echo '<td class="claro">' . $brancas[2]  . '</td>';
										break;
									case 3:
										echo '<td class="claro">' . $brancas[5]  . '</td>';
										break;
									case 4:
										echo '<td class="claro">' . $brancas[4]  . '</td>';
										break;
									case 5:
										echo '<td class="claro">' . $brancas[2]  . '</td>';
										break;
									case 6:
										echo '<td class="claro">' . $brancas[3]  . '</td>';
										break;
									case 7:
										echo '<td class="claro">' . $brancas[1]  . '</td>';
										break;
								}
								break;
							case 1:
								echo '<td class="claro">' . $brancas[0]  . '</td>';
								break;
							case 6:
								echo '<td class="claro">' . $pretas[0]  . '</td>';
								break;
							case 7:
								switch ($j) {
									case 0:
										echo '<td class="claro">' . $pretas[1]  . '</td>';
										break;
									case 1:
										echo '<td class="claro">' . $pretas[2]  . '</td>';
										break;
									case 2:
										echo '<td class="claro">' . $pretas[3]  . '</td>';
										break;
									case 3:
										echo '<td class="claro">' . $pretas[4]  . '</td>';
										break;
									case 4:
										echo '<td class="claro">' . $pretas[5]  . '</td>';
										break;
									case 5:
										echo '<td class="claro">' . $pretas[3]  . '</td>';
										break;
									case 6:
										echo '<td class="claro">' . $pretas[2]  . '</td>';
										break;
									case 7:
										echo '<td class="claro">' . $pretas[1]  . '</td>';
										break;
								}
								break;
							default:
								echo '<td class="claro"></td>';
								break;
						}
					}
				}
				echo '</tr>';
			}
			?>
		</table>
	</div>
</body>

</html>