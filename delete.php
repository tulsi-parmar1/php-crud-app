<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","riddhi");
if($conn==false)
   {
        die("connection failed!".mysqli_connect_error());

   }
$sql="delete from tbl where id=$id";
if(mysqli_query($conn,$sql))
{
	 header("Location:finally.php");
}
else
{
	echo 'can not delete';
}
?>