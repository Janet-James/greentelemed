function folderpathacces(){

//Folder path for Product image show start

	var dir = "images/medical_equ";
	var dirslider = "pages/js/slider/img";
	
	var fileextension = ".png";
	var folderpath = "/GTL3";
	var folderpage = "/pages";
	
	//Porduct Images ajax
	$.ajax({
		url: dir,
		success: function (data) {
			$(data).find("a:contains(" + fileextension + ")").each(function () {
				var filename = this.href.replace(window.location.host, "").replace("http://", "").replace(folderpath,"").replace(folderpage,"");
				var filenamespan = filename.replace("/", "").replace(".png", "").replace("_"," ");		
				$(".product_images #mCSB_2_container").append("<div class='pro_img_fixed'><span>"+ filenamespan +"</span><img  src='" + dir + filename + "'></div>");
			});
		}
	});
};

$(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
	
	
	var ut = window.location.href;
	var ul = ut.substring(ut.lastIndexOf('/')+1).replace('.php',"");
	var sub_ul = ut.indexOf('forte');
	//alert('Substring : ', sub_ul);
	if(ul){
		$('.inner_nav li a').removeClass('active');
		$('.inner_nav li a[href="'+ul+'.php"]').addClass('active');
	}

});


function contact_details(){ 
	$('.social').css({'right': '0px',	'opacity': '1',	'transition':'0.5s'	});
}

function contact_details_out(){$('.social').css({'right': '-270px','opacity': '0','transition':'0.6s'});
	
}

$(document).ready(function(){
	
	var beta = "";
	
	beta+="<div class='betaversion'>";
	beta+="<h1>Beta</h1>";
	beta+="<p> Version 0.5 </p>";
	beta+="</div>";
	
	$('body').append(beta);
	
	var content = "";
	
	content+="<div class='ant'>";
	content+="<img src='pages/js/news/prev.png' alt='' />";
	content+="</div>";
	
	$('.footer_power').append(content);
	
	var india = window.location.href.indexOf(".com.in");
	var australia = window.location.href.indexOf(".com.au");
	var belgium = window.location.href.indexOf(".com.be");
	var png = window.location.href.indexOf(".com.pg");
	var usa = window.location.href.indexOf(".com.us");
	
	if(india > -1) { $('.allcontact').css('display','none');	$('#india').css('display','block');$('#india2').css('display','block');
    }else if(australia > -1){ $('.allcontact').css('display','none'); $('#australia').css('display','block');$('#australia2').css('display','block');
	}else if(belgium > -1){ $('.allcontact').css('display','none'); $('#belgium').css('display','block');$('#belgium2').css('display','block');
	}else if(usa > -1){ $('.allcontact').css('display','none');	$('#usa').css('display','block');$('#usa2').css('display','block');
	}else if(png > -1){	$('.allcontact').css('display','none');	$('#png').css('display','block');$('#png2').css('display','block');
	}
	
	
	
	/* Popup Active Start */
	
	$('.read_more').click(function(){
	var tt = $(this).attr('field');
	if(tt){
		$('.popup_bg').removeClass('open_popup');
		$('.popup_bg[fields='+tt+']').addClass('open_popup');
	}
	});

	$('.closepop').click(function(){
		$('.popup_bg').removeClass('open_popup');
	});
	
	/* Popup Active End */
	
});



