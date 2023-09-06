<?php
$stid=$_POST['id'];
$conn=mysqli_connect("localhost","root","","test") or die("connection failed");
$sql="DELETE FROM student WHERE id={$stid}";
if(mysqli_query($conn,$sql))
{
    echo 1;
}else
{echo 0;
}
?>