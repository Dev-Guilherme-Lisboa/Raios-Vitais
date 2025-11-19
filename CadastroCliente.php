<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <p>Nome: <input type="text" name="nome" id=""></p>
        <p>Senha: <input type="text" name="senha" id=""></p>
        <!-- <p>Cpf: <input type="number" name="cpf" id=""></p> -->
        <!-- <p>rg: <input type="number" name="rg" id=""></p> -->
        <!-- <p>Cidade <input type="text" name="cidade" id=""></p> -->
        <!-- <p>Bairro <input type="text" name="bairro" id=""></p> -->
        <!-- <p>Estado <input type="text" name="estado" id=""></p> -->
        <!-- <p>Cep <input type="number" name="cep" id=""></p> -->
        <!-- <p>Email: <input type="text" name="email" id=""></p> -->
        <!-- <p>Telefone: <input type="text" name="telefone" id=""></p> -->
        <!-- <p>Nascimento: <input type="date" name="nascto" id=""></p> -->
        <p class="botao"><input type="submit" value="Enviar" id="formCliente" onsubmit=""></p>
        <!-- <input type="submit" value="Gerar Relatorio"> -->
    </form>
</body>
</html>