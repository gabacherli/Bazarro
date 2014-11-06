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
            <?php
            if(!$_SESSION["usuario"]) {
                header("location: acesso.php");
               die();
            }
            ?>
            <header>
                <?php include 'header.php' ?>
            </header>
		
		<section>
                    
                    <img src="Img/Produtos/Máscaras/mascara bebe.jpg" alt="produto"/>
                    
                    <h1>Nome do produto - Nome do produto</h1>
                    
                    <p class="preco">R$ 29,90<p>
                    
                    <a href="carrinho.php"><img src="Img/Sociais/car01.png" alt="comprar"/></a></br>
                    
                    <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:70px;" allowtransparency="true"></iframe>
                    
                    <p class="descriçao" >Descrição do produto Descrição do produto Descrição do produto Descrição do produto Descrição do produto Descrição do produto 
                    Descrição do produto Descrição do produto Descrição do produto </p>
                    
                    
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
                <?php include 'footer.php' ?>
            </footer>
		
		
	</body>

</html>