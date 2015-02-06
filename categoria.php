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
                <link rel="shortcut icon" type="image/x-icon" href="Img/Sociais/favicon.png"/> <!-- ÍCONE NAVEGADOR -->
		
	</head>

	<body>
		<header>
                    <?php include 'header.php';
                          include 'conecta_mysql.php'; ?>
		</header>
		<aside>
                    <br><br><p>    FILTRO:</p><br>
                    <form> 
                        <input type="radio" name="filtro" value="Higiene"/> Higiene <br> <br>
                        <input type="radio" name="filtro" value="Cozinha"/> Cozinha <br><br>
                        <input type="radio" name="filtro" value="Mascaras"/> Mascaras <br><br>
                        <input type="radio" name="filtro" value="Pet"/> Pet <br>
                    </form>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
                        <?php
                        
                        $y = $_GET['x'];
                        $sql = "SELECT * FROM produto WHERE codcat = '$y'";
                        $resp = mysqli_query ($conexao , $sql);$registro = array();
                        while ($registro = mysql_fetch_array($resp)) {
                            $row[] = $registro;
                            foreach ($row as $registro) {
                               
                                $cod  = $registro['codpro'];
                                $foto = $registro['imagem'];
                                $nome = $registro['nome'];
                                $valor = $registro['valor'];
                                $facebook = $registro['facebook'];
                        
                        ?>
                        
                        <a class='item' method="GET" href="produto.php?x=<?php echo $cod; ?>">
                            <img alt='produto <?php echo $i ?>' src='<?php echo $foto; ?>' />
                            <p class='nome'><?php echo $nome; ?></p>
                            <p class='preco'><?php echo "R$". $valor .",00"; ?></P>
                            <div class="fb-like" data-href=" <?php echo $facebook; ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                            <!--<iframe src=' <?php //echo $facebook; ?>  'scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:200px; height:70px;' allowtransparency='true'></iframe> -->
                         </a>
                         
                            
                        
                        <?php } } ?>
                     
		</section>
                	
		<footer>
                    <?php include 'footer.php';
                    mysqli_close($conexao); ?>
		</footer>	
	</body>
</html>
