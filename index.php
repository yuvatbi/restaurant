<!-- creating signup page for restaurant -->

<html>
<head>
<title>Sign up</title>
<style type="text/css">
.register {
	padding-top: 100px;
	padding-left:400px;
}

.signupform {
	padding-top: 50px;
	padding-left:400px;
}
</style>
</head>
<body>

	<div class="register">
		<h1>Registration Form</h1>
	</div>

	<!-- Form to send signup details  -->
	<div class="signupform">
		<form name="signup" action="menu.php" method="post">
			<table>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="username" />
					</td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="passwd" />
					</td>
				</tr>
				<tr>
					<td>Mail Id:</td>
					<td><input type="text" name="mailid" />
					</td>
				</tr>
				<tr>
					<td>Address :</td>
					<td><input type="text" name="address" />
					</td>
				</tr>
				<tr>
					<td>Contact No:</td>
					<td><input type="text" name="phone" />
					</td>
				</tr>
			</table>
			<br> <input type="submit" name="signup" value="signup" />
		</form>
	</div>

</body>
</html>
