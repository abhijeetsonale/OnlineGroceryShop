<?php

	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");

	$x="'".$_REQUEST["pid"]."'";
	$f="'".$_REQUEST['pname']."'";
	$m="'".$_REQUEST['ctype']."'";
	$l="'".$_REQUEST['ptype']."'";
	$u=$_REQUEST['qty'];
	$p="'".$_REQUEST['unit']."'";
	$a="'".$_REQUEST['rate']."'";
	$b="'".$_REQUEST['sname']."'";
	$c="'".$_REQUEST['status']."'";
	$d="'".$_REQUEST['date']."'";
	$e="'".$_REQUEST['tid']."'";
	$g="'".$_REQUEST['mop']."'";
	$query="insert into spayment(qid,pname,ctype,qty,unit,rate,sname,status,date,tid,mop,ptype)
	values($x,$f,$m,$u,$p,$a,$b,$c,$d,$e,$g,$l)";
	echo $query;
    $query1="update product set qty=qty+".$u." where ctype=".$m." and ptype=".$l." and pname=".$f."";
	mysqli_query($connect,$query);
	mysqli_query($connect,$query1) or die("Failed");
	mysqli_close($connect);
   header("location:viewquotation.php");


?>