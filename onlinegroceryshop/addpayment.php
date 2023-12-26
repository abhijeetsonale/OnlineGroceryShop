<?php
	
	session_start();

	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$a="'".$_REQUEST['txtcname']."'";
	$b="'".$_REQUEST['txttid']."'";
	$c="'".$_REQUEST['txtmop']."'";
	$d="'".$_REQUEST['txtdate']."'";
	$query="insert into invoice (cname,transactionid,mop,dateofp,amt) values(".$a.",".$b.",".$c.",".$d.",".$_SESSION['amt'].")";
	echo $query;
	mysqli_query($connect,$query);
	mysqli_close($connect);
	header("location:customerdashboard.php");

?>