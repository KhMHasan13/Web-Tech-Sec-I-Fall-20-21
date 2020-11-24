<?php
	$username="";
	$password="";
	$err_username="";
	$err_password="";
	
	$hasError=false;
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 8){
			$err_password="*Password must be 8 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
		
		if(!$hasError){
			echo $username ." ".$password;	
		}
	}
?>