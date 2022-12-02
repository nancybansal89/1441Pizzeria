
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
		<meta charset="utf-8" />
      <meta name="description" content="This is meta description Sample. We can add up to 158.">
		<meta name=”robots” content=”noindex, nofollow”>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> 1441pizzeria</title>
		<link rel="icon" type="image" href="images/logocar.PNG">
      <link rel="stylesheet" type="text/css" href="Styles/admin">
     
</head>
<body background="images/admin.jpg">

<div class="bar">
 This is admin page</div>
 <h1>Create update menu items</h1>
 <div class="bt">
 
<div class="btnone"><a href="create.php"><button class="btnone">CREATE</button></a></div>
<div class="btntwo"><a href="view.php"><button class="btntwo">EDIT</button></a></div>
<div class="btnthre"><a href="view.php"><button class="btnthre">DELETE</button></a></div>
<div class="btnfor"><a href="view.php"><button class="btnfor">UPDATE</button></a></div>
 </div>
<figure class="pie-chart">
	<h2>STOCK INVENTORY</h2>
	<figcaption>
		PIZZA SOUCE 2.1<span style="color:#80a079"></span><br>
		PIZZA FLOUR 16.7<span style="color:#c1d9b4"></span><br>
		VEGITABLES<span style="color:#f0bf7a"></span><br>
		FUEL FOR BAKING 31.3<span style="color:#e89b9b"></span><br>
		IMPORTANT SPICES 26<span style="color:#ffd5ad"></span>
	</figcaption>
</figure>

 
 

<footer>
 <?php include'insert.php';?>
  
  <a href="logout.php"><button class="btnone">LOGOUT</button></a>
</footer>
</body>
</html>
