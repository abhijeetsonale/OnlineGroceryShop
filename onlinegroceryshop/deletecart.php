<?php 
		
		$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	
		$u=$_REQUEST['b'];
		$query="delete from cart where pid=".$u."";
		mysqli_query($connect,$query);
		mysqli_close($connect);
		header("location:invoiceproduct.php");


?>