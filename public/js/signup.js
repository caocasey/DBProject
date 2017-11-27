$(document).ready(function(){

	//check all required information not NULL
    $('#signup').click(function() {

		var uname=$("#uname").val();
		var urname=$("#urname").val(); 
		var password1=$("#password1").val(); 
		var password2=$("#password2").val(); 

		//check required options
		if(uname=='' || urname=='' || password1=='' || password2==''){
			alert("Please input all the information with *");
			return;
		}

		if(password1 != password2){
			alert("Passwords are not the same, please verify your password again");
			return;
		}
	});

});