<style type="text/css">

</style>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style15.css">
</head>
<body>
	<form action="{{( url('falidasilogin') )}}" method="post">
		@csrf
	<div class="login-box">
		<h2>Login Disini</h2>
			<div class="user-box">
				<input type="text" autocomplete="off" name="nama">
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" autocomplete="off" name="pasword">
				<label>Password</label>
			</div>
			<div class="user-type">
				<p>Login as:</p>
				<button class="teacher"type="submit" name="id" value="1">guru</button>
				<button class="student"type="submit" name="id" value="2">murid</button>
			</div>
	</div>
	</form>
</body>
</html>