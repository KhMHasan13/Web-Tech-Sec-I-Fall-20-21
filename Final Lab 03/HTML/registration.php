
<html>
	<head></head>
	<body>
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" id = "name"></td>
						<td><span id="err_name"></span>
						</td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" id = "uname"></td>
						<td><span id="err_uname"></span>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" id = "pass"></td>
						<td><span id="err_pass"></span>
						</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" id = "email"></td>
						<td><span id="err_email"></span>
						</td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><input type="text" name="phone" id = "phone"></td>
						<td><span id="err_phone"></span>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" onclick = "index.php" name="register" value="Register">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
		
		<script src="../JS/register.js"></script>
		
	</body>
</html>