<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>GREEN TeleMed Limited | Team</title>
    <meta name="description" content="">
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
		<h2>Team GREEN TeleMed</h2>
		<span>Discover the world of solution and services</span>
	</section>
	
	<!-- Container Tag Start -->
	<section class="gtl_container">
		
		<div class="col-lg-12 heightforscroll content-1">
			<!-- Who we are Start -->
			<div class="col-md-6">
				<h3 class="content_heading">Who we are</h3>
				<p>GREEN TeleMed, our specialized healthcare unit is powered by continual self improvement through providing a comprehensive set of integrated business services in a wide range of health care related- Instrumentation, Equipments, Pharmaceuticals, TeleMedicine, Bioinformatics, Integrative Systems Biology, Clinical Research Informatics, and Biomedical Research Information Technology expertise to government, industry and academic clients.</p>
				
				<p>More and more, the world is gearing towards a knowledge economy, towards an eventual integration of seamless systems that shape the way we live, work and play. So too in the way we access healthcare. </p>
				
				<img class="image-wrap fl clr" style="width:50%" src="pages/images/team/team.png" alt="quality-commitment" />
				
				<p>We envision a future where healthcare is truly personal, where everyone has an access to a superior customer and clinical experience, and wherein as a result, people live healthier lives. We contribute to that vision by helping our clients create meaningful and desirable healthcare brands, align their internal teams, engage with new and existing clients, and drive downstream revenue. </p>
				
				<p>Together, we change the outcomes.</p>

			</div>
			<!-- who we are End -->
			
			<!-- core values Start -->
			<div class="col-md-6" >
				
				<h3 class="content_heading">Core Values</h3>
				
				<img class="image-wrap fl clr" style="width:10%" src="pages/images/team/quality-commitment.png" alt="quality-commitment" />
				
				<h3 class="content_sub_heading">Commitment to Quality</h3>
				<p>We foster an environment that moves and inspires the best individuals to work with us in realising their fullest potential; to forge best in class niche solutions and a commitment to quality. </p>
				
				
				<img class="image-wrap fl clr" style="width:10%" src="pages/images/team/inclusiondiversity.jpg" alt="inclusiondiversity" />
				<h3 class="content_sub_heading">Responsibility to Diversity </h3>
				<p>We follow practices that engender pride in inclusivity. We encourage diversity of perspective and convergence in team engagement to serve our heterogeneous customer base.  </p>
				
				
				<img class="image-wrap fl clr" style="width:10%" src="pages/images/team/OB.png" alt="OB" />
				<h3 class="content_sub_heading">Winning through Teamwork </h3>
				<p>We work for the benefit of the organization in a cohesive team made of the brightest minds to bring out the best that we can, elevating the ordinary to an extraordinary throughput. </p>
				
				
				<img class="image-wrap fl clr" style="width:10%" src="pages/images/team/ethic.png" alt="ethic" />
				<h3 class="content_sub_heading">Ethical Best Practices </h3>
				<p>We value high uprightness and engage in ethical best practices across the board in our business relationships and promote a culture of integrity in our work ethos. </p>
				
			</div>
			<!-- core values End -->
			
		</div>
	
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