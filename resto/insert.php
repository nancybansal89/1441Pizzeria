<?php


include'confi.php';
if(isset($_POST['insert_btn'])){
	$name=$_POST['name'];
	$image=$_FILES['image']['name'];
	$price=$_POST['price'];
	
	$tmp_name=$_FILES['image']['tmp_name'];
    $destination="images/".$image;
    move_uploaded_file($tmp_name,$destination);

$insert="INSERT INTO tbl_product(name,image,price)
VALUES('$name','$image','$price')";
$insert_q=mysqli_query($con,$insert);


if($insert_q){
	?><script type="text/javascript">
	alert("data saved sucessfully");</script>
<?php
}else
{?><script type="text/javascript">
	alert("data not saved something went wrong");</script>}
<?php

}

}
?>