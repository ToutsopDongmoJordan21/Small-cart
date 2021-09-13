<?php

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$con = mysqli_connect('localhost', 'root', '', 'cart');
		
				// make a query
		mysqli_query($con, "INSERT INTO user (name, email, password)VALUES('$name', '$email', '$password')");
		if(mysqli_error($con)) die("Unsuccessful");
		else die('Done!');
	}


?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
</head>
<?php include('header.php') ?>
<body>
	<form action="" method="post">
		<input type="name" name="name" placeholder="Enter name" /><br>
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="Password" /><br>
		<input type="submit" name="submit" value="Signup"/>
	</form>
</body>
</html>