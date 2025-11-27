<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrar.css">
    <title>Cadastro</title>
</head>
<body>

    <?php
    include('header.php');
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <a href="index.php" class="voltar"><button>Voltar</button></a>
    <form action="cadastrar.act.php" method="post">
        <div class="sessoes">
            <a href="login.php"><h2>Entrar</h2></a>
            <h2>|</h2>
            <a href="CadastroCliente.php"><h2 class='cadastrar'>Cadastrar</h2></a>
        </div>
        <div class="user-box">
            <div class="form-row">
                <div class="form-field full-width">
                    <Label for="nome">Nome completo</Label>
                    <input type="text" name="nome" id="" placeholder="João da Silva Souza" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-field">
                    <Label for="cpf">CPF</Label>
                    <input type="number" name="cpf" id="" placeholder="000.000.000-00" reqired>
                </div>
                <div class="form-field">
                    <Label for="rg">RG</Label>
                    <input type="number" name="rg" id="" placeholder="00.000.000-0" reqired>
                </div>
            </div>
            <div class="form-row">
                <div class="form-field">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="" placeholder="(00) 00000-0000" reqired>
                </div>
                <div class="form-field">
                    <Label for="nascimento">Data de Nascimento</Label>
                    <input type="date" name="nascimento" id="" reqired>
                </div>
            </div>
            <div class="form-row">
                <div class="form-field">
                    <Label for="e-mail">E-mail</Label>
                <input type="email" name="e-mail" id="" placeholder="Alguem@exemplo.com" reqired>
                </div>
                <div class="form-field">
                    <Label for="senha">Senha</Label>
                <input type="password" name="senha" id="" placeholder="No mínimo 8 caracteres" required>
                </div>
            </div>
        </div>
        <div class="botoes">
            <input type="reset" value="Resetar" id="formCliente">
            <input type="submit" value="Entrar" id="formCliente">
        </div>
        <!-- <p class="botao"><input type="submit" value="Enviar" id="formCliente" onsubmit=""></p> -->
        <!-- <input type="submit" value="Gerar Relatorio"> -->
    </form>
</body>
</html>