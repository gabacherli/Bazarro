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
    <!DOCTYPE html>
    <html lang="pt-br">
        
            <script type="text/javascript">
                alert ("Login inválido!");
         
        </script> 
    </html>
    <?php
        header("Location: acesso.php");
    }    
    
    
?>