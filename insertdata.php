<?php
$name=$_POST['name'];
$conn=mysqli_connect("localhost","root","","test") or die("connection failed");
$sql="INSERT INTO student(name) VALUES ('{$name}')";
$result=mysqli_query($conn,$sql) or die("query failed");
?>