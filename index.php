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
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<header>
                    <?php include 'header.php';
                          include 'conecta_mysql.php'; ?>
		</header>
		
                    <div class="jq">
                        <script type="text/javascript" src="script/jquery-1.9.1.min.js"></script>
			<script type="text/javascript" src="script/jssor.core.js"></script>
			<script type="text/javascript" src="script/jssor.utils.js"></script>
			<script type="text/javascript" src="script/jssor.slider.js"></script>
			<script>

				jQuery(document).ready(function ($) {

					var _SlideshowTransitions = [
					//Fade
					{ $Duration: 1200, $Opacity: 2 }
					];

					var options = {
						$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
						$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
						$AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
						$PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

						$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
						$SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
						$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
						//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
						//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
						$SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
						$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
						$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
						$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
						$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
						$DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

						$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
							$Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
							$Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
							$TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
							$ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
						},

						$BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
							$Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
							$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
							$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
							$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
							$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
							$SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
							$SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
							$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
						},

						$ArrowNavigatorOptions: {
							$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
							$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
							$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
						}
					};
					var jssor_slider1 = new $JssorSlider$("slider1_container", options);

					//responsive code begin
					//you can remove responsive code if you don't want the slider scales while window resizes
					function ScaleSlider() {
						var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
						if (parentWidth)
							jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 950));
						else
							window.setTimeout(ScaleSlider, 30);
					}

					ScaleSlider();

					if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
						$(window).bind('resize', ScaleSlider);
					}

					//if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
					//    $(window).bind("orientationchange", ScaleSlider);
					//}
				});
			</script>
			<!-- Jssor Slider Begin -->
			<!-- You can move inline styles to css file or css block. -->
			<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 950px; height: 400px; overflow: hidden; ">
				<!-- Slides Container -->
				<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 950px; height: 400px; overflow: hidden;">
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
						<img u="image" src="Img/tmp/05.jpg" />
					</div>
					<div>
						<img u="image" src="Img/tmp/06.jpg" />
					</div>
					<div>
						<img u="image" src="Img/tmp/07.jpg" />
					</div>
					<div>
						<img u="image" src="Img/tmp/08.jpg" />
					</div>
					<div>
						<img u="image" src="Img/tmp/09.jpg" />
					</div>
					<div>
						<img u="image" src="Img/tmp/10.jpg" />
					</div>
					<div>
						<img u="image" src="Img/tmp/11.jpg" />
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
			<p>filtro</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</aside>
		
		<section>
                   <?php for($i=1; $i<=15; $i++){ ?>
                    
                        <a class='item' href='produto.php'>
                            <img alt='produto <?php echo $i ?>' src='<?php "SELECT imagem FROM produto WHERE(codpro='$i')" ?>'/>
                            <p class='nome'><?php "SELECT nome FROM produto WHERE(codpro='$i')" ?></p>
                            <p class='preco'><?php "SELECT valor FROM produto WHERE(codpro='$i')" ?></P>
                            <iframe src='http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:200px; height:70px;' allowtransparency='true'></iframe>
                        </a>
                    <?php } ?>
                    
		</section>
                	
		<footer>
                    <?php include 'footer.php' ?>
		</footer>
		
		
	</body>

</html>