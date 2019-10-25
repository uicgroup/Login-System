<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="container">
   	<h1>Login Page</h1>
   	<form action="process.php" method="post">
   		<div class="form-group">
   			<label>username</label>
   			<input type="text" name="uname" class="form-control" placeholder="user name">
		</div>
		<div class="form-group">
   			<label>password</label>
   			<input type="password" name="pass" class="form-control" placeholder="password">
		</div>
		<div class="form-group">
   			<input type="submit" name="btnn" value="Login" class="btn btn-primary">
		</div>
   	</form>
   </div>


</body>
</html>