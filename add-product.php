<?php

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = $_FILES['image'];

        // upload 
        $upload_dir = "uploads/";

        $tmp = $_FILES['image']['tmp_name'];
        $image = $_FILES['image']['name'];

        move_uploaded_file($tmp, $upload_dir.$image);


		$con = mysqli_connect('localhost', 'root', '', 'cart');

		// make a query
		mysqli_query($con, "INSERT INTO products (name, price, quantity,image)VALUES('$name', '$price', '$quantity', '$image')");
		if(mysqli_error($con)) die("Unsuccessful");

	}


?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
    <?php include('header.php') ?>
    <h1>Add New Product</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="name" name="name" placeholder="Product name" /><br>
		<input type="number" name="price" placeholder="Price"><br>
        <input type="number" name="quantity" placeholder="Quantity" /><br>
        <input type="file" name="image" /><br>
		<input type="submit" name="submit" value="Add Product"/>
	</form>
</body>
</html>