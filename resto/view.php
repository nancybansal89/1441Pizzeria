

<?php


session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}


?>


<?php
include 'confi.php';
$select="SELECT * FROM tbl_product";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);
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
 



<table border="1px" cellspacing="0" cellpadding="10px">

<tr>
<th>Id</th>
<th>Name</th>
<th>Image</th>
<th>Price</th>
<th colspan="2">Actions</th>
</tr>

<?php
if($data){
	while($row=mysqli_fetch_array($select_q))
	{?>
		
		<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><img src="images/<?php echo $row['image']?>"width="80px"</td>
		<td><?php echo $row['price']?></td>
		<td><a href="edit.php?id=<?php echo $row['id']?>">Edit</a></td>
		<td><a onclick="return confirm('ARE YOU SURE WANT TO DELETE?')" href="delete.php?id=<?php echo $row['id']?>">DELETE</a></td>
		</tr>
		
		
		
		<?php
	}

}
		else
		
		{echo"NO RECORD FOUND";}

?>
</table>
 


 
 

<footer>
 <?php include'insert.php';?>
 
 
 <a href="logout.php"><button class="btnone">LOGOUT</button></a>
 <a href="adminhome.php"><button class="btnone">HOME</button></a>

</footer>
</body>
</html>












