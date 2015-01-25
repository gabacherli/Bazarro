<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title> Bazarro.com </title>
		<meta charset="utf-8"/>
		<meta name="description" content="E-commerce, tudo quanto é produto bizarro que você queira comprar.">
		<meta name="keywords"    content="Vendas, bazarro,bizarro, engraçado, compras, e-commerce">
		<meta name="author"      content="Thomaz Picelli, Gabriel e Rhenan Cocev">
		
		<link rel="stylesheet" type="text/css" href="css/padrao.css"/> <!-- CSS TOPO PADRAO -->
		<link rel="stylesheet" type="text/css" href="css/index.css"/> <!-- CSS -->
                <link rel="stylesheet" type="text/css" href="css/jssorb.css"/> <!-- CSS JQUERY -->
		<link rel="shortcut icon" type="image/x-icon" href="Img/Sociais/favicon.png"/> <!-- ÍCONE NAVEGADOR -->
		
	</head>

	<body>
		<header>
                    <?php include 'headerOut.php'; 
                          include 'conecta_mysql.php';
                    ?>
                </header>
		
                    <div class="jq">
                        <script type="text/javascript" src="script/jquery-1.9.1.min.js"></script>
			<script type="text/javascript" src="script/jssor.core.js"></script>
			<script type="text/javascript" src="script/jssor.utils.js"></script>
			<script type="text/javascript" src="script/jssor.slider.js"></script>
			<script type="text/javascript" src="script/jssor.jqcode.js"></script>
                        <!-- Jssor Slider Begin -->
			<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 950px; height: 400px; overflow: hidden; ">
				<!-- Slides Container -->
				<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 950px; height: 400px; overflow: hidden;">
                                        <div>
                                            <img u="image" src="Img/tmp/01.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/02.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/03.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/04.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/01.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/02.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/03.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/04.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/01.jpg" />
					</div>
					<div>
                                            <img u="image" src="Img/tmp/02.jpg" />
					</div>
				</div>
				<!-- bullet navigator container -->
				<div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
					<!-- bullet navigator item prototype -->
					<div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
				</div>
				<!-- Arrow Left -->
				<span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 180px; left: 0px;">
				</span>
				<!-- Arrow Right -->
				<span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 180px; right: 0px">
				</span>
			</div>
			</br></br></br></br>
                    </div>  
                
		<aside>
                    <br><br><p>FILTRO:</p><br>
                    <form> 
                        <input type="radio" name="filtro" value="Higiene"/> Higiene <br> <br>
                        <input type="radio" name="filtro" value="Cozinha"/> Cozinha <br><br>
                        <input type="radio" name="filtro" value="Mascaras"/> Mascaras <br><br>
                        <input type="radio" name="filtro" value="Pet"/> Pet <br>
                    </form>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</aside>
		<section>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));
                    </script>
		
                        <?php for($i=1; $i<=12; $i++){
                        $sql = "SELECT * FROM produto WHERE codpro='$i'";
                            $resp = mysqli_query ($conexao , $sql);$registro = mysqli_fetch_array($resp);
                                $foto = $registro['imagem'];
                                $nome = $registro['nome'];
                                $valor = $registro['valor'];
                                $facebook = $registro['facebook'];
                        ?> 
                        <a class='item' href='acesso.php'>
                            <img alt='produto <?php echo $i ?>' src='<?php echo $foto; ?>' />
                            <p class='nome'><?php echo $nome; ?></p>
                            <p class='preco'><?php echo "R$". $valor .",00"; ?></P>
                            <div class="fb-like" data-href=" <?php echo $facebook; ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                            <!--<iframe src=' <?php echo $facebook; ?>  'scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:200px; height:70px;' allowtransparency='true'></iframe> -->
                         </a>
                    <?php } ?>
                    
		</section>
                	
		<footer>
                    <?php include 'footer.php';
                          mysqli_close($conexao);
                    ?>
		</footer>
	</body>
</html>