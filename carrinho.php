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
                        $sql1 = "SELECT * FROM usuario WHERE email='$i'"; //coduso logado (session)
                            $resp = mysqli_query ($conexao , $sql1);$registro = mysqli_fetch_array($resp);
                            $codusu  = $registro['codusu'];
                        
                        $sql11 = "SELECT count(*) FROM carrinho WHERE coduso='$codusu'"; //saber a quantidade de produtos com o codusu deste usuario                           
                        
                        $sql2 = "SELECT * FROM carrinho WHERE coduso='$codusu'"; //coduso logado (session)
                            $resp = mysqli_query ($conexao , $sql2);$registro = mysqli_fetch_array($resp);
                            $prod  = $registro['codpro'];
                            $qtd  = $registro['qtd'];
                            $valor = $registro['valor'];
                        
                        $sql3 = "SELECT * FROM produto WHERE codpro='$prod'"; //coduso logado (session)
                            $resp = mysqli_query ($conexao , $sql3);$registro = mysqli_fetch_array($resp);
                                $foto = $registro['imagem'];
                                $nome = $registro['nome'];
                                $valor = $registro['valor'];
                                $facebook = $registro['facebook'];
                                $descricao = $registro['descricao'];
                            
                    
                      //  for($i=1; $i<=$sql11; $i++){
                    ?>
			<div class="item">
				<img alt="seloSegurança" src="<?php echo $foto;?>"/>
				<p class="nome" ><?php echo $nome;?></p>
				<input type="number" placeholder="Qtd" value="<?php $x ?>"/>
				<p class="preco">R$ <?php echo $x * $valor;?>,00</p>
			</div> 
			<div class="item">
                            <img alt="seloSegurança" src="Img/Produtos/Cozinha/spray_comestivel.jpg"/>
				<p class="nome" >Spray Comestivel</p>
				<input type="number" placeholder="Qtd" value="1"/>
				<p class="preco"> R$ 30,00</p>
			</div> 
			<div class="finalizar">
				<img alt="continuarComprando" src="Img/Sociais/car01.png"/>
				<img alt="finalizarCompra" src="Img/Sociais/car02.png"/>
			</div>
                    <?php // } ?> 
                </section>
		
            <footer>
                <?php include 'footer.php' ?>
            </footer>
	</body>
</html>