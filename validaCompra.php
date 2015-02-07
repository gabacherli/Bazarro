 <?php

    include 'conecta_mysql.php'; 
    $valor = $_GET['valor'];
    $nome = $_GET['nome'];
    $desc = $_GET['desc'];
    $codpro = $_GET['codpro'];
    
    $sql = "INSERT INTO PagSeguroProdutos ( VendedorEmail, TransaçaoID, Ordedm, ProdID, ProdDescricao, ProdValor, ProdQuantidade, ProdFrete) VALUES ('thomazpicelli@gmail.com','1','1','$codpro','$desc','$valor','1','0')";
    $resultado = mysqli_query ($conexao, $sql);

    if($resultado == TRUE){
        include 'pagSeguroRetornoFuncoes.php';
    }
?>
