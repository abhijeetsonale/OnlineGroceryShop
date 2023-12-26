<?php

	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$f="'".$_REQUEST['txtpname']."'";
	$m="'".$_REQUEST['ctype']."'";
	$l="'".$_REQUEST['txtptype']."'";
	$u="'".$_REQUEST['txtqty']."'";
	$p="'".$_REQUEST['txtunit']."'";
	$a="'".$_REQUEST['txtrate']."'";
	
	$query="insert into product(pname,ctype,ptype,qty,unit,rate) values(".$f.",".$m.",".$l.",".$u.",".$p.",".$a.")";
	echo $query;
	mysqli_query($connect,$query);
	mysqli_close($connect);

    header("location:admindashboard.php");



	?>