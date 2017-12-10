$(document).ready(function(){

		var uname=$("#uname").text();
		
		//check required options
		if(uname != ''){
			$("#signup").hide();
			$("#login").hide();
			$("#logout").show();
			$("#account").show();
		}

		//get current date
		var d = new Date();
		var month = d.getMonth()+1;
		var day = d.getDate();

		var output = (month<10 ? '0' : '') + month + '-' +(day<10 ? '0' : '') + day;		

		$("#date").text(output);

		//get clicked track

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



});