<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Order Details</title>
</head>
<style type="text/css">
.subb{
	font-size:20px;
	background-color:MediumSeaGreen;
	font-weight:bold;
	cursor:pointer;
}
.food {
	color:white;
	background-color:MediumSeaGreen;
	font-size:50px;
	font-family:maiandra gd;
	}
</style>
<body>
<?php
include 'functions.php';
$con = mysqli_connect('localhost', 'root', '','customer' );
if(!$con)
{
	    alert("Please turn on MySql on Xampp","-1");  
}
$onion=$_POST["onion"];
$tomato=$_POST["tomato"];
$patato=$_POST["patato"];
$banana=$_POST["banana"];
$apple=$_POST["apple"];
$pom=$_POST["pom"];
$sugar=$_POST["sugar"];
$aata=$_POST["aata"];
$ooil=$_POST["ooil"];
$ghee=$_POST["ghee"];
$tdal=$_POST["tdal"];
$salt=$_POST["salt"];
$milk=$_POST["milk"];
$butter=$_POST["butter"];
$yog=$_POST["yog"];
$rusk=$_POST["rusk"];
$bread=$_POST["bread"];
$oats=$_POST["oats"];
if($onion=="") $onion=0;
if($tomato=="") $tomato=0;
if($patato=="") $patato=0;
if($banana=="") $banana=0;
if($apple=="") $apple=0;
if($pom=="") $pom=0;
if($sugar=="") $sugar=0;
if($aata=="") $aata=0;
if($ooil=="") $ooil=0;
if($ghee=="") $ghee=0;
if($tdal=="") $tdal=0;
if($salt=="") $salt=0;
if($milk=="") $milk=0;
if($butter=="") $butter=0;
if($yog=="") $yog=0;
if($rusk=="") $rusk=0;
if($bread=="") $bread=0;
if($oats=="") $oats=0;
if($onion==0 && $tomato==0 && $patato==0 && $banana==0 && $apple==0 && $pom==0 && $sugar==0 &&  $aata==0 &&  $ooil==0 && $ghee==0 && $tdal==0 &&  $salt==0 && $milk==0 && $butter==0 && $yog==0 && $rusk==0 && $bread==0 && $oats==0)
{
	alert("Please pick-up some item!!!...","3");
}	
$onion_cost=31.20*$onion;
$tomato_cost=5.00*$tomato;
$patato_cost=34.00*$patato;
$banana_cost=41.00*$banana;
$apple_cost=199.00*$apple;
$pom_cost=60.00*$pom;
$sugar_cost=42.00*$sugar;
$aata_cost=51.00*$aata;
$ooil_cost=798.00*$ooil;
$ghee_cost=204.00*$ghee;
$tdal_cost=34.00*$tdal;
$salt_cost=18.50*$salt;
$milk_cost=23.00*$milk;
$butter_cost=92.12*$butter;
$yog_cost=40.00*$yog;
$rusk_cost=30.00*$rusk;
$bread_cost=28.00*$bread;
$oats_cost=70.00*$oats;
$total_price=$onion_cost+$tomato_cost+$patato_cost+$banana_cost+$apple_cost+$pom_cost+$sugar_cost+$aata_cost+$ooil_cost+$ghee_cost+$tdal_cost+$salt_cost+$milk_cost+$butter_cost+$yog_cost+$rusk_cost+$bread_cost+$oats_cost;
$total_items=$onion+$tomato+$patato+$banana+$apple+$pom+$sugar+$aata+$ooil+$ghee+$tdal+$salt+$milk+$butter+$yog+$rusk+$bread+$oats;
if($total_price<=1000.00) $total_price=$total_price+35.00;
?>
<table style="cursor: pointer;">
<tr>
<th valign="top"><a href="home1.php"><img src="pics\logo.png" alt="logo" width="220" height="220" /></a></th>
<th valign="top"><p class="food">THE FOODTRUCK</p><div class="selects"><img src="pics\phone.png" width="20" height="20"/>18603-040-8890|<span><img src="pics\gps.png" width="20" height="20"/> 100-ft Road Koramangla Bangalore</span> |<span><img src="pics\login.png" width="20" height="20"/><a style="text-decoration:none;" href="home.php">LOGOUT</a></span> </div></th>
<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
<th style="font-size: 25px;font-family:Georgia" >WHY CHOOSE US?<p><a><img src="pics\qu.png" width="140" height="70" /></a>
<a><img src="pics\del.png" width="170" height="70"/></a><br/><a><img src="pics\on.png" width="190" height="80"/></a>
<a><img src="pics\re.png" width="190" height="80"/></a>
</p></th>
</tr>
</table>
<h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ORDER DETAILS</h1>
<hr/>
<h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Customer Details</h3>
<table border="0">
<tr>
<th>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp NAME:</th>
<td><?php echo $_SESSION['fname']; ?> &nbsp
<?php echo $_SESSION['lname']; ?></td>
</tr>
<tr>
<th>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp EMAIL</th>
<td><?php echo $_SESSION['email']; ?></td>
</tr>
</table >
<h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Product Details</h3>
<table align="center" border="border">
<tr>
<th>Product</th>
<th>Unit Price</th>
<th>Quantity Ordered</th>
<th>Item Cost</th>
</tr>
<?php
if($onion>0)
{
	echo "<tr><th>Onions</th><td>Rs. 31.30</td><td align='center'>$onion</td><td align='center'>$onion_cost</td></tr>";
}
if($tomato>0)
{
	echo "<tr><th>Tomatos</th><td>Rs. 5.00</td><td align='center'>$tomato</td><td align='center'>$tomato_cost</td></tr>";
}
if($patato>0)
{
	echo "<tr><th>Patatos</th><td>Rs. 34.00</td><td align='center'>$patato</td><td align='center'>$patato_cost</td></tr>";
}
if($banana>0)
{
	echo "<tr><th>Bananas</th><td>Rs. 41.00</td><td align='center'>$banana</td><td align='center'>$banana_cost</td></tr>";
}
if($apple>0)
{
	echo "<tr><th>Apples</th><td>Rs. 199.00</td><td align='center'>$apple</td><td align='center'>$apple_cost</td></tr>";
}
if($pom>0)
{
	echo "<tr><th>Pomegranates</th><td>Rs. 60.00</td><td align='center'>$pom</td><td align='center'>$pom_cost</td></tr>";
}
if($sugar>0)
{
	echo "<tr><th>Sugar</th><td>Rs. 42.00</td><td align='center'>$sugar</td><td align='center'>$sugar_cost</td></tr>";
}
if($aata>0)
{
	echo "<tr><th>Aata-Whole Wheat</th><td>Rs. 51.00</td><td align='center'>$aata</td><td align='center'>$aata_cost</td></tr>";
}
if($ooil>0)
{
	echo "<tr><th>Olive Oil</th><td>Rs. 798.00</td><td align='center'>$ooil</td><td align='center'>$ooil_cost</td></tr>";
}
if($ghee>0)
{
	echo "<tr><th>Pure Cow Ghee</th><td>Rs. 204.00</td><td align='center'>$ghee</td><td align='center'>$ghee_cost</td></tr>";
}
if($tdal>0)
{
	echo "<tr><th>Toor Dal</th><td>Rs. 34.00</td><td align='center'>$tdal</td><td align='center'>$tdal_cost</td></tr>";
}
if($salt>0)
{
	echo "<tr><th>Salt</th><td>Rs. 18.50</td><td align='center'>$salt</td><td align='center'>$salt_cost</td></tr>";
}
if($milk>0)
{
	echo "<tr><th>Milk-toned</th><td>Rs. 23.00</td><td align='center'>$milk</td><td align='center'>$milk_cost</td></tr>";
}
if($butter>0)
{
	echo "<tr><th>Butter</th><td>Rs. 92.12</td><td align='center'>$butter</td><td align='center'>$butter_cost</td></tr>";
}
if($yog>0)
{
	echo "<tr><th>Yogurt</th><td>Rs. 40.00</td><td align='center'>$yog</td><td align='center'>$yog_cost</td></tr>";
}
if($rusk>0)
{
	echo "<tr><th>Rusk</th><td>Rs. 30.00</td><td align='center'>$rusk</td><td align='center'>$rusk_cost</td></tr>";
}
if($bread>0)
{
	echo "<tr><th>Bread</th><td>Rs. 28.00</td><td align='center'>$bread</td><td align='center'>$bread_cost</td></tr>";
}
if($oats>0)
{
	echo "<tr><th>Oats</th><td>Rs. 70.00</td><td align='center'>$oats</td><td align='center'>$oats_cost</td></tr>";
}
?>
</table>
<div align="center">
<h3 >Total Cost :</h3><?php echo $total_price; ?></div>
<hr/><br/>
<div align="center">
<button class="subb" onclick="location.href='thanku.php';">Confirm Order</button>
</div>
</body>
</html>
