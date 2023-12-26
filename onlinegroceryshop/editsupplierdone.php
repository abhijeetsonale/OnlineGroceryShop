<?php

	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");

	$x="'".$_REQUEST["pid"]."'";
	$f="'".$_REQUEST['pname']."'";
	$m="'".$_REQUEST['ctype']."'";
	$l="'".$_REQUEST['ptype']."'";
	$u="'".$_REQUEST['qty']."'";
	$p="'".$_REQUEST['unit']."'";
	$a="'".$_REQUEST['rate']."'";
	$b="'".$_REQUEST['date']."'";
	$query="update quotation set pname=".$f.",ctype=".$m.",ptype=".$l.",qty=".$u.",unit=".$p.",rate=".$a.",dateofq=".$b."
	where qid=".$x."";
	echo $query;

	mysqli_query($connect,$query);
	mysqli_close($connect);

    header("location:viewstatus.php");


?>