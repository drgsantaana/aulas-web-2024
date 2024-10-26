<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/html5.svg" type="image/svg">
    <title>0 CONTROLES HTML</title>

    <style>
        div {
            display: flex;
            width: 100dvw;
            align-items: center;
            justify-content: center;
            margin: 8px;
        }
    </style>


</head>

<body>
    <div>
        <table border="1px" cellspacing="4px" cellpadding="5px">
            <tr>
                <td>
                    &ccedil;
                </td>
                <td> cedil </td>
            </tr>
            <tr>
                <td>&atilde;</td>
                <td>tilde</td>
            </tr>
            <tr>
                <td>&acirc;</td>
                <td>circ</td>
            </tr>
            <tr>
                <td>&aacute;</td>
                <td>acute</td>
            </tr>
        </table>
    </div>
    <div>
        <!-- formulario de cliente -->

        <form name="frmCadastro" action="processa.php" method="post" enctype="multipart/form-data">
            <!-- componente escondido -->
            <input type="hidden" name="hddCodigo" value="123456" />
            <table border="1px" cellspacing="4px" cellpadding="5px">
                <tr>
                    <td colspan="2">Cadastro de cliente</td>
                </tr>
                <!-- componente text -->
                <tr>
                    <td width="15%">Codigo:</td>
                    <td>
                        <input type="text" name="txtCodigo" value="098765" readonly="true">
                    </td>
                </tr>
                <!-- componente text -->
                <tr>
                    <td width="15%">Nome:</td>
                    <td>
                        <input type="text" id="txtNome" name="txtNome" placeholder="Nome Completo" size="100" value="" maxlength="80">
                    </td>
                </tr>
                <!-- componente password -->
                <tr>
                    <td width="15%">Senha:</td>
                    <td><input type="password" name="txtSenha" value="coxinha123" maxlength="10" disabled="true"></td>
                </tr>
                <!-- componente email -->
                <tr>
                    <td width="15%">Email:</td>
                    <td><input type="email" name="txtEmail" placeholder="email@exemplo.com.br" size="100" maxlength="100"></td>
                </tr>
                <!-- componente data -->
                <tr>
                    <td width="15%">Data de Nascimento:</td>
                    <td><input type="date" name="txtDataNasc"></td>
                </tr>
                <!-- componente arquivo -->
                <tr>
                    <td>Envie sua foto:</td>
                    <td><input type="file" name="txtArquivo"></td>
                </tr>
                <!-- componente radio -->
                <tr>
                    <td width="15%">Renda:</td>
                    <td>
                        <input type="radio" name="rdbRenda" id="rdbMenosQue800" value="1" checked="POBRE">
                        <label for="rdbMenosQue800">Menos que R$800</label>
                        <input type="radio" name="rdbRenda" id="rdbMaisQue800" value="2">
                        <label for="rdbMaisQue800">Mais que R$800</label>
                        <input type="radio" name="rdbRenda" id="rdbEstagiario" value="3">
                        <label for="rdbEstagiario">Pago pra trabalhar</label>
                    </td>
                </tr>

                <tr>
                    <td width="15%">
                        Quais seu estilo de musicas favoritas
                    </td>
                    <td>
                        <input type="checkbox" name="chkLofi" value="lofi"> Lofi
                        <br>
                        <input type="checkbox" name="chkRock" value="Rock"> Rock
                        <br>
                        <input type="checkbox" name="chkSamba" value="Samba"> Samba
                        <br>
                        <input type="checkbox" name="chkPagode" value="Pagote"> Pagode

                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="reset" value="Limpar" id="btnLimpar" name="btnLimpar">
                        <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</body>

</html>