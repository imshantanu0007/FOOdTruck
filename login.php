<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>LOGIN</title>
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
<p style="color:white;font-size:20px;font-family:maiandra gd;" align="center">LOGIN</p>
<div style="color:white;border:20px black" align="center">
<form id="f1" action="q.php" method="post">
<label>EMAIL ID <input type="text" id="i1" size="20" name="email" required/></label><br/><br/>
<label>PASSWORD <input type="password" id="i2" size="20" name="pass" required/></label><br/><br/>
<input class="click" type="submit" value="LOGIN"/>&nbsp&nbsp&nbsp&nbsp<input class="click" type="reset" value="RESET"/><br/><br/>
<p >NEW CUSTOMER ?</p>
<button class="click" onclick="signup.html"><a style="text-decoration:none;" href="signup.php">SIGNUP</a></button><br/><br/>
</form>
</div>
<script type="text/javascript" src="b.js">
</script>
</body>
</html>