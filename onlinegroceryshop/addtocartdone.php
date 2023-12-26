<?php

	session_start();
	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");

	$x="'".$_REQUEST["pid"]."'";
	$f="'".$_REQUEST['pname']."'";
	$m="'".$_REQUEST['ctype']."'";
	$l="'".$_REQUEST['ptype']."'";
	$u="'".$_REQUEST['qty']."'";
	$p="'".$_REQUEST['unit']."'";
	$a="'".$_REQUEST['rate']."'";
	$b="'".$_SESSION['cname']."'";
	$query="insert into cart values(".$x.",".$f.",".$m.",".$l.",".$u.",".$p.",".$a.",".$b.")";
	echo $query;

	mysqli_query($connect,$query);
	mysqli_close($connect);

    header("location:buyproduct.php");


?>