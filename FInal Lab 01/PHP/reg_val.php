<?php
	$id="";
	$err_id="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$type="";
	$err_type="";
	$hasError=false;
	
	$username="root";
	$servername="localhost";
	$password="";
	$db_name="simle_reg";
	
	$conn = mysqli_connect($servername,$usename,$password,$db_name);
	
	if(!$conn){
		die("Connection Failed: " . mysqli_connect_error());
	}
	
	
	
	
	if(isset($_POST["register"])){
		if(empty($_POST["id"])){
			$err_id="ID Required";
			$hasError =true;	
		}
		else if(is_numeric($_POST["id"])){
			$id = $_POST["uname"];
		}
		else{
			$err_id = "Enter Number";
			$hasError =true;
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
			$pass=md5($pass);
		}
		if(empty ($_POST["type"])){
			$err_type="Type Required";
			$hasError = true;
		}
		else{
			$type=htmlspecialchars($_POST["type"]);
		}
		
		if(!$hasError){
			mysqli_query($conn, "INSERT INTO table1 VALUES($id,$uname,$pass,$type)"); 	
		}
	}
	$query = "SELECT * FROM table1";
	$results = mysqli_query($conn,$query);
	
	if(mysqli_num_rows($results)>0){
		echo "<table border = '1' style = 'border-collapse:collapse;'>";
		echo "<tr>";
		echo "<th> ID</td>";
		echo "<th> Username</td>";
		echo "<th> Password</td>";
		echo "<th> Type</td>";
		echo "</tr>";
		
		while($row = mysqli_fetch_assoc($results)){
			echo "<tr>";
				echo "<td>".$row["ID"]."</td>";
				echo "<td>".$row["Username"]."</td>";
				echo "<td>".$row["Password"]."</td>";
				echo "<td>".$row["Type"]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
	
?>