<?php
include('connect.php'); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} elseif (isset($_POST['id'])) {
    $id = $_POST['id'];
} elseif (isset($_GET['codigo'])) {
    $id = $_GET['codigo'];
} elseif (isset($_POST['codigo'])) {
    $id = $_POST['codigo'];
} else {
    echo "ID do cliente não fornecido.";
    exit;
}

if ($stmt = $con->prepare("DELETE FROM cliente WHERE idCliente = ?")) {
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Cliente excluído com sucesso.";
    } else {
        echo "Erro ao excluir o cliente: " . $con->error;
    }
    $stmt->close();
} else {
    echo "Erro na preparação da exclusão: " . $con->error;
}

$con->close(); 
?>
