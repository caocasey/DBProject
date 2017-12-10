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

		$('.playtrack').click(function(e) {
			
			var url = "trackplay/" + $(this).attr('sectionId');
			//alert(url);
			$(location).attr('href',url);
		
		});

		$('.playalbum').click(function(e) {
			
			var url = "albumplay/" + $(this).attr('sectionId');
			//alert(url);
			$(location).attr('href',url);
		
		});

		$('.playplaylist').click(function(e) {
			
			var url = "playlistplay/" + $(this).attr('sectionId');
			//alert(url);
			$(location).attr('href',url);
		
		});
		$('.detailplaylist').click(function(e) {
			
			var url = "playlist/" + $(this).attr('sectionId');
			//alert(url);
			$(location).attr('href',url);
		
		});

		$('.ratetrack').click(function(e) {
			
			var tid = $(this).attr('sectionId');
			var url = "rate/" + $(this).attr('sectionId');
			$.cookie("tid",tid);
			
			$(location).attr('href',url);
		
		});
		$('.addtrack').click(function(e) {
			
			var url = "addtoplaylist/" + $(this).attr('sectionId');
			//alert(url);
			$(location).attr('href',url);
		
		});


});