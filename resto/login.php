<?php
$host="localhost";
$user="root";
$password="";
$db="user";






session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	
	
	$sql="select * from login where username='".$username."' AND'".$password."
	' ";
	
	$result=mysqli_query($data,$sql);
	$row=mysqli_fetch_array($result);
	
	
	
	if($row["username"]=="user")
		
	
	{
		$_SESSION["username"]=$username;
		header("location:userhome.php");
	}
	
	elseif($row["username"]=="admin")
	{
		$_SESSION["username"]=$username;
		header("location:adminhome.php");
	}
elseif($row["username"]!=="admin::user")
	{
		
		$_SESSION["username"]=$username;
		header("location:error.php");
	}
	
	else
	{
		echo"username or password incorrect";
		
		
	}
	
	

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
		
      <link rel="stylesheet" type="text/css" href="Styles/table.css">
     
</head>
<body background="images/image-4.png">

<div class="main">

<img src="images/logo.png" alt="logo" >

<h1>Welcome to 1441pizzeria</h1>
 <form action="" method="POST">
 <div>
 <label>Username</label>
 <input type="text" name="username" required>
 </div>
 <div>
 <label>Password</label>
 <input type="password" name="password" required>
 </div>
 
 <input type="submit" value="login">


</form>
 </div>
<footer>
 
</footer>

</body>
</html>