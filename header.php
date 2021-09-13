<div class="header">
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="add-product.php">Add Product</a>

        <?php if(!isset($_SESSION['id'])){ ?>
            <a href="signup.php">Signup</a>
            <a href="login.php">Sigin In</a>
        <?php } else echo "<a href='logout.php'>Logout</a>&nbsp;&nbsp;&nbsp;".$_SESSION['email']; ?>
    </div>
    <div class="cart">
        <a href="cart.php"><div id="cartCount">0</div></a>
    </div>
</div>

