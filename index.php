<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>GREEN TeleMed Limited</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
	
	<link rel="icon" type="image/x-icon" href="pages/images/favicon.ico" />

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="pages/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="pages/css/main.css">
	<link rel="stylesheet" href="pages/css/flaticon.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="pages/css/font-awesome.min.css">
    
    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="pages/css/normalize.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="pages/css/templatemo-style.css">
    <script src="pages/js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="pages/js/1.11.2.js"></script>		

	
	<script> $(document).ready(function(){ folderpathacces(); }); </script>
	
	
	<link href="pages/js/news/vscroller.css" rel="stylesheet" type="text/css" />

	
	<!-- Slider Section -->
	<link href="pages/js/slider/style.css" rel="stylesheet" type="text/css" />
	<script src="pages/js/slider/jquery.slidizle.js" type="text/javascript"></script>
	
			<script>
				jQuery(function($) {
					$('[data-slidizle]').slidizle();
					var $slider = $('#progressbar-slider');
					var $progressbar = $slider.find('.slider-progressbar');
						api = $slider.data('slidizle_api');
					$slider.bind('slidizle.change', function(e, api) {
						console.log('change');
						$progressbar.stop().css('width', 0);
					});
					$slider.bind('slidizle.pause', function(e, api) {
						$progressbar.stop();
						console.log('timer pause', api.getCurrentTimeout(), api.getTotalTimeout(), api.getRemainingTimeout());
					});
					$slider.bind('slidizle.play slidizle.resume slidizle.change', function(e, api) {
						console.log('timer start', api.getCurrentTimeout(), api.getTotalTimeout(), api.getRemainingTimeout());

						if (api.isHover()) return;

						$progressbar.animate({
							width : '100%'
						}, api.getRemainingTimeout());
					});

				});
			</script>

</head>
<body>

	<img class="iso" src="pages/images/iso.png" alt="ISO" style="right:50px !important" />
	
	<div class="popup_bg popup1" fields="popup1">
					<div class="popup_content">
						<div class="contents" style="text-align:center; overflow-y:auto"><img src="pages/images/cer1.png" alt="Certificate" />
							<img src="pages/images/cer2.png" alt="Certificate" />
						</div>
						<div class="closepop"><i class="fa fa-arrows-alt"></i></div>
					</div>
				</div>
	
	<div class="test_align">
		
		<div class="news-wrapper" id="vscroller"> </div>
		
	</div>

	
	<!-- Logo Tag Start -->
	<section class="logo">
		<img src="pages/images/logo/green_logo_top.png" alt="Green TeleMED" />
		<img style="margin-left: -16px;" src="pages/images/logo/green_logo_bottom.png" alt="Green TeleMED" />
	</section>
	<!-- Logo Tag End -->
	
	<?php include('header.php') ?>
	
	<?php include('social.php') ?>
	
	<!-- Container Tag Start -->
	<section>
	
		<!-- Slider Tag Start -->
		<section>
			<!-- progressbar -->
		<section id="progressbar-slider" class="sample slider--animated" data-slidizle data-slidizle-loop="true" data-slidizle-timeout="1500" data-slidizle-pause-on-hover="true">

			<ul class="slider-content" data-slidizle-content>
				<li data-slidizle-slide-id="slide4" class="slider-item" >
					<div style="background:linear-gradient(#c8d1e2, #fff); height:100%;">
					<div class="animation" >
						<div class="circleed">
							<div class="circular"></div>
							<div class="circular2"></div>
							<!--<div class="imgg">
								<img class="loop_ani" src="pages/images/world.png" alt="" />
								<img class="loop_ani_anti" src="pages/images/world2.png" alt="" />
							</div>-->
						</div>
						<img class="slidebg" src="pages/images/topp.png" alt="" />
						<img class="tablet" src="pages/images/tablet.png" alt="" />
					</div>
					</div>
				</li>
				<li data-slidizle-slide-id="slide6" class="slider-item" > <img src="new/human_body.png" alt="human_body" /> </li>
				<li data-slidizle-slide-id="slide7" class="slider-item" > <img src="new/tel.png" alt="telemed" /> </li>
				<li data-slidizle-slide-id="slide2" class="slider-item" ><img src="new/slider3.jpg" alt="" /></li>
				<!--<li data-slidizle-slide-id="slide3" class="slider-item" ><img src="pages/js/slider/img/new/slider4.png" alt="" /></li>
				<li data-slidizle-slide-id="slide4" class="slider-item" ><img src="pages/js/slider/img/new/slider5.jpg" alt="" /></li>
				<li data-slidizle-slide-id="slide5" class="slider-item" ><img src="new/slider1.jpg" alt="" /></li>-->
				<li data-slidizle-slide-id="slide8" class="slider-item" ><img src="new/rural_health.png" alt="Rural" /></li>
				<li data-slidizle-slide-id="slide9" class="slider-item" ><img src="new/medi.png" alt="Medi" /></li>

			</ul>

			<section class="next_prev_bar">
				<!--<div class="slider-next" data-slidizle-next><i class="fa fa-arrow-right"></i></div>
				<div class="slider-previous" data-slidizle-previous><i class="fa fa-arrow-left"></i></div>-->
				<div class="slider-next" data-slidizle-next><img src="pages/js/slider/img/next.png" alt="Next" /></div>
				<div class="slider-previous" data-slidizle-previous><img src="pages/js/slider/img/prev.png" alt="Previous" /></div>
			</section>
			<div class="slider-progressbar"></div>

		</section>
		</section>
		
		<section class="blockslider"></section>
		
		<!-- Slider Tag End -->
		
		<!-- Blocks Start -->
		<section class="indexfooter">
		
			<!-- 1 -->
			<a href="forte_biomedical.php"><div class="block">
				<img src="pages/images/instru.png" alt="instru" style="width: 85px;" />
				<h2> Biomedical Engineering </h2>
			</div></a>
			
			<!-- 2 -->
			<a href="forte_equipments.php"><div class="block">
				<img src="pages/images/md.png" alt="md" style="width: 85px;" />
				<h2> Medical Instrumentation </h2>
			</div></a>
			
			<!-- 3 -->
			<a href="forte_pharamaceutical.php"><div class="block">
				<img src="pages/images/phar.png" alt="phar" style="width: 85px;" />
				<h2> Pharmaceutical </h2>
			</div></a>
			
			<!-- 4 -->
			<a href="forte_telemedicine.php"><div class="block">
				<img src="pages/images/tel.png" alt="tel" style="width: 85px;" />
				<h2> TeleMedicine </h2>
			</div></a>

			<!-- 5 -->
			<a href="forte_rural_healthcare.php"><div class="block">
				<img src="pages/images/rural.png" alt="rural" style="width: 85px;" />
				<h2> Rural Healthcare Empowerment </h2>
			</div></a>
						
			<!-- 6 -->
			<a href="forte_informatics.php"><div class="block">
				<img src="pages/images/bi.png" alt="bi" style="width: 85px;" />
				<h2> Healthcare Informatics </h2>
			</div></a>
			
		</section>
		<!-- Blocks End -->
	
	</section>
	<!-- Container Tag End -->
	
	<!-- Powered By Tag Start -->
	<section class="footer_power" onmouseover="contact_details();" onmouseout="contact_details_out();">
		<img src="pages/images/logo/power.png" alt="Green TeleMED" />
	</section>
	<!-- Powered By Tag End -->

