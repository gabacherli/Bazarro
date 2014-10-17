<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title> Bazarro.com </title>
		<meta charset="utf-8"/>
		<meta name="description" content="????????????????????????????????????">
		<meta name="keywords"    content="????????????????????????????????????">
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
					<a href="acesso.php"><p>Acesse sua conta</p></a>
				</div>
				
			</div>
			
			<nav>
				<ul>
					<li class="home"><a href="lista.php">XXXXXX</a></li>
					<li><a href="lista.php">XXXXXX</a></li>
					<li><a href="lista.php">XXXXXX</a></li>
					<li><a href="lista.php">XXXXXX</a></li>
					<li><a href="lista.php">XXXXXX</a></li>
					<li><a href="lista.php">XXXXXX</a></li>
					<li><a href="lista.php">XXXXXX</a></li>
					<li><a href="lista.php">XXXXXX</a></li>
				</ul>	
			</nav>	
		</header>
		
		<section>
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
			<div class="fb-comments" data-href="http://facebook.com/example.com/comments" data-numposts="5" data-colorscheme="light"></div>
		</section>
		
		<footer>
			<div class="foot">
				<ul>
					<li> <a href="lista.php">XXXXXXX</a></li>
					<li> <a href="lista.php">XXXXXXX</a></li>
					<li> <a href="lista.php">XXXXXXX</a></li>
					<li> <a href="lista.php">XXXXXXX</a></li>
					<li> <a href="lista.php">XXXXXXX</a></li>
					<li> <a href="lista.php">XXXXXXX</a></li>
					<li> <a href="lista.php">XXXXXXX</a></li>
				</ul>
				<div class="selocima">
					<p>Formas de Pagamento:</p>
					<img alt="seloSegurança" src="Img/Sociais/seloPAG.png" style="width: 220px; height: 55px;"/>
				</div>
				<div class="selobaixo">	
					
					<img alt="seloProfissional" src="Img/Sociais/seloP.png"style="width: 80px; height: 80px;"/>
					<img alt="seloSegurança" src="Img/Sociais/selo1.png" style="width: 80px; height: 80px;"/>
					<img alt="seloSegurança" src="Img/Sociais/seloM.png" style="width: 70px; height: 70px; border-radius: 2px;"/>
				</div>
			</div>
			
			<div class="copy">
				<small>Copyright &copy;  Gabriel Coelho - Rhenan Cocev - Thomaz Picelli 2014</small>
			</div>
		</footer>
		
		
	</body>

</html>