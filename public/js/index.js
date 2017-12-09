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

});