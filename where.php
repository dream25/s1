<?php 
include("db.php");
$r=mysqli_query($con,"select * from todos where id='$_GET[id]'");
print_r(json_encode(mysqli_fetch_assoc($r)));

 ?>