<?php 

	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$b=$_REQUEST['b'];
	mysqli_query($connect,"delete from delivery where did=".$b."") or die("Failed");
	mysqli_close($connect);
	header("location:deliveryreport.php");


?>