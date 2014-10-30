<?php
    include 'conecta_mysql.php';

    $email = mysql_real_escape_string($_POST['campoemail']);
    $senha = mysql_real_escape_string($_POST['camposenha']);

    $sql = "SELECT * FROM usuario WHERE(email='$email' && senha='$senha')";
    
    $resultado = mysqli_query($conexao, $sql);
    
    if ($resultado){
        header("Location: paginainicial.php");
        die();
    } 
    else {
        header("Location: acesso.php");
        die();
    }
    
    mysqli_close ($conexao);
?>