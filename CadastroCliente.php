<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>

    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    
    <form action="CadastroCliente.act.php" method="post">
        <div class="sessoes">
            <a href="login.php"><h2>Entrar</h2></a>
            <h2>|</h2>
            <a href="CadastroCliente.php"><h2 class='cadastrar'>Cadastrar</h2></a>
        </div>
        <div class="user-box">
            <Label>Nome completo</Label>
            <input type="text" name="nome" id="" placeholder="Exemplo: João da Silva Souza" required>
            <Label>Email</Label>
            <input type="email" name="email" id="" placeholder="Exemplo@gmail.com" reqired>
            <Label>Senha</Label> 
            <input type="password" name="senha" id="" placeholder="No mínimo 8 caracteres" required>
            <!-- <p>Cpf: <input type="number" name="cpf" id=""></p> -->
            <!-- <p>rg: <input type="number" name="rg" id=""></p> -->
            <!-- <p>Cidade <input type="text" name="cidade" id=""></p> -->
            <!-- <p>Bairro <input type="text" name="bairro" id=""></p> -->
            <!-- <p>Estado <input type="text" name="estado" id=""></p> -->
            <!-- <p>Cep <input type="number" name="cep" id=""></p> -->
            <!-- <p>Email: <input type="text" name="email" id=""></p> -->
            <!-- <p>Telefone: <input type="text" name="telefone" id=""></p> -->
            <!-- <p>Nascimento: <input type="date" name="nascto" id=""></p> -->
        </div>
        <p class="botao"><input type="submit" value="Enviar" id="formCliente" onsubmit=""></p>
        <!-- <input type="submit" value="Gerar Relatorio"> -->
    </form>
</body>
</html>