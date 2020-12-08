function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var e_name = getElement("name");
	var e_uname = getElement("uname");
	var e_pass = getElement("pass");
	var e_email = getElement("email");
	var e_phone = getElement("phone");
	
	var err_name = getElement("err_name");
	var err_uname = getElement("err_name");
	var err_pass = getElement("err_pass");
	var err_email = getElement("err_email");
	var err_phone = getElement("err_phone");
	
	
	if(e_name.value == ""){
		hasErr= true;
		err_name.innerHTML = "Username Required";
		e_name.focus();
		return !hasErr;
	}
	if(e_uname.value == ""){
		hasErr= true;
		err_uname.innerHTML = "Username Required";
		e_uname.focus();
		return !hasErr;
	}else{
			e_uname = htmlspecialchars($_POST["uname"]);
		}
	if(md5(e_pass).value == ""){
		hasErr= true;
		err_pass.innerHTML = "Password Required";
		e_pass.focus();
		return !hasErr;
	}
	if(e_email.value == ""){
		hasErr= true;
		err_email.innerHTML = "Email Required";
		e_email.focus();
		return !hasErr;
	}
	if(e_phone.value == ""){
		hasErr= true;
		err_phone.innerHTML = "Email Required";
		e_phone.focus();
		return !hasErr;
	}
	
	return !hasErr;

}
function refresh(){
	var err_name = getElement("err_name");
	var err_uname = getElement("err_name");
	var err_pass = getElement("err_pass");
	var err_email = getElement("err_email");
	var err_phone = getElement("err_phone");
	
	
	err_name.innerHTML = "";
	err_uname.innerHTML = "";
	err_pass.innerHTML = "";
	err_email.innerHTML = "";
	err_phone.innerHTML = "";
	
	
}