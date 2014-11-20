<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title> Bazarro.com </title>
		<meta charset="utf-8"/>
		<meta name="description" content="E-commerce, tudo quanto é produto bizarro que você queira comprar.">
		<meta name="keywords"    content="Vendas, bazarro,bizarro, engraçado, compras, e-commerce">
		<meta name="author"      content="Thomaz Picelli, Gabriel e Rhenan Cocev">
		
		<link rel="stylesheet" type="text/css" href="css/padrao.css"/> <!-- CSS TOPO PADRAO -->
		<link rel="stylesheet" type="text/css" href="css/produto.css"/> <!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/jssorb.css"/> <!-- CSS JQUERY -->
		<link rel="shortcut icon" type="image/x-icon" href="Img/Sociais/favicon.png"/> <!-- ÍCONE NAVEGADOR -->
		
	</head>

	<body>
            <?php /*
            if(!$_SESSION["usuario"]) {
                header("location: acesso.php");
               die();
            } */
            ?>
            <header>
                <?php include 'header.php';
                      include 'conecta_mysql.php'; ?> 
                
            </header>
            
            <section>
                        <a class='item' method="GET" href="produto.php?x=<?php echo $cod; ?>">
                            <img alt='produto <?php echo $i ?>' src='<?php echo $foto; ?>' />
                            <p class='nome'><?php echo $nome; ?></p>
                            <p class='preco'><?php echo "R$". $valor .",00"; ?></P>
                            <div class="fb-like" data-href=" <?php echo $facebook; ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                            <!--<iframe src=' <?php //echo $facebook; ?>  'scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:200px; height:70px;' allowtransparency='true'></iframe>
                        --> </a>
            </section>
            
            
            
            
            
            <footer>
                <?php include 'footer.php';
                      mysqli_close($conexao);
                ?>
            </footer>
        </body>
</html>