<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title> Meu Carrinho - Bazarro.com </title>
		<meta charset="utf-8"/>
		<meta name="description" content="E-commerce, tudo quanto é produto bizarro que você queira comprar.">
		<meta name="keywords"    content="Vendas, bazarro,bizarro, engraçado, compras, e-commerce">
		<meta name="author"      content="Thomaz Picelli, Gabriel e Rhenan Cocev">
		
		<link rel="stylesheet" type="text/css" href="css/padrao.css"/> <!-- CSS TOPO PADRAO -->
		<link rel="stylesheet" type="text/css" href="css/carrinho.css"/> <!-- CSS -->
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
                        $sql = "SELECT * FROM carrinho WHERE coduso='$i'"; //coduso logado (session)
                            $resp = mysqli_query ($conexao , $sql);$registro = mysqli_fetch_array($resp);
                            $prod  = $registro['codpro'];
                            $qtd  = $registro['qtd'];
                            $valor = $registro['valor'];
                    
                        for($prod=1; $prod<=$qtd; $prod++){
                    ?>
			<div class="item">
				<img alt="seloSegurança" src="Img/Sociais/selo1.png"/>
				<p class="nome" >Nome do Produto</p>
				<input type="number" placeholder="Qtd" value="1"/>
				<p class="preco"> R$ 199,99</p>
			</div>
			<div class="item">
				<img alt="seloSegurança" src="Img/Sociais/selo1.png"/>
				<p class="nome" >Nome do Produto</p>
				<input type="number" placeholder="Qtd" value="1"/>
				<p class="preco"> R$ 199,99</p>
			</div>
			<div class="item">
				<img alt="seloSegurança" src="Img/Sociais/selo1.png"/>
				<p class="nome" >Nome do Produto</p>
				<input type="number" placeholder="Qtd" value="1"/>
				<p class="preco"> R$ 199,99</p>
			</div>
			<div class="finalizar">
				<img alt="continuarComprando" src="Img/Sociais/car01.png"/>
				<img alt="finalizarCompra" src="Img/Sociais/car02.png"/>
			</div>
                    <?php  } ?>
                </section>
		
            <footer>
                <?php include 'footer.php' ?>
            </footer>
		
		
	</body>

</html>