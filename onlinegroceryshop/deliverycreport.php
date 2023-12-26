<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body >
    <h2 class="text-danger" align="center"> Delivery Wise Customer Report</h2>
    <?php
   
    echo "<form name=form1 method=get action= $_SERVER[PHP_SELF] >";
    echo "<div class=form-group>";
    echo "   <div class=row>";
    echo "<div class=col-lg-2></div><div class=col-lg-4>";
        $connect=mysqli_connect("localhost","root","","ogs") or die("Connection failed");
        $query="select distinct(cname) from delivery";
        $rs=mysqli_query($connect,$query);
        echo "<p class=text-warning><font size=5>Choose Customer Name:</font><br><br><select name=txtpname class=form-control align=center>";
         
        while($array=mysqli_fetch_array($rs))
            
               echo "  <option>$array[0]</option>";
               
           echo " </select>   </p> ";
           echo "<input type=submit class=btn-primary></div>    </div>    </div></form>";
           
?>

    <?php 

        $connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
        echo "<table class=table table-dark table-striped>";
        echo "<tr><th>Product Id<th>Product Name<th>Commodity Type<th>Product Type<th>Quantity<th>Unit<th>Rate<th>Customer Name<th>Status";
            $input="'".$_REQUEST['txtpname']."'";
            if(isset($input))
            {
        $rs=mysqli_query($connect,"select * from delivery where cname=".$input."");
        while($array=mysqli_fetch_array($rs))
        {
            echo "<tr>";
            echo "<td>$array[0]";
            echo "<td>$array[1]";
            echo "<td>$array[2]";
            echo "<td>$array[3]";
            echo "<td>$array[4]";
            echo "<td>$array[5]";
            echo "<td>$array[6]";
            echo "<td>$array[7]";
            if($array[8]==0)
                echo "<td>Under Process";
            else
                echo "<td>Delivered";
            
           
        }
       }
        mysqli_close($connect);
        echo "</table>";

    ?>
    <br><br>

    <p align="center"><a href="admindashboard.php" class="btn btn-primary" >Dashboard</a></p>
</body>
</html>
</body>
</html>