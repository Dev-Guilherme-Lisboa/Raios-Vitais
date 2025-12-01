<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>


<?php
include "connect.php";

$clientes = mysqli_query($con, "Select * from `cliente`");

   include('header.php');

echo "<div id=grade>";

echo "<p>FICHA DE USUARIOS DO BANCO DE DADOS</p>";
echo "<table class=cartas>";
while($cliente = mysqli_fetch_array($clientes)){
    echo "<tr>";
    echo "<td>cod: $cliente[idCliente] </td>";
    echo "<td>nome: $cliente[Nome] </td>";
    echo "<td>senha: $cliente[Senha] </td>";
    echo "<td>cpf: $cliente[CPF] </td>";
    echo "<td>rg: $cliente[RG] </td>";
    // echo "<td>bairro: $cliente[bairro] </td>";
    // echo "<td>cidade: $cliente[cidade] </td>";
    // echo "<td>estado: $cliente[estado] </td>";
    // echo "<td>cep: $cliente[cep] </td>";
    // echo "<td>email: $cliente[email] </td>";
    echo "<td>tel: $cliente[Telefone] </td>";
    echo "<td>nascimento: $cliente[DataNascimento] </td>";
    echo "<td><a href=alterarCliente.php?id=$cliente[idCliente]><div>Alterar</div></a></td>";
    echo "<td><a href=javascript:excluir($cliente[idCliente])><div>Excluir</div></a></td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>"
?>
<script src="js/jquery.js"></script>
<script>


function excluir(idCliente){
    opcao = confirm("Deseja exluir o registro "+ idCliente + "?");
    if(opcao==true){
        $.ajax({
            type: "get",
            url: "excluirCliente.php?codigo="+idCliente,
            success: function (response) {
                location.reload();
            }
        });
    }
}

</script>
</body>
</html>

