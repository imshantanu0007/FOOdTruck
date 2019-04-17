<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>THE FOODTRUCK</title>
</head>
<style type="text/css">
.mySlides{
    cursor:pointer;
	}
.mySlides img:hover{
	border: 3px yellow;
	}
.food {
	color:white;
	background-color:MediumSeaGreen;
	font-size:50px;
	font-family:maiandra gd;
	}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	font-family: courier;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}
.selects span:hover{
	text-decoration:none;
	    color:blue;
		}
.brightness {
    background-color:yellow;
    display: inline-block;

}
.brightness img:hover {
    border-color;
	box-shadow: 0 0 10px #ccc;
}		

</style>
<body>
<table style="cursor: pointer;">
<tr>
<th valign="top"><img src="pics\logo.png" alt="logo" width="220" height="220" /></th>
<th valign="top"><p class="food">THE FOODTRUCK</p><div class="selects"><img src="pics\phone.png" width="20" height="20"/>18603-040-8890|<span><img src="pics\gps.png" width="20" height="20"/> 100-ft Road Koramangla Bangalore</span> |<span><img src="pics\login.png" width="20" height="20"/><a style="text-decoration:none;" href="home.php">LOGOUT</a></span></div></th>
<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
<th style="font-size: 25px;font-family:Georgia" >WHY CHOOSE US?<p><a><img src="pics\qu.png" width="140" height="70" /></a>
<a><img src="pics\del.png" width="170" height="70"/></a><br/><a><img src="pics\on.png" width="190" height="80"/></a>
<a><img src="pics\re.png" width="190" height="80"/></a>
</p></th>
</tr>
</table>
<table>
<tr>
<th><meta name="viewport" content="width=device-width, initial-scale=1">
<div class="dropdown">
  <button class="dropbtn">SHOP BY CATEGORY</button>
  <div class="dropdown-content">
    <a href="veg.php">Fruits & Vegetables</a>
    <a href="veg.php">Foodgrains,Oil & Masala</a>
    <a href="veg.php">Bakery & Dairy</a>
  </div>
</div></th>
<th><div class="tab">
  <button class="tablinks" onclick="location.href='offers1.php';">Offers</button>
  <button class="tablinks" onclick="location.href='delivery1.php#del';">Delivery Express</button>
  <button class="tablinks" onclick="location.href='delivery1.php#spe';">Specialities</button>
  <button class="tablinks" onclick="location.href='veg.php';">New Launches</button>
   <button class="tablinks" onclick="location.href='offers1.php';">Deals of the Week</button>
</div></th>
<td><h1> &nbsp Welcome!!! <?php
echo $_SESSION['fname'];
?> <?php
echo $_SESSION['lname'];
?>
</h1></td>
</tr></table>
<hr/>
<section class="mySlides">
  <img src="pics\aatds.png"
  style="width:49%">
  <img src="pics\veg.png"
  style="width:49%">
</section><br/>
<p align="center" style="font-family:arial;font-size:20px"><b>SHOP MORE - SAVE MORE</b></p>
<hr/>
<table style="cursor: pointer;" >
<tr>
<th>&nbsp&nbsp&nbsp <th/>
<div class="brightness" >
<th><a href="offers1.php#c20"><img src="pics\cp.png" border="2"></a></th>
<th><a href="offers1.php#p150"><img src="pics\pp.png" border="2"></a></th>
<th><a href="offers1.php#f50"><img src="pics\fp.png" border="2"></a></th>
<th><a href="offers1.php"><img src="pics\vp.png" border="2"></a></th>
</div>
</tr>
</table>
</body>
</html>
