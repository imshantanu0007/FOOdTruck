<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Shop By Category</title>
<script type="text/javascript" src="a.js">
</script>
<style>
.food {
	color:white;
	background-color:MediumSeaGreen;
	font-size:50px;
	font-family:maiandra gd;
	}
.selects span:hover{
	text-decoration:none;
	    color:blue;
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
.subb{
	font-size:20px;
	background-color:MediumSeaGreen;
	font-weight:bold;
	cursor:pointer;
}

</style>
</head>
<body>
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
<h1>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Welcome!!! <?php
echo $_SESSION['fname'];
?> <?php
echo $_SESSION['lname'];
?>
</h1>
<hr/>
<form id="1" action="r.php" method="post">
<p style="font-family:arial;font-size:20px;font-weight:bold;" align="center" id="fv">Fruits And Vegetables</p>
<table><tr>
<th>
<img border="1" src="pics\onion.png" width="220" height="200"/><br/>Onion<br/>
 <select>
  <option value="250">250gm-Rs31.20</option>
  </select><br/>Qty <input type="text"  id="onionqty" size="2" name="onion" /> &nbsp </th>
  &nbsp
<th>
 <img border="1" src="pics\tomato.png" width="220" height="200"/><br/>Tomato<br/>
 <select>
  <option value="500">500gm-Rs5.00</option>
  </select><br/>Qty <input type="text" size="2" id="tomatoqty"  name="tomato" />&nbsp </th>
<th>
 <img border="1" src="pics\potato.png" width="220" height="200"/><br/>Potato<br/>
 <select>
  <option value="1000">1Kg-Rs34.00</option>
</select><br/>Qty <input type="text" size="2" id="potatoqty"  name="patato" />&nbsp</th>
<th>
 <img border="1" src="pics\banana.png" width="220" height="200"/><br/>Banana<br/>
 <select>
  <option value="250">500gm-Rs41.00</option>
  </select><br/>Qty <input type="text" size="2" id="bananaqty" name="banana" />&nbsp </th>
<th>
 <img border="1"src="pics\apple.png" width="220" height="200"/><br/>Apple<br/>
 <select>
  <option value="250">4pcs-Rs199.00</option>
  </select><br/>Qty <input type="text" size="2" id="appleqty"  name="apple" />&nbsp </th>
<th>
  <img border="1" src="pics\prom.png" width="200" height="200"/><br/>Pomegranate<br/>
 <select>
  <option value="500">500gm-Rs60.00</option>
</select><br/>Qty <input type="text" size="2" id="pomqty"  name="pom"/>&nbsp </th>
</tr>
</table><hr/>
<br/>
<p style="font-family:arial;font-size:20px;font-weight:bold;" align="center" id="fo">Foodgrains,Oil & Masala </p>
<table><tr>
<th>
<img border="1" src="pics\sugar.png" width="220" height="200"/><br/>Sugar<br/>
 <select>
  <option value="100">1Kg-Rs42.00</option>
  </select><br/>Qty <input type="text" size="2" id="sugarqty"  name="sugar" />&nbsp </th>
<th>
 <img border="1" src="pics\atta.png" width="220" height="200"/><br/>Atta-Whole Wheat<br/>
 <select>
  <option value="100">1Kg-Rs51.00</option>
  </select><br/>Qty <input type="text" size="2" id="aataqty"  name="aata" />&nbsp</th>
<th>
 <img border="1" src="pics\ooil.png" width="220" height="200"/><br/>Olive Oil<br/>
 <select>
  <option value="250">1 ltr bottle-Rs798.00</option>
  </select><br/>Qty <input type="text" size="2" id="ooilqty"  name="ooil" />&nbsp </th>
<th>
 <img border="1" src="pics\ghee.png" width="220" height="200"/><br/>Pure Cow Ghee<br/>
 <select>
  <option value="500">500 ml-Rs204.00</option>
</select><br/>Qty <input type="text" size="2" id="gheeqty"  name="ghee" />&nbsp </th>
<th>
 <img border="1" src="pics\tdal.png" width="220" height="200"/><br/>Toor Dal<br/>
 <select>
  <option value="100">500gm-Rs34.00</option>
</select><br/>Qty <input type="text" size="2" id="tdalqty"  name="tdal"/>&nbsp </th>
<th>
<img border="1" src="pics\salt.png" width="200" height="200"/><br/>Salt<br/>
 <select>
  <option value="250">1Kg-Rs18.50</option>
</select><br/>Qty <input type="text" size="2" id="saltqty"  name="salt" />&nbsp </th>
</tr>
</table><br/>
<hr/>
<p style="font-family:arial;font-size:20px;font-weight:bold;" align="center" id="bd">Bakery & Dairy</p>
<table><tr>
<th>
<img border="1" src="pics\milk.png" width="220" height="200"/><br/>Milk-toned<br/>
 <select>
  <option value="250">500ml-Rs23.00</option>
</select><br/>Qty <input type="text" size="2" id="milkqty"  name="milk" />&nbsp </th>
<th>
<img border="1" src="pics\butter.png" width="220" height="200"/><br/>Butter<br/>
 <select>
  <option value="250">200gm-Rs92.12</option>
</select><br/>Qty <input type="text" size="2" id="butterqty"  name="butter" />&nbsp </th>
<th>
<img border="1" src="pics\yog.png" width="220" height="200"/><br/>Yogurt<br/>
  <select>
  <option value="250">90gm pack-Rs40.00</option>
</select><br/>Qty <input type="text" size="2" id="yogqty"  name="yog" />&nbsp </th>
<th>
 <img border="1" src="pics\rusk.png" width="220" height="200"/><br/>Rusk<br/>
 <select>
  <option value="500">200gm-Rs30</option>
</select><br/>Qty <input type="text" size="2" id="ruskqty"  name="rusk" />&nbsp </th>
<th>
 <img border="1" src="pics\bread.png" width="220" height="200"/><br/>Bread<br/>
 <select>
  <option value="250">Rs28.00</option>
</select><br/>Qty <input type="text" size="2" id="breadqty"  name="bread" />&nbsp </th>
<th>
 <img border="1" src="pics\oats.png" width="200" height="200"/><br/>Oats<br/>
 <select>
  <option value="250">300gm-Rs70.00</option> 
</select><br/>Qty <input type="text" size="2" id="oatsqty"  name="oats" />&nbsp </th>
</tr>
</table><hr/><br/>
<div align="center">
<input class="subb" type="submit" value="SUBMIT ORDER"/>
</div>
<script type="text/javascript" src="b.js">
</script>
</form>
</body>
</html>


