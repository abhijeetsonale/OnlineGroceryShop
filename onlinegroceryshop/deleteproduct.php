<?php  

	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$id=$_GET['b'];
	$query="delete from product where pid=".$id." ";
	echo $query;
	mysqli_query($connect,$query);
	mysqli_close($connect);
	header("location:viewstock.php");


?>