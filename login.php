<!DOCTYPE html>
<html lang="pt-br">       
<?php

    $email = $_POST['campoemail'];
    $senha= $_POST['camposenha'];
    
    include "validaLogin.php";
    $resposta = autentica($email,$senha);
    if($resposta == true){
        header("Location: paginainicial.php");
    } 
    else {
?>
    
        <script type="text/javascript">
            alert ("Login inválido!");  
        </script> 
    
<?php
        header("Location: acesso.php");
    }    
?>
</html>