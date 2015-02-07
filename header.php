<div class="top">
    <a class="share-icon share-facebook" target="_blank" href="https://www.facebook.com/pages/Bazarro/620119341440567" title="Share on Facebook"></a>
    <a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://jssor.com&text=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Twitter"></a>
    <a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://jssor.com" title="Share on Google Plus"></a>
    <a class="share-icon share-linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http://jssor.com" title="Share on LinkedIn"></a>
    <a class="share-icon share-stumbleupon" target="_blank" href="http://www.stumbleupon.com/submit?url=http://jssor.com&title=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on StumbleUpon"></a>
    <a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://jssor.com&media=http://jssor.com/img/site/jssor.slider.jpg&description=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Pinterst"></a>
    <a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive%20http://jssor.com" title="Share by Email"></a>
</div>
			
<div class="x">
				
    <a href="index.php"><img class="LOGO" alt="LOGO" src="Img/Sociais/LOGO.png"/></a>
				
    <form>
        <input type="search" placeholder=" S E A R C H"/>		
	<input type="image" src="Img/Sociais/pesquisa.jpg" alt="Submit Form"/>
    </form>	
		
    <div class="y">
        <?php
            $salvar = false;
            if(isset($_POST['salvar'])){
                $salvar = true;
            }
			
            $user = $_POST['email'];
            $password = $_POST['senha'];
                   
            session_start();
            $_SESSION['usuario'] = $user;
				
            if($salvar){
		setcookie("email", $user, time()+(60*60*24*7));
		setcookie("senha", $password, time()+(60*60*24*7));
            } 
            else{
		setcookie("email", "", time()+(60*60*24*7));
		setcookie("senha", "", time()+(60*60*24*7));
            }
            
            $sql = "SELECT * FROM usuario WHERE email = '$user'";
            $resp = mysqli_query ($conexao , $sql);$registro = mysqli_fetch_array($resp);
            $logado  = $registro['nome'];
            echo "<p> Olá $logado!</p>";
	?>
            
        <a href="carrinho.php">
            <img src="Img/Sociais/carrinho.png" alt="carrinho"/>
            <p>Carrinho</p>
        </a>
        <a href="index.php">
            <p style="color: red;">[LogOut]</p>
        </a>
    </div>
				
</div>
			
<nav>
    <ul>
        <li class="home"><a href="paginainicial.php">Página Inicial</a></li>
	<li><a method="GET" href="categoria.php?x=<?php echo '1'; ?>">Máscaras</a></li>
	<li><a method="GET" href="categoria.php?x=<?php echo '2'; ?>">Cozinha</a></li>
	<li><a method="GET" href="categoria.php?x=<?php echo '3'; ?>">Higiene</a></li>
	<li><a method="GET" href="categoria.php?x=<?php echo '4'; ?>">Pet</a></li>
    </ul>	
</nav>