<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>

    <?php
    include('header.php');
        if(isset($_SESSION)){
            // if $_SERVE['idUsuario']
            header("Location: dashboard.php");
        }
    ?>
    <a href="index.php" class="voltar"><button>Voltar</button></a>
    <form action="dashboard.php" method="post">
        <div class="sessoes">
            <a href="login.php"><h2 class='cadastrar'>Entrar</h2></a>
            <h2>|</h2>
            <a href="cadastrar.php"><h2>Cadastrar</h2></a>
        </div>
        <div class="user-box">
            <div class="form-row">
                <div class="form-field">
                    <Label for="e-mail">E-mail</Label>
                    <input type="email" name="e-mail" id="" placeholder="Digite seu e-mail" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-field">
                    <Label for="senha">Senha</Label>
                    <input type="password" name="senha" id="" placeholder="Digite sua senha" required>
                </div>
            </div>
            <a href="#"><p>Esqueci minha senha</p></a>
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
