$(document).ready(function(){

		var uname=$("#uname").text();
		
		//check required options
		if(uname != ''){
			$("#signup").hide();
			$("#login").hide();
			$("#logout").show();
			$("#account").show();
		}

});