$(document).ready(function(){

	//check all required information not NULL
    $('#signup').click(function() {

		var uname=$("#uname").val();
		var urname=$("#urname").val(); 
		var password1=$("#password1").val(); 
		var password2=$("#password2").val(); 
		var uemail=$("#uemail").val(); 
		var country=$("#country").val(); 
		var state=$("#state").val(); 
		var city=$("#city").val(); 
		//check required options

		if(uname=='' || urname=='' || password1=='' || password2=='' || uemail=='' || country==''  || state=='' || city==''){
			alert("Please input all the information with *");
			return;
		}

		if(password1 != password2){
			alert("Passwords are not the same, please verify your password again");
			return;
		}
	});

});