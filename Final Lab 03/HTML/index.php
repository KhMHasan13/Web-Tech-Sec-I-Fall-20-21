
<html>
	<body>
		<form action="" onsubmit="return validate()" method="post">
			<table >
				<tr>
					<td>Username:</td>
					<td><input type="text" name="uname">
						<span id="err_uname"></span>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass">
						<span id="err_pass"></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="login" value="Login">
					</td>
				</tr>
			</table>
		</form>
		
		<script src="../JS/index.js"></script>
		
		
	
	</body>
</html>