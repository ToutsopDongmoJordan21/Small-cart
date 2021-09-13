<?php
session_start();

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];


		$con = mysqli_connect('localhost', 'root', '', 'cart');

        // make a query
        $query = "SELECT id,email,name, password FROM user WHERE email='$email' && password='$password'";
        $result = mysqli_query($con, $query);
        if($result->num_rows > 0){
           // create session and store user info 
           $user = $result->fetch_assoc();

           $_SESSION['id'] = $user['id'];
           $_SESSION['email'] = $user['email'];
           $_SESSION['name'] = $user['name'];

           Header('Location: index.php');

        } else die('User does not exist');
		
	}

?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Sigin </title>
</head>
<body>
	<form action="" method="post">
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="Password" /><br>
		<input type="submit" name="submit" value="Signin"/>
	</form>
</body>
</html>