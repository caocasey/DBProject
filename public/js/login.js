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

     $('#forgot').click(function() {

		var uemail=$("#femail").val();
		
		//check required options
		if(uemail==''){
			alert("Please input your email address, thank you");
			return;
		}

		
	});

     $('#createpl').click(function() {

		var plname=$("#plname").val();
		
		//check required options
		if(plname==''){
			alert("Please input your playlist name, thank you");
			return;
		}

		
	});
	
});