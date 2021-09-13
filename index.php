<?php session_start(); 

$con = mysqli_connect('localhost', 'root', '', 'cart');

$q = "SELECT * FROM products";
$result = mysqli_query($con, $q) or die('Something went wrong!');



?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
	<link href="style.css" rel="stylesheet" />
</head>
<body>
	<?php include('header.php') ?>

	<div class="products-box">
		<?php while($product = $result->fetch_assoc()) { 
			$image = $product['image'];
			if(empty($image)){
				$image = "uploads/default.png";
			} else $image = "uploads/".$image;
			
			?>
		<div class="product">
			<div class="product-image" style="background: url('<?php echo $image;?>'); background-size: cover; background-position:center"></div>
			<div class="product-name"><?php echo $product['name']; ?></div>
			<div class="product-price">
				<?php echo $product['price']; ?>  FCFA &nbsp;&nbsp;&nbsp;
				<button onclick="addToCart(<?php  echo $product['id']; ?>)">Add to Cart</button>
			</div>
		</div>
		<?php } ?>
	</div>

	<script src="app.js"></script>
	
</body>
</html>