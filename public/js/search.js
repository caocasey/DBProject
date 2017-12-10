$(document).ready(function(){

		var keyword=$("#keyword").text();

		//if there is no input keyword 
		$("#artist").show();
		$("#track").show();
		$("#pl").show();
		$("#album").show();

		//check required options
			//check required options
		/*$('#search').click(function() {
			if(keyword != ''){
				$("#searchResult").show();
				$("#artist").show();
				$("#track").show();
				$("#pl").show();
				$("#album").show();
				alert("haha");
			}
		
		});*/
		
		$('.searchartist').click(function(e) {
			
			var url = "artist/info/" + $(this).attr('sectionId');
			//alert(url);
			$(location).attr('href',url);
		
		});


});