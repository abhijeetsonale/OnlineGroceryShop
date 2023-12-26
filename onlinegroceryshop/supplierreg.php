<?php

	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$f="'".$_REQUEST['txtfname']."'";
	$m="'".$_REQUEST['txtmname']."'";
	$l="'".$_REQUEST['txtlname']."'";
	$u="'".$_REQUEST['txtusername']."'";
	$p="'".$_REQUEST['txtpassword']."'";
	$a="'".$_REQUEST['txtaddress']."'";
	$mo="'".$_REQUEST['txtmobilenumber']."'";
	$ad="'".$_REQUEST['txtadhaar']."'";
	$em="'".$_REQUEST['txtemail']."'";
	$query="insert into supplier values(".$f.",".$m.",".$l.",".$u.",".$p.",".$a.",".$mo.",".$ad.",".$em.")";
	echo $query;
	mysqli_query($connect,$query);
	mysqli_close($connect);

//    header("location:homepage.html");
header("location:framebody.html");



	?>