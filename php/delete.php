<?php
include 'connection.php';
$id=$_GET['idth'];
$deletequery="delete from book1 where id=$id";
$query=mysqli_query($con,$deletequery);
header('location:adminbook.php');
?>