$(document).ready(function(){
	//check all required information not NULL
    $('#login').click(function() {

		var uname=$("#username").val();
		var password=$("#password").val(); 
		//check required options
		if(uname=='' || password==''){
			alert("Please input all the information, thank you");
			return;
		}

		
	});

});