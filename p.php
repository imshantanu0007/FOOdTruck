<?php
session_start();
include 'functions.php';
$con = mysqli_connect('localhost', 'root', '','customer' );
if(!$con)
{
	    alert("Please turn on MySql on Xampp","-1");  
}
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
$_SESSION['email']=$email;
$q="INSERT INTO cust(fname,lname,email,password) VALUES('$fname','$lname','$email','$pass')";
$r=mysqli_query($con,$q);
if($r)
	{
		    alert("Welcome!!! You are our customer now...","0");  
	}
else
	{
    echo alert("Oops!!! Something went wrong... Please try again later...","2");
}
mysqli_close($con);
?>