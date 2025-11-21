<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clientes.css">
    <title>Cliente</title>
</head>
<body>

<?php
include "connect.php";

$clientes = mysqli_query($con, "Select * from `cliente`");

   include('header.php');

echo "<div id=grade>";
echo "<h1>Finha de clientes do Banco de Dados</h1>";
echo "<table class=cartas>";
echo "<tr class=titulos>";
echo "<th>Id</th>";
echo "<th>Nome</th>";
// echo "<th>Senha</th>";
echo "<th>CPF</th>";
echo "<th>RG</th>";
// echo "<th>Bairro</th>";
// echo "<th>Cidade</th>";
// echo "<th>Estado</th>";
// echo "<th>Cep</th>";
// echo "<th>Email</th>";
echo "<th>Telefone</th>";
echo "<th>Nascimento</th>";
echo "<th>Alterar</th>";
echo "<th>Excluir</th>";
echo "</tr>";
while($cliente = mysqli_fetch_array($clientes)){
    echo "<tr class=linha>";
    echo "<td>$cliente[idCliente] </td>";
    echo "<td>$cliente[Nome] </td>";
    // echo "<td>senha: $cliente[Senha] </td>";
    echo "<td>$cliente[CPF] </td>";
    echo "<td>$cliente[RG] </td>";
    // echo "<td>$cliente[bairro] </td>";
    // echo "<td>$cliente[cidade] </td>";
    // echo "<td>$cliente[estado] </td>";
    // echo "<td>$cliente[cep] </td>";
    // echo "<td>$cliente[email] </td>";
    echo "<td>$cliente[Telefone] </td>";
    echo "<td>$cliente[DataNascimento] </td>";
    echo "<td><a href=alterar.php><div>Alterar</div></a></td>";
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