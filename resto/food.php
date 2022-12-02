<?php


session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoping Cart</title>
          <link rel="stylesheet" type="text/css" href="Styles/table.css">
    <script src="js/bootstrap.js"></script>
</head>
<body background="images/menu.jpg">

    <div class="container">
        <header>
            <div class="d">
               

                <nav class="e">
                    <a class="me" href="login.php">Home</a>
                    <a class="mo" href="viewCart.php">View Cart</a>
                </nav>
            </div>
        </header>
        <div class="row">
            <h1 class="text-center border-bottom pb-4 mb-4">Menu</h1>
            <?php
                if(isset($_GET['true']) == "created"){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your product added to Cart.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
        </div>
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
             
                <div class="card-body">
                    
                   
                   
					
					
					
					
					
					<table>
  <tr>
    <th><h1 class="card-title">Pizza</h1></th>
    <th><h1 class="card-title">price</h1></th>
	<th><h1 class="card-title">quantity</h1></th>
  </tr>
  <tr>
    <td><img src="images/pijja.jpg" alt="shirt" style="width:50%;height:100px;"></td>
    <td><h1 class="card-title">RS 250/-</h1></td>
	<td> <form action="insertcart.php" method="post">
                        <input type="hidden" name="name" value="pizza">
                        <input type="hidden" name="price" value="1000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form></td>
  </tr>

</table>

					<table>
  <tr>
    <th><h1 class="card-title">Drinks</h1></th>
    <th><h1 class="card-title">price</h1></th>
	<th><h1 class="card-title">quantity</h1></th>
  </tr>
  <tr>
    <td><img src="images/coca-cola-original-12oz.jpg" alt="shirt" style="width:50%;height:80px;"></td>
    <td><h1 class="card-title">RS 100/-</h1></td>
	<td> <form action="insertcart.php" method="post">
                        <input type="hidden" name="name" value="pizza">
                        <input type="hidden" name="price" value="1000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form></td>
  </tr>

</table>
				<table>
  <tr>
    <th><h1 class="card-title">Non-veg Salad</h1></th>
    <th><h1 class="card-title">price</h1></th>
	<th><h1 class="card-title">quantity</h1></th>
  </tr>
  <tr>
    <td><img src="images/2277_2_1.jpg" alt="shirt" style="width:50%;height:80px;"></td>
    <td><h1 class="card-title">RS 600/-</h1></td>
	<td> <form action="insertcart.php" method="post">
                        <input type="hidden" name="name" value="pizza">
                        <input type="hidden" name="price" value="1000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form></td>
  </tr>

</table>				
					
					
					
					
					
					
			

          
            
            </div>
        </main>
    </div>
</body>
</html>