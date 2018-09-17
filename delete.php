<?php 
include("db.php");
if(isset($_GET['id']))
{
mysqli_query($con,"delete from todos where id='$_GET[id]'");
}

 ?>