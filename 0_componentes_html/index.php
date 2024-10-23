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
                    <td colspan="2">
                        Cadastro de cliente
                    </td>
                </tr>
                <!-- componente text -->
                <tr>
                    <td>
                        Codigo:
                    </td>
                    <td>
                        <input type="text" name="txtCodigo" value="098765" readonly="true">
                    </td>
                </tr>
                <!-- componente text -->
                <tr>
                    <td>
                        Nome:
                    </td>
                    <td>
                        <input type="text" id="txtNome" name="txtNome" placeholder="Nome Completo" size="100" value="" maxlength="80">
                    </td>
                </tr>
                <!-- componente password -->
                <tr>
                    <td>Senha:</td>
                    <td><input type="password" name="txtSenha" value="coxinha123" maxlength="10" disabled="true"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="txtEmail" placeholder="email@exemplo.com.br" size="100" maxlength="100"></td>
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