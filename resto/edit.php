
 
 
 
 

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
 



<?php
include'confi.php';
$id=$_GET['id'];

$select="SELECT * FROM tbl_product WHERE id='$id'";
$select_q=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($select_q);

?>
<form action="" method="POST" enctype="multipart/form-data">
 <input type="text" name="name" placeholder="menuitem"
 value="<?php echo $fetch['name']?>">
 
 <input type="file" name="image" placeholder="image">
 <img src="images/<?php echo $fetch['image']?>"width="100px">
 
 <input type="text" name="price" placeholder="price"
 value="<?php echo $fetch['price']?>">
 <input type="submit" name="update_btn" value="EDIT">
 
 </form>
 <?php 
 if(isset($_POST['update_btn'])){
	 
	 $name=$_POST['name'];
	$image=$_FILES['image']['name'];
	$price=$_POST['price'];
	
	$tmp_name=$_FILES['image']['tmp_name'];
    $destination="images/".$image;
    if($image!="")
	{
		   move_uploaded_file($tmp_name,$destination);
		$update="UPDATE tbl_product SET name='$name',
		image='$image',price='$price'WHERE id='$id'";
		$update_q=mysqli_query($con,$update);
		header('location:view.php');
	
	
	}
	 else
	 {
		 $update="UPDATE tbl_product SET name='$name',price='$price'
		WHERE id='$id'";
		$update_q=mysqli_query($con,$update);
		header('location:view.php');
	
		 
	 }
	 
	 
	 
	 
 }
 
 ?>
 


 
 

<footer>
 <?php include'insert.php';?>
 
 
 <a href="logout.php"><button class="btnone">LOGOUT</button></a>
 <a href="adminhome.php"><button class="btnone">HOME</button></a>

</footer>
</body>
</html>