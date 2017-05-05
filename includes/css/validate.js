function change(obj){ 

obj.style.backgroundColor=(obj.style.backgroundColor==""?"":"") 

} 
function validate(form){

	var first=document.getElementsByName("first")[0].value;
	var last=document.getElementsByName("last")[0].value;
	var email=document.getElementsByName("email")[0].value;
	var pwd=document.getElementsByName("password1")[0].value;
	var pwdConfirm=document.getElementsByName("password2")[0].value;
	var privacy=document.getElementsByName("privacy")[0].checked;

		/*User validation*/
		if(first==""){
			document.getElementsByName("first")[0].style.backgroundColor="red";
			document.getElementsByName("first")[0].placeholder.color="white";
			document.getElementsByName("first")[0].placeholder="Empty First Name";
			return false;
		}
		re=/^[a-zA-Z]{3,15}$/;
		if(!re.test(first)){
			alert("Error: First name must contain 3 or more only letters");
			return false;
		}
		if(last==""){
			document.getElementsByName("last")[0].style.backgroundColor="red";
			document.getElementsByName("last")[0].placeholder.color="white";
			document.getElementsByName("last")[0].placeholder="Empty Last Name";
			return false;
		}
		if(!re.test(last)){
			alert("Error: Last name must contain 3 or more only letters");
			return false;
		}

		/* Email validation*/
		if(!validateEmail(email)){
			document.getElementsByName("email")[0].style.backgroundColor="red";
			document.getElementsByName("email")[0].placeholder.color="white";
			document.getElementsByName("email")[0].placeholder="Empty/invalid Email";
			return false;
		}
		/* password validation*/
		if(pwd==""|| pwdConfirm==""){
			alert("Empty password");
			document.getElementsByName("password1")[0].style.backgroundColor="red";
			return false;
		}
		if(pwd != "" && pwdConfirm!= "" && pwd == pwdConfirm){
			if(pwd.length < 6)
				{alert("Error: Password must be longer than 6 character");return false;}
			if(pwd==first || pwd==last || pwd==first+last)
				{alert("Error: Pwd same username");return false;}
			re=/[0-9]/;
			if(!re.test(pwd))
				{alert("Pwd must contain number");return false;}
			re=/[a-z]/;
			if(!re.test(pwd))
				{alert("Pwd must contain a-z");return false;}
			re=/[A-Z]/;
			if(!re.test(pwd))
				{alert("Pwd must contain A-Z");return false;}
		}
		else{
			alert(" password not the same");
			return false;
		}

		/* policy check box validation */
		if(privacy==false){
			alert("must agreed to privacy policy");
			return false;
		}
}
function validateEmail(email) {
    var c=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]{2,}$/;
    return c.test(email);
}