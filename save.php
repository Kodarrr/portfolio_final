<?php


$name=$_POST["yourname"];
$email=$_POST["email"];
$msg=$_POST["msg"];
$conn = mysqli_connect("localhost","root","","portfolio1");
//$conn=mysqli_connect()

$sql="INSERT INTO table1(Name,Email,msg) values('{$name}','{$email}','{$msg}')";
$result = mysqli_query($conn,$sql);
header("location:http://localhost/portfolio/#contact");
mysqli_close($conn);
?>