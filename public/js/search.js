$(document).ready(function(){

		var keyword=$("#keyword").text();

		//if there is no input keyword 
		$("#artist").hide();
		$("#track").hide();
		$("#pl").hide();
		$("#album").hide();

		//check required options
		if(keyword != ''){
			$("#searchResult").show();
			$("#artist").show();
			//$("#track").show();
			//$("#pl").show();
			//$("#album").show();
		}
		

});