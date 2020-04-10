<!DOCTYPE html>
<html>
<head>
	<title> user login and regestration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left">
		     <h2> login here </h2>
			<form action="validation.php" method="post"
				<div class="form-group">
					<label>username</label>
					<input type="text" name="user" class="form-control" required>
					<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control" required>
						
			 </div>
			 <button type="submit" class="btn btn-primary"> login </button>

			</form>
		</div>
		
			<div class="col-md-6" login-right>
		     <h2> register here </h2>
			<form action="registration.php" method="post"
				<div class="form-group">
					<label>username</label>
					<input type="text" name="user" class="form-control" required>
					<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control" required>
						
			 </div>
			 <button type="submit" class="btn btn-primary"> register </button>

			</form>
		</div>
		
	</div>

</body>
</html>	    