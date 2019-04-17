<!DOCTYPE html>
<html>
<head><title>DELIVERY</title>
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
.subb{
	font-size:20px;
	background-color:MediumSeaGreen;
	font-weight:bold;
	cursor:pointer;
}

</style>
<body>
<table style="cursor: pointer;">
<tr>
<th valign="top"><a href="home.php"><img src="pics\logo.png" alt="logo" width="220" height="220" /></a></th>
<th valign="top"><p class="food">THE FOODTRUCK</p><div class="selects"><img src="pics\phone.png" width="20" height="20"/>18603-040-8890|<span><img src="pics\gps.png" width="20" height="20"/> 100-ft Road Koramangla Bangalore</span> </div></th>
<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
<th style="font-size: 25px;font-family:Georgia" >WHY CHOOSE US?<p><a><img src="pics\qu.png" width="140" height="70" /></a>
<a><img src="pics\del.png" width="170" height="70"/></a><br/><a><img src="pics\on.png" width="190" height="80"/></a>
<a><img src="pics\re.png" width="190" height="80"/></a>
</p></th>
</tr>
</table>
<hr/>
<h3 style="font-family:arial;font-weight:bold" id="del"><u>DELIVERY INFORMATION</u></h3>
<p>THE FOODTRUCK's delivery systems are uniquely designed to provide you the abiliy to select
a convenient time to<br> receive your purchases either during the day or night.You can pre-book
your delivery slot during check-out and be <br>assured that the goods will be delivered
as per your booked slot. To maintain the freshness and quality of frozen,
chilled & fresh food we<br> have equipped our delivery van's with multi
temperature reefer units and cold storage devices which maintains
frozen and chilled range temperatures.</p>

<h4 style="font-family:arial;font-weight:bold;color:grey" id="del">DELIVERY SLOT</h4>
<p>THE FOODTRUCK provides a unique service and promise of
delivering the goods in 2-3 hour<br> window based on the
delivery slot selected by you. This ensures certainty and
aids in planned purchase of your<br> household needs and eliminates long
waits staying at home without knowing the exact time of delivery or even missing your delivery.<br> You can choose to receive your order the same day in the 4:30 pm to 
7 pm or 7:30 pm to 10 pm slot or on any day upto <br>6 days from the date of placing the order. 
Currently we offer 4 delivery slots in a day; 7 am to 9:30 am, 10 am to 12:30 am, 4:30 pm to 7 pm & 7:30 pm to 10 pm.<br>
You can check the availability and book your delivery slot at the time of checking out.<br> For your convenience we make deliveries on all 7 days in a week and 365 days a year with no holidays!</p>

<h4 style="font-family:arial;font-weight:bold;color:grey" id="del">DELIVERY CHARGES</h4>
<p>We levy very nominal charges for the delivery of the orders and<br> the delivery charge is based on the order value as per the table below:</p>

<table style="width:50%; border: 1px solid black;">
  <tr>
    <th style="border: 1px solid black;color:red">ORDER VALUE</th>
    <th style="border: 1px solid black;color:red">DELIVERY CHARGES</th> 
  </tr>
  <tr>
    <td style="border: 1px solid black;">Rs.1000 and more</td>
    <td style="border: 1px solid black;">Free Delivery</td>
  </tr>
  <tr>
    <td style="border: 1px solid black;">Upto Rs.1000</td>
    <td style="border: 1px solid black;">Rs. 35 </td>
  </tr>
</table>
<hr/>
<h3 style="font-family:arial;font-weight:bold" id="spe"><u>SPECIALITIES</u></h3>
<p>We deliver items from your favorite neighbourhood stores.Enjoy the benefits of local shopping at your own convenience!!</p>
<table>
<tr >
<th><img src="pics\more.png" width="220" height="220"></th>
<th><img src="pics\nilgiris.png" width="220" height="220"></th>
<th><img src="pics\rel.png" width="220" height="220"></th>
<th><img src="pics\nam.png" width="220" height="220"></th>
</tr>
</table><br/>
<div align="center">
<button class="subb" onclick="location.href ='home.php';">SHOP NOW</button>
</div>
</body>
</html>