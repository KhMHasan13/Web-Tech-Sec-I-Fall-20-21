<html>
	<head>PHP Form Validation</head>
	
	<body>
	
		<hr>
	
		<fieldset>
			<legend><h1>Club Member Registration</h1></legend>
			
			<form>
				<table>
					<tr>
						<td align = "right">Name:</td>
						<td><input type = "text"></td>
					</tr>
					<tr>
						<td align = "right">Username:</td>
						<td><input type = "text"></td>
					</tr>
					<tr>
						<td align = "right">Password:</td>
						<td><input type = "text"></td>
					</tr>
					<tr>
						<td align = "right">Confirm Password:</td>
						<td><input type = "text"></td>
					</tr>
					<tr>
						<td align = "right">Email:</td>
						<td><input type = "text"></td>
					</tr>
					<tr>
						<td align = "right">Phone:</td>
						<td>
							<input type = "text" size = "3" placeholder = "code">&nbsp;-&nbsp;
							<input type = "text" size = "9" placeholder = "Number">
						</td>
					</tr>
					<tr>
						<td align = "right">Address:</td>
						<td>
							<input type = "text" placeholder = "Street Address"><br>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type = "text" size = "5" placeholder = "City">&nbsp;-&nbsp;
							<input type = "text" size = "7" placeholder = "State">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type = "text" placeholder = "Postal/Zip Code">
						</td>
					</tr>
					<tr>
						<td align = "right">Birth Date:</td>
						<td>
							<select>
								<option disabled selected>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";
									}
								?>
							</select>
							<select>
								<option disabled selected>Month</option>
								<?php
									$arr = array("January","February","March","April",
												 "May","June","July","August",
												 "September","October","November","December");
									foreach($arr()){
										echo "<option>$arr()</option>";
									}
								?>					
							</select>
							<select>
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
							<input type="checkbox">A Friend or Colleague<br>
							<input type="checkbox">Google<br>
							<input type="checkbox">Blog Post<br>
							<input type="checkbox">News Article
						</td>
					</tr>
					<tr>
						<td align = "right">Bio:</td>
						<td>
							<textarea></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" value="register"></td>
					</tr>
				</table>
			</form>
			
		</fieldset>
	
		</hr>
	</body>
</html>