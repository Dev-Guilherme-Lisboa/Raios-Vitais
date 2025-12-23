<?php
    extract($_POST);
    require('connect.php');

    $rand = rand(0,1000000000);
    $randDois = rand(0,1000000000);

    @session_start();
    $msg = "";
    
    if(mysqli_query($con, "INSERT INTO `cliente`(`idCliente`, `Nome`, `Senha`, `CPF`, `RG`, `Telefone`, `DataNascimento`, `email`) VALUES (NULL,'$nome','$senha',$rand,$randDois,00,00,'$email')")){
        $msg = "<p class=green>Registro Criado com sucesso!</p>";

    
    }else{
        $msg = "<p class=red>Erro ao gravar registro: ". $con->error . "</p>";
    }
    $_SESSION['msg'] = $msg;
    


    header("location:CadastroCliente.php");