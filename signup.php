<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>SIGNUP</title>
<script type="text/javascript" src="a.js">
</script>
</head>
<style>
body{
background-size:cover;
}
.food {
	color:white;
	font-size:50px;
	font-family:maiandra gd;
	}
.click{
    float: center;
    cursor: pointer;
    font-size: 17px;
	}
	
</style>
<body background="pics\wall.png">
<p class="food" align="center">THE FOODTRUCK</p>
<p style="color:white;font-size:20px;font-family:maiandra gd;" align="center">SIGNUP</p>
<div style="color:white;border:20px black" align="center">
<p >ALREADY A CUSTOMER?</p>
<button class="click" onclick="login.html"><a style="text-decoration:none;" href="login.php">LOGIN</a></button><br/><br/>
<form id="f2" action="p.php" method="post">
<label>FIRST NAME <input type="text" id="i3" size="20" name="fname" required/></label><br/><br/>
<label>LAST NAME <input type="text" id="i4" size="20" name="lname" /></label><br/><br/>
<label>EMAIL ID <input type="text" id="i1" size="20" name="email" required/></label><br/><br/>
<label>PASSWORD <input type="password" id="i6" size="20" name="pass" required/></label><br/><br/>
<label>CONFIRM PASSWORD <input type="password" id="i7" size="20" name="pass" required/></label><br/><br/><br/>
<input class="click" type="reset" value="RESET"/><br/><br/><input class="click" type="submit" value="REGISTER"/>
</form>
</div>
<script type="text/javascript" src="b.js">
</script>
</body>
</html>