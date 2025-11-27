<?php

$codigo = $_GET['codigo'];


include('connect.php');

if(mysqli_query($con, "DELETE FROM `cliente` where `idCliente` = '$codigo")){
    echo "excluido SUCESSO";
} 
else{
    echo "erro ao excluir";
    echo $con->error;
}
?>