<?php
	$name = "";
	$uname = "";
	$pass = "";
	$confpass = "";
	$email = "";
	$phone = "";
	$address = "";
	$bdate = "";
	$gender = "";
	$hear = "";
	$bio = "";
	
	$wrong_name = "";
	$wrong_uname = "";
	$wrong_pass = "";
	$wrong_confpass = "";
	$wrong_email = "";
	$wrong_phone = "";
	$wrong_address = "";
	$wrong_bdate = "";
	$wrong_gender = "";
	$wrong_hear = "";
	$wrong_bio = "";
	
	$wrong_input = false;
	
	if(isset($_POST["register"])){
		
		if(empty($_POST["name"])){
			$wrong_name = " *Name required";
			$wrong_input = true;
		}
		else{
			$name = htmlspecialchars($_POST["name"]);
			echo $name;
		}
		
		if(empty($_POST["uname"])){
			$wrong_uname = " *Username required";
			$wrong_input = true;
		}elseif(strlen($_POST["uname"]<6)){
			$wrong_uname = " *Must be more than 6 characters";
			$wrong_input = true;
		}elseif(strpos($_POST["uname"]," ")){
			$wrong_uname = " *Cannot have space";
			$wrong_input = true;
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
			echo $uname;
		}
		
		if(empty($_POST["pass"])){
			$wrong_pass = " *Password required";
			$wrong_input = true;
		}elseif(strlen($_POST["pass"]<8)){
			$wrong_pass = " *Must be more than 8 characters";
			$wrong_input = true;
		}elseif(strpos($_POST["uname"],"#") !==false){
			$wrong_uname = " *Must have #";
			$wrong_input = true;
		}
		else{
			$pass =($_POST["pass"]);
			echo $pass;
		}
		
		if(empty($_POST["phone"])){
			$wrong_phone = " *Phone number required";
			$wrong_input = true;
		}elseif(is_numeric($_POST["phone"])){
			$wrong_phone = " *Must be numeric";
			$wrong_input = true;
		}
		else{
			$phone = htmlspecialchars($_POST["phone"]);
			echo $phone;
		}
		
		if(empty($_POST["bdate"])){
			$wrong_bdate = " *Birth Date required";
			$wrong_input = true;
		}
		else{
			$name =($_POST["bdate"]);
			echo $bdate;
		}
		
		if(empty($_POST["bio"])){
			$wrong_bio = " *Birth Date required";
			$wrong_input = true;
		}
		else{
			$name =($_POST["bio"]);
			echo $bio;
		}
	}
	
?>

<html>
	<head>PHP Form Validation</head>
	
	<body>
	
		<hr>
	
		<fieldset>
			<legend><h1>Club Member Registration</h1></legend>
			
			<form action = "" method = "post">
				<table>
					<tr>
						<td align = "right">Name:</td>
						<td><input type = "text" name = "name"><?php echo $wrong_name;?></td>
					</tr>
					<tr>
						<td align = "right">Username:</td>
						<td><input type = "text" name = "uname"><?php echo $wrong_uname;?></td>
					</tr>
					<tr>
						<td align = "right">Password:</td>
						<td><input type = "text" name = "pass"><?php echo $wrong_pass;?></td>
					</tr>
					<tr>
						<td align = "right">Confirm Password:</td>
						<td><input type = "text" name = "confpass"></td>
					</tr>
					<tr>
						<td align = "right">Email:</td>
						<td><input type = "text" name = "email"></td>
					</tr>
					<tr>
						<td align = "right">Phone:</td>
						<td>
							<input type = "text"  name = "phone" size = "3" placeholder = "code">&nbsp;-&nbsp;
							<input type = "text"  name = "phone" size = "9" placeholder = "Number">
						</td>
					</tr>
					<tr>
						<td align = "right">Address:</td>
						<td>
							<input type = "text"  name = "address" placeholder = "Street Address"><br>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type = "text" size = "5"  name = "address" placeholder = "City">&nbsp;-&nbsp;
							<input type = "text" size = "7"  name = "address" placeholder = "State">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type = "text"  name = "address" placeholder = "Postal/Zip Code">
						</td>
					</tr>
					<tr>
						<td align = "right">Birth Date:</td>
						<td>
							<select  name = "bdate">
								<option disabled selected>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";
									}
								?>
							</select>
							<select  name = "bdate">
								<option disabled selected>Month</option>
								<?php
									$arr = array("January","February","March","April",
												 "May","June","July","August",
												 "September","October","November","December");
									$i=0;
									foreach($arr as $a){
										echo "<option>$a</option>";
									}
								?>					
							</select>
							<select  name = "bdate">
								<option disabled selected>Year</option>
								<?php
									for($i=1974;$i<=2010;$i++){
										echo "<option>$i</option>";
									}
								?>					
							</select>
						</td>
					</tr>
					<tr>
						<td align = "right">Gender:</td>
						<td>
							<input type="radio" name="gender"> Male
							<input type="radio" name="gender"> Female
						</td>
					</tr>
					<tr>
						<td align = "right">Where did you hear <br>about us?</td>
						<td>
							<input type="checkbox" name = "hear[]" value = "A Friend or Colleague">A Friend or Colleague<br>
							<input type="checkbox" name = "hear[]" value = "Google">Google<br>
							<input type="checkbox" name = "hear[]" value = "Blog Post">Blog Post<br>
							<input type="checkbox" name = "hear[]" value = "News Article">News Article
						</td>
					</tr>
					<tr>
						<td align = "right">Bio:</td>
						<td  name = "bio">
							<textarea></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name = "register" value="register"></td>
					</tr>
				</table>
			</form>
			
		</fieldset>
	
		</hr>
	</body>
</html>
