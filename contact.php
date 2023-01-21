<?php 

$con = mysqli_connect("localhost","root","","reg_form"); 

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO  reg_form (fname,sname,dob,email,address,password) VALUES ('$fname', '$sname', '$dob', '$email','$address','$password_hash')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	header("location:table.php");
}



?>