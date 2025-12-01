<?php
require 'connect.php';  


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id === null) {
    echo "Invalid or missing client ID.";
    exit;
}

$message = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome_new  = trim($_POST['nome']  ?? '');
    $email_new = trim($_POST['email'] ?? '');
    $senha_new = trim($_POST['senha'] ?? '');
    $CPF_new = trim($_POST['CPF'] ?? '');
    $Telefone_new = trim($_POST['Telefone'] ?? '');
    $DataNasc_new = trim($_POST['DataNascimento'] ?? '');
 
    $update_sql = "UPDATE cliente SET nome = ?, email = ?, senha = ?, CPF = ?, RG = ?, Telefone = ?, DataNascimento = ? WHERE idCliente = ?";
    if ($stmt = $con->prepare($update_sql)) {
       
        $stmt->bind_param("sssssssi", $nome_new, $email_new, $senha_new, $CPF_new,$RG, $Telefone_new, $DataNasc_new, $id);


        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $message = "Cliente atualizado.";
            } else {
  
                $message = "nenhum cliente com esse id.";
            }
        } else {
            $message = "Erro: " . htmlspecialchars($stmt->error);
        }
        $stmt->close();
    } else {
        $message = "Erro no update";
    }
}

$select_sql = "SELECT nome, email, senha, CPF, RG, Telefone, DataNascimento FROM cliente WHERE idCliente = ?";
if ($stmt = $con->prepare($select_sql)) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($nome, $email, $senha, $CPF, $RG, $Telefone, $DataNasc);
    
 
    if (!$stmt->fetch()) {
        echo "Client not found.";
        $stmt->close();
        exit;
    }
    $stmt->close();
} else {
    echo "Database error: could not prepare select.";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alterar Cliente</title>
</head>
<body>
<h2>Alterar Cliente</h2>

<?php
if (!empty($message)) {
    echo "<p><strong>$message</strong></p>";
}
?>

<form method="post" action="">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" 
           value="<?= htmlspecialchars($nome) ?>" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" 
           value="<?= htmlspecialchars($email) ?>" required><br><br>

    <label for="senha">Senha:</label><br>
    <input type="text" id="senha" name="senha" 
           value="<?= htmlspecialchars($senha) ?>" required><br><br>
    <label for="senha">CPF:</label><br>
    <input type="text" id="CPF" name="CPF" 
           value="<?= htmlspecialchars($CPF) ?>" ><br><br>
    <label for="senha">RG:</label><br>
    <input type="text" id="RG" name="RG" 
           value="<?= htmlspecialchars($RG) ?>" ><br><br>
    <label for="senha">Telefone:</label><br>
    <input type="text" id="Telefone" name="Telefone" 
           value="<?= htmlspecialchars($Telefone) ?>" ><br><br>
    

    <input type="submit" value="Atualizar Cliente">
</form>
</body>
</html>
