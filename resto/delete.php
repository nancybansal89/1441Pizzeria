<?php
include'confi.php';
$id=$_GET['id'];
$delete="DELETE  FROM tbl_product WHERE id='$id'";
$delete_q=mysqli_query($con,$delete);
header('location:view.php')

?>