
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
 
 <div class="bt">
 

 </div>
 
 <form action="" method="POST" enctype="multipart/form-data">
 <input type="text" name="name" placeholder="MENU-ITEM">
 <input type="file" name="image" placeholder="IMAGE">
 <input type="text" name="price" placeholder="PRICE">
 <input type="submit" name="insert_btn" value="UPLOAD">
 
 </form>
 
 

<footer>
 <?php include'insert.php';?>
 <a href="view.php"><button class="btnone">VIEW MENU</button></a>
 <a href="adminhome.php"><button class="btnone">HOME</button></a>
 
</footer>
</body>
</html>
