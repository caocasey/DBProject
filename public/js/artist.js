$(document).ready(function(){
	$('.playtrack').click(function(e) {
			
			var url = "../../trackplay/" + $(this).attr('sectionId');
			//alert(url);
			$(location).attr('href',url);
		
	});
	$('.ratetrack').click(function(e) {
			
			var tid = $(this).attr('sectionId');
			var url = "../../rate/" + $(this).attr('sectionId');
			$.cookie("tid",tid);
			
			$(location).attr('href',url);
		
		});

});