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
    sfd
    <p id="demo"></p>
    <button onclick="ajaxDemo()">Ajax Demo</button>
    <script>
        	if(localStorage.getItem("cart")){
                var cart = JSON.parse(localStorage.getItem('cart'));
                console.log(cart)
            }
            
function ajaxDemo(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  var cart = localStorage.getItem('cart');
  xhttp.open("GET", "ajax.php?ids"+localStorage.getItem('cart'), true);
  xhttp.send();
}

    </script>
    

    <script src="app.js"></script>
	
</body>
</html>