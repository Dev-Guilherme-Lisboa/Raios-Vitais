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
    
        @session_start();
        if(isset($_SESSION)){
            // $_POST['email'] = $senha?: null;
            // $_POST['senha'] = $senha?: null;

            // if ($_SESSION['email'] == $_POST['email'] && $_SESSION['senha'] = $_POST['senha']){

            //     header("clientes.php");
            // }
        }
       
        include('header.php');
    ?>
    <form action="dashboard.php" method="post">
        <div class="sessoes">
            <a href="login.php"><h2>Login</h2></a>
            <h2>|</h2>
            <a href="CadastroCliente.php"><h2>Cadastro</h2></a>
        </div>
        <div class="user-box">
            <Label>Email:</Label>
            <input type="email" name="email" id="">
            <Label>Senha</Label> 
            <input type="password" name="senha" id="">
        </div>
        <p class="botao"><input type="submit" value="Enviar" id="formCliente" onsubmit=""></p>
        <!-- <input type="submit" value="Gerar Relatorio"> -->
    </form>
</body>
</html>
