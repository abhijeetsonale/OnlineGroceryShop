<?php

session_start();
$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$u=$_REQUEST['txtuser'];
	$p=$_REQUEST['txtpassword'];
    $rs=mysqli_query($connect,"select username,password from customer");
    $flag=0;
    while($array=mysqli_fetch_array($rs))
    {
    	if($array[0]==$u && $array[1]==$p)
    	{
    		$flag=1;
    		break;
    	}
    }
    mysqli_close($connect);
    if($flag==1)
    {
        $_SESSION['cname']=$u;
    	header("location:customerdashboard.php");
    }
    else
    	header("location:customerlogin.html");
    



?>