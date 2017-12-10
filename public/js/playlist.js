$(document).ready(function(){

		

		$('.playtrack').click(function(e) {
			
			var url = "../trackplay/" + $(this).attr('sectionId');
			//alert(url);
			$(location).attr('href',url);
		
		});

});