<?php 
include("db.php");
if(isset($_GET['title'])&&isset($_GET['description']))
{
mysqli_query($con,"insert into todos (title,description) values('$_GET[title]','$_GET[description]')");
}

 ?>