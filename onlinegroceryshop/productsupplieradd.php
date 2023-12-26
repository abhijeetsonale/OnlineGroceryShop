<?php

    session_start();
	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$f="'".$_REQUEST['txtpname']."'";
	$m="'".$_REQUEST['ctype']."'";
	$l="'".$_REQUEST['txtptype']."'";
	$u="'".$_REQUEST['txtqty']."'";
	$p="'".$_REQUEST['txtunit']."'";
	$a="'".$_REQUEST['txtrate']."'";
	$st="'".$_SESSION['sname']."'";
	$dt="'".$_REQUEST['txtdate']."'";
	
	$query="insert into quotation(pname,ctype,ptype,qty,unit,rate,uname,status,dateofq) values(".$f.",".$m.",".$l.",".$u.",".$p.",".$a.",".$st.",0,".$dt.")";
	echo $query;
	mysqli_query($connect,$query);
	mysqli_close($connect);

    header("location:supplierdashboard.php");



	?>