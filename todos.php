<?php 
include("db.php");
$r=mysqli_query($con,"select * from todos");
$a=array();
while($row=mysqli_fetch_assoc($r))
{
	$a[]=$row;
}

print_r(json_encode($a));

 ?>