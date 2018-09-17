<?php 
include("db.php");
if(isset($_GET['id'])&&isset($_GET['title'])&&isset($_GET['description']))
{
mysqli_query($con,"update todos set title='$_GET[title]' ,description='$_GET[description]' where id='$_GET[id]'");
}

 ?>