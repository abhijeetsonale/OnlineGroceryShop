<?php

$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$u=$_REQUEST['txtuser'];
	$p=$_REQUEST['txtpassword'];
    $rs=mysqli_query($connect,"select username,password from supplier");
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
            session_start();
            $_SESSION["sname"]=$u;

        header("location:supplierdashboard.php");    
        }
    else
    	header("location:supplierlogin.html");
    



?>