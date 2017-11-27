$(document).ready(function(){
	//check all required information not NULL
    $('#login').click(function() {

		var uname=$("#uname").val();
		var password=$("#password").val(); 
		//check required options
		if(uname=='' || password==''){
			alert("Please input all the information with *");
			return;
		}

		
	});

});