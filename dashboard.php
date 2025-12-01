    <?php
    session_start();
    require("connect.php");


    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email']) && isset($_POST['senha'])) {

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = mysqli_real_escape_string($con, $_POST['senha']);

        $stmt = mysqli_prepare($con, "SELECT email , senha, idCliente FROM cliente WHERE email = ? AND senha = ?");
        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);


        $resultado = mysqli_fetch_array($result);

        print($resultado['idCliente']);

        $_SESSION['Cliente']['idCliente'] = $resultado['idCliente'];
        $_SESSION['Cliente']['email'] = $resultado['email'];
        $_SESSION['Cliente']['senha'] = $resultado['senha'];

        print ($_SESSION['Cliente']['senha']);


        header("index.php");
    }
    ?>