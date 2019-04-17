<?php
session_start();
include 'functions.php';
$con = mysqli_connect('localhost', 'root', '','customer' );
if(!$con)
{
    alert("Please turn on MySql on Xampp","-1");  
}
$email=$_POST["email"];
$pass=$_POST["pass"];
$q="select * from cust where email='$email' and password ='$pass'";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r))
	{
	$y=mysqli_fetch_array($r);
	$_SESSION['fname']=$y['fname'];
	$_SESSION['lname']=$y['lname'];
	$_SESSION['email']=$y['email'];
    alert("Welcome!!! Lets SHOP...","0");  
	}
else
	{
    alert("Please enter valid details...","1");  
}
mysqli_close($con);
?>