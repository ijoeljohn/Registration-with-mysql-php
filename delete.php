<?php
$con = mysqli_connect("localhost","root","","reg_form"); 
$id = $_GET['id'];
$delete_query = "DELETE FROM reg_form WHERE id='$id'";
mysqli_query($con, $delete_query);
header("location:table.php");
?>
