<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Login</title>
</head>
<body>

    <?php
    
        if(isset($_SESSION)){
            // if $_SERVE['idUsuario']
            header("Location: dashboard.php");
        }
    ?>
    
    <form action="CadastroCliente.act.php" method="post">
        <div class="sessoes">
            <a href="login.php"><h2 class='cadastrar'>Entrar</h2></a>
            <h2>|</h2>
            <a href="CadastroCliente.php"><h2>Cadastrar</h2></a>
        </div>
        <div class="user-box">
            <Label>Email</Label>
            <input type="email" name="email" id="" placeholder="Digite seu email" reqired>
            <Label>Senha</Label> 
            <input type="password" name="senha" id="" placeholder="Digite sua senha" required>
            <a href="#"><p>Esqueci minha senha</p></a>
        </div>
        <p class="botao"><input type="submit" value="Enviar" id="formCliente" onsubmit=""></p>
        <!-- <input type="submit" value="Gerar Relatorio"> -->
    </form>
</body>
</html>
