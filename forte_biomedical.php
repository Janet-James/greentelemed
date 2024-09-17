<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>GREEN TeleMed Limited | Forte - Biomedical Engineering</title>
    <meta name="description" content="Application Domain::Biomedical Informatics, Systems Biology, Biomedical IT, Database development">
    <meta name="viewport" content="width=device-width">
	
	<!--<link rel="icon" type="image/x-icon" href="images/favicon.ico" />-->

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="pages/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="pages/css/main.css">
	<link rel="stylesheet" href="pages/css/flaticon.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="pages/css/font-awesome.min.css">
	
	<link href="pages/js/scroller/jquery.mCustomScrollbar.css" rel="stylesheet" />
    
    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="pages/css/normalize.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="pages/css/templatemo-style.css">
    <script src="pages/js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="pages/js/1.11.2.js"></script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	
	<script src="pages/js/common.js"></script>

</head>
<body>
	
	<img class="iso" src="pages/images/iso.png" alt="ISO" />
	
	<!-- Logo Tag Start -->
	<section class="logo">
		<img src="pages/images/logo/green_logo_top.png" alt="Green TeleMED" />
		<img style="margin-left: -16px;" src="pages/images/logo/green_logo_bottom.png" alt="Green TeleMED" />
	</section>
	<!-- Logo Tag End -->
	
	<?php include('header.php') ?>
	
	<?php include('social.php') ?>
	
	<section class="page_head" id="product_title">
		<h2 class="move_head">Forte</h2>
		<h2>Biomedical Engineering</h2>
		<span>Discover the world of solution and services</span>
	</section>
	
	<!-- Container Tag Start -->
	<section class="gtl_container">

		
		<div class="col-lg-12 heightforscroll content-1">
			
			<div class="col-lg-6">
				<p>Bio medical engineering is an exciting cutting edge field that combines complex engineering principles with the most intricate, profound system of all: the human body.</p>
				<p>Integration of various fields of mechanical engineering, electrical engineering, materials science, chemistry, mathematics, computer science and engineering into human biology merge seamlessly to improve human health.</p>
				<p>Professionals in emerging disciplines blur the lines of science, data and technology to bring to eventual fruition the idea of personalized medicine through increasingly sophisticated mechanisms.</p>
				
				<img class="image-wrap fr" style="width:65%" src="pages/images/equ2.png" alt="diagnostic" />	
				
				<p>GREEN TeleMed has operationalized a technical educational system by offering Training in Biomedical Applications. We provide a comprehensive, standardized focused program to sustain a ready availability of skilled technical workforce who can attend to timely repair, service & maintenance of hospital equipment.</p>
				<p>GREEN TeleMed Service Engineers are engaged in basic service, installation and maintenance procedures of medical equipment that comply with existing regulations and quality standards. </p>
				
				<p>On site, they evaluate the safety, efficiency, and effectiveness of biomedical equipment and impart training to health care providers and other hospital personnel. They are responsible for the safe and effective operation of equipment ranging from large CT scanners to micro devices such as cardiac pacemakers. </p>
				
				<p>The GREEN TeleMed service engineers are adept in details and maintenance of different categories of Equipment:</p>
				
				<ol>
					<li>Critical Care / Life Support Systems</li>
					<li>Operation Theatre Equipment</li>
					<li>Diagnostic Equipment</li>
					<li>Therapeutic and Other Equipment</li>
				</ol>

			</div>
			

			<div class="col-lg-6">
			
				<img class="image-wrap fr" style="width:65%" src="pages/images/equ3.png" alt="diagnostic" />	
			
				<p>At an advanced level GREEN TeleMed deploys technology consultants for Planning, budgeting and designing interfaces, training end-users in medical technology, and evaluating new devices for acquisition. GREEN TeleMed Service Engineers engage with hospital staff to deal with technical queries addressing onsite concerns promptly.</p>
				
				<p>Green TeleMed Biomedical engineers liaise with health care providers in a wide range of capacities armed with knowledge from varied technical sources. It has a robust system which can address any foreseeable eventualities, flexible to handle unforeseen situations and open to fast changing Customer needs. </p>
				
				<p>GREEN TeleMed provides technical support to customers through meaningful resolutions of problems. On-site calls are expedited promptly.</p>
				
				<p>A rigorous guide for Service Engineers on operational protocols is in place to achieve the goals set by Green TeleMed towards customer satisfaction and fulfilling the service vision of the Company.</p>
			</div>
			
		</div>
	
	</section>
	<!-- Container Tag End -->
	
	<!-- Powered By Tag Start -->
	<section class="footer_power" onmouseover="contact_details();" onmouseout="contact_details_out();">
		<img src="pages/images/logo/power.png" alt="GREEN TeleMed" />
	</section>

	<!-- Powered By Tag End -->

</body>
    <script src="pages/js/vendor/jquery-1.10.1.min.js"></script>
    <script src="pages/js/bootstrap.min.js"></script>
    <script src="pages/js/plugins.js"></script>
	
	<!-- Scroll Bar tag start -->

        <!-- Scroll Bar tag end -->
    <!--<script src="pages/js/main.js"></script>  -->

	<script src="pages/js/scroller/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<script>
		(function($){
			$(window).load(function(){
				//scrollder container start
				
				$(".content-1").mCustomScrollbar({
					theme:"minimal"
				});
	//scrollder container end
				
			});
		})(jQuery);
	</script>
	<script src="pages/js/custom.js"></script>
	
<script>


$(document).ready(function(){
	
	var winheight = $(window).height()-200;
	$('.sample').css('height',winheight);
	
	var gtl_con_het = $(window).height()-180;
	$('.gtl_container').css('height',gtl_con_het);
	
	$('.heightforscroll').css('height',gtl_con_het);
	
	var winwid = $(window).width();
	var winwidno = 768;
	
	if(winwid > winwidno)
	{
		$('body').removeClass('heightforscroll');
	}else{  }
	
	
	folderpathacces();
	
	
});


</script>

</html>