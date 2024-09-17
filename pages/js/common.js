var path = 'portfolio_text/';
var page_titles = 'page_titles/';

	//Portfolio Section Start	
	$.get(''+page_titles+'port_title.txt', function(data) {$('#port_title').html(data);});
	$.get(''+page_titles+'product_title.txt', function(data) {$('#product_title').html(data);});
	$.get(''+page_titles+'technology_title.txt', function(data) {$('#technology_title').html(data);});
	$.get(''+page_titles+'reach_title.txt', function(data) {$('#reach_title').html(data);});
	//Portfolio Section End
	
	//Portfolio Section Start
	$.get(''+path+'healthcare.txt', function(data) {$('#healthcare_text').html(data);});
	$.get(''+path+'effective.txt', function(data) {$('#healthcare_text2').html(data);});
	$.get(''+path+'instru.txt', function(data) {$('#healthcare_text3').html(data);});
	$.get(''+path+'domain.txt', function(data) {$('#healthcare_text4').html(data);});
	$.get(''+path+'point.txt', function(data) {$('#healthcare_text5').html(data);});
	$.get(''+path+'medical.txt', function(data) {$('#healthcare_text6').html(data);});
	//Portfolio Section End
	
	
	