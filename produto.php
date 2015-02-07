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
                    <?php  
                    $y = $_GET['x'];    
                    $sql = "SELECT * FROM produto WHERE codpro='$y'";
                              $resp = mysqli_query ($conexao , $sql);$registro = mysqli_fetch_array($resp);
                                $codpro = $registro['codpro'];
                                $foto = $registro['imagem'];
                                $nome = $registro['nome'];
                                $valor = $registro['valor'];
                                $facebook = $registro['facebook'];
                                $descricao = $registro['descricao'];
                    ?> 
                    <img src="<?php echo $foto;?>" alt="produto"/>
                    
                    <h1><?php echo $nome;?></h1>
                    
                    <p class="preco">R$ <?php echo $valor;?>,00<p>
                    
                    <a method="GET" href="validaCompra.php?valor=<?php echo $valor;?>&nome=<?php echo $nome;?>&desc=<?php echo $descricao;?>&codpro=<?php echo $codpro;?>"><img src="Img/Sociais/comprar.png" alt="comprar"/></a></br>
                    
                    <iframe src="<?php echo $facebook;?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:70px;" allowtransparency="true"></iframe>
                    
                    <p class="descriçao" ><?php echo $descricao;?></p>
                    
                    
                    <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                    <div class="fb-comments" data-href="https://www.facebook.com/620119341440567/photos/a.620236728095495.1073741825.620119341440567/632120006907167/?type=1&theater/comments/" data-numposts="5" data-colorscheme="light" data-width="650"></div>
			
		</section>
		
            <footer>
                <?php include 'footer.php';
                      mysqli_close($conexao);
                ?>
            </footer>
		
		
	</body>

</html>