</body>



    <script src="pages/js/vendor/jquery-1.10.1.min.js"></script>
    <script src="pages/js/bootstrap.min.js"></script>
    <script src="pages/js/plugins.js"></script>
    <!--<script src="pages/js/main.js"></script>  -->
	


	
<script>

$(document).ready(function(){
	
//	folderpathacces();
	
	var winheight = $(window).height();
	
	$('.sample').css('height',winheight);
	
	var navhet = $('#slider, #slider div.sliderInner').height();
	var navwdt = $('#slider, #slider div.sliderInner').width();
	$('.navBulletsWrapper').addClass('sadiq');
	$('.navBulletsWrapper').css({
									'top':navhet,
									'right':navwdt
	});
	

});


</script>

<script src="pages/js/custom.js"></script>
	
	<script src="pages/js/news/jquery-1.4.4.min.js" type="text/javascript"></script>
	<script src="pages/js/news/vscroller.js" type="text/javascript"></script>
	
	<script type="text/javascript">
       $(document).ready(function () {
           $('#vscroller').vscroller({ newsfeed: 'news.xml' });
		   $('.news .history').remove();	
       });
	   
	/* Popup Resize Start */
	
	var con_ht = $(window).height()-100;
	var con_wd = $(window).width()-100;
	
	var popup_con_ht = $('.popup_content').height();	
	$('.popup_content').css({'margin-top':'50px', 'width':con_wd, 'height':con_ht });
   
	$(window).on('resize',function(){
		var con_ht2 = $(window).height()-100;
		var con_wd2 = $(window).width()-100;
		var popup_con_ht2 = $('.popup_content').height();
		$('.popup_content').css({'margin-top':'50px', 'width':con_wd2, 'height':con_ht2	});
	});
	/* Popup Resize End */
	
	/* Popup Active Start */
	
	$('.iso').click(function(){
		$('.popup_bg').addClass('open_popup');
	});

	$('.closepop').click(function(){
		$('.popup_bg').removeClass('open_popup');
	});
	
	/* Popup Active End */
	   
    </script>

</html>