<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title> Bazarro.com </title>
        <meta charset="utf-8"/>
        <meta name="description" content="validação de cadastro">
        <meta name="author"      content="Thomaz Picelli, Gabriel e Rhenan Cocev">

    </head>
    <body>
        
        <form method="POST" action="confirmacao.php">
            <?php $erro = FALSE; ?>
            
            <input type="hidden" name="nome" value="<?php echo $_POST['nome']?>"/>
            <?php $nome = $_POST['nome']; 
                if(empty($nome)){
                    echo "Verifique se o campo nome esta preenchido.<br>"; $erro=TRUE;
                    
                }
            ?>

            <input type="hidden" name="datanasc"value="<?php echo $_POST['datanasc']?>"/>
            <?php $datanasc = $_POST['datanasc']; 
                if(empty($datanasc) OR !strstr($datanasc,'/')){
                    echo "Verifique se o campo data de nascimento esta preenchido corretamente (xx/xx/xxxx). <br>"; $erro=TRUE;
                } 
            ?>
            
            <input type="hidden" name="sexo" value="<?php echo $_POST ['sexo']; ?>"/>
            
            <input type="hidden" name="RG" value="<?php echo $_POST ['RG']; ?>"/>
            <?php $RG = $_POST['RG']; 
                if(empty($RG)){
                    echo "Verifique se o campo RG esta preenchido.<br>"; $erro=TRUE;
                }
            ?>

            <input type="hidden" name="CPF" value="<?php echo $_POST ['CPF']; ?>"/>
            <?php $CPF = $_POST['CPF']; 
                if(empty($CPF)){
                    echo "Verifique se o campo CPF esta preenchido.<br>"; $erro=TRUE;
                }
            ?>

            <input type="hidden" name="cel" value="<?php echo $_POST ['cel']; ?>"/>
            <?php $cel = $_POST['cel']; 
                if(empty($cel) OR strlen($cel)<10){
                    echo "Verifique se o campo do celular esta preenchido, ou se esta faltando o simbolo de separação entre os numeros (9xxxx-xxxx). <br>"; $erro=TRUE;        
                }
            ?>
            
            <input type="hidden" name="tel" value="<?php echo $_POST ['tel']; ?>"/>
            <?php $tel = $_POST['tel']; 
                if(empty($tel) OR strlen($cel)<9){
                    echo "Verifique se o campo do telefone esta preenchido, ou se esta faltando o simbolo de separação entre os numeros (xxxx-xxxx). <br>"; $erro=TRUE;
                }
            ?>
            
            <input type="hidden" name="email" value="<?php echo $_POST ['email']; ?>"/>
            <?php $email = $_POST['email']; 
                if(empty($email) OR !strstr($email,'@')){
                    echo "Digite o e-mail corretamente ou verifique se o campo estra preenchido. <br>"; $erro=TRUE;        
                } 
            ?>
            
            <input type="hidden" name="senha1"value="<?php echo $_POST ['senha1']; ?>"/>
            <?php $senha1 = $_POST['senha1']; 
                if (strlen($senha1)<5 OR empty($senha1)){
                    echo " Verifique se o campo Senha esta preenchido, ou se a senha tem menos de 5 digitos.<br/>"; $erro=TRUE;  
                }
            ?>
            
            <input type="hidden" name="senha2"value="<?php echo $_POST ['senha2']; ?>"/>
            <?php $senha2 = $_POST['senha2']; 
                if (strlen($senha2)<5 OR empty($senha2) OR $senha2 != $senha1){
                    echo " Verifique se o campo Senha esta preenchido, se a senha tem menos de 5 digitos ou está igual a digitada anteriormente.<br/>"; $erro=TRUE;  
                }
            ?>
        <?php 
            if($erro = FALSE){
                include 'confirmacao.php';    
            }
            else{
                include 'acesso.php';
            }
        ?>          
            
        </form>

        
        
    </body>
</html> 

