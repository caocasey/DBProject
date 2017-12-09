$(document).ready(function(){

		var keyword=$("#keyword").text();

		//if there is no input keyword 
		$("#artist").show();
		$("#track").show();
		$("#pl").show();
		$("#album").show();

		//check required options
		if(keyword != ''){
			$("#searchResult").show();
			$("#artist").show();
			//$("#track").show();
			//$("#pl").show();
			//$("#album").show();
		}
		

});