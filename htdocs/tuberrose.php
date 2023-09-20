<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Blossoms at Backyard : Home : Flower Crops</title>
</head>
<style>
body { 
margin:0; 
overflow-x:hidden;
overflow-y:auto;
} 
hr {
  display: block;
  margin:0;
  border-style: solid;
  border-color:#F01940;
 }
.hr-container{
	font-family: Merienda One;
	padding:14px;
	font-size:20px;
	color:white;
	text-align:centre;
	position: absolute;
 }


/* Navigations */
/* side navigation */
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-family: Times new roman;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
} 
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
/* top navigation */
.top-container {
  position: absolute;
  top: 30px;
  right:40px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: rgba(51, 48, 0,0.0);
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  border-radius:4px;
}

/* Top Nav Hover*/
.topnav a:hover, .dropdown:hover .dropbtn{
  background-color:  rgba(221, 221, 221,0.6);
  color: black;
  text-decoration: none;
}
/* Top Nav Drop Down*/
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 20px;    
  color: #f2f2f2;
  margin:0;
  text-align: center;
  padding: 8px 16px;
  text-decoration: none;
  border-radius:4px;
}

.dropdown-content {
  display: none;
  border-radius:4px;
  position: absolute;
  top: 50px;
  right:120px;
  background-color: #f9f9f9;
  min-width: 140px;
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 8px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: rgba(221, 221, 221,0.6);
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/*text-container*/
.text-container {
  position: relative;
  overflow-x:none;
  overflow-y:none;
  top:-25px;
  left:225px;
  padding:14px;
  width:65%;
  height:400%;
  border-radius:10px;
  font-color:white;
  background-color: rgba(254, 249, 190,0.8);
}
/* Scroll Bar */
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background-color: #5F524F; 
  border-radius: 10px;
}
.footer {
	 position:absolute;
	 top:2800px;
	 bottom:0px;
	 width:100%;
	 height:100px;
	 background-color:rgba(0,0,0,0.0); 
}
/* footer-links */
.footer a:link {
  text-decoration: none;
}

.footer a:visited {
  text-decoration: none;
}

.footer a:hover {
  text-decoration: underline;
}

.footer a:active {
  text-decoration: underline;
}
</style>
<body>
<hr style="border-width:45px;"> 
<div class="top-container">
  <div class="topnav" >
   	  <a href="home.php"><i class='fa fa-home' style="font-size:24px"></i></a>
	  <div class="dropdown" >
	 <a style="cursor:pointer">Explore&nbsp <i class="fa fa-angle-down"></i></a>
       <div class="dropdown-content">
       <a href="flowercrop.php">Flower Crops</a>
       <a href="vegcrop.php">Vegetable Crops</a>
       <a href="fruitcrop.php">Fruit Crops</a>
       <a href="plantncrop.php">Plantation Crops</a>
       <a href="spicecrop.php">Spice Crops</a>
       <a href="medcrop.php">Medicinal Crops</a>
       <a href="aromacrop.php">Aromatic Crops</a>
       <a href="landscape.php">Landscaping and decor</a>
      </div>
	</div>
      <a href="events.php">Events</a>
	  <a href="FAQ.php">FAQ</a>
	  <a href="feedback.php">Feedback</a>
  </div>
 </div>
<div id="mySidenav" class="sidenav" onmouseleave="closeNav()">
<img src="logooo.png" style="height:200px;width:200px;position:relative;top:-30px;left:20px;">
  <a href="home.php">Home</a>
  <a href="propagation.php">Propogation</a>
  <a href="nurserytech.php">Nursery Techniques</a>
  <a href="DandD.php">Deficiencies and disorders</a>
  <a href="fertilizer.php">Fertilizer schedule</a>
</div>
<span style="font-family:Dancing Script;font-weight:bold;font-size:43px;cursor:pointer;position:relative;top:-68;left:40;color:#ffffff;" onclick="openNav()">&#9776;</span><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;cursor:pointer;position:absolute;top:-15px;left:90;color:#ffffff;"><a href="home.php" style="text-decoration:none;color:#ffffff"> Blossoms at Backyard</a></p>
</hr>
<div class="text-container" style="  font-family: Merienda One;font-size:20px;">
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:40%"><p>TUBERROSE</p></div></hr>
<p style="font-weight:bold">Varieties</p>
Single –Calcutta Single, Mexican Single, Phule Rajani, Prajwal, Rajat Rekha, Shringar, Khahikuchi Single, Hyderabad Single, Pune Single, Arka Nirantra
Double –Calcutta Double, Hyderabad Double, Pearl Double, Swarna Rekha, Suvasini, Vaibhav.</p>
<img src="tub1.png" style="height:200px;width:480px;position:relative;left:180px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;position:relative;top:20px;">Climate</p>
Tropical conditions with a temperature range of 28 to 300C
<p style="font-weight:bold;position:relative;top:20px;">Soil</p>
Well drained loamy soil having a pH of 6.5-7.5 is ideal for cultivation.
<p style="font-weight:bold;position:relative;top:20px;">Propagation and planting</p>
Bulbs are used for commercial propagation. Bulbs (25 to 30 g) are planted (1,12,000 corms/ha) on the sides of ridges at 45 x 20 cm spacing at 2.5 cm depth during June - July. Bulbs are planted after 30 days of harvest. Dip the corms in 5000 ppm CCC (5 g/lit) before planting to increase the yield.
</p>
<img src="tub2.png" style="height:200px;width:220px;position:relative;left:330px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;position:relative;top:20px;">Manuring and after cultivation</p>
Manuring can be done with FYM 25 t/ha and NPK 200:200:200 kg/ha (IIHR Recommendation). Full P and K can be applied during the final preparation of plots, while N can be applied in 3 equal split doses i.e., at the final preparation of plot, 60 and 90 days after planting of bulbs.
<p style="font-weight:bold;position:relative;top:20px;">Micronutrients:</p>
Foliar spray ofZnSO4 0.5% + FeSO4 0.2% + Boric acid 0.1%.
<p style="font-weight:bold;position:relative;top:20px;">Growth regulators:</p>
Foliar application of GA3 at 50 to 100 ppm thrice at 40, 55 and 60 days after planting.
<p style="font-weight:bold;position:relative;top:20px;">Plant protection</br>Pests</br>Thrips: </p>
Spray Dimethoate @ 1.5 ml/lit or Fipronil 5 % SC @ 1.5 ml/ l
<p style="font-weight:bold;position:relative;top:20px;">Aphids:</p>
Spary Dimethoate @ 1.5 ml/lit or Imidacloprid @ 1.5ml/l
<p style="font-weight:bold;position:relative;top:20px;">Root knot nematode:</p>
Apply Carbofuran 3 G 1 g/plant near the root zone and irrigate immediately to control nematode infestation.
<p style="font-weight:bold;position:relative;top:20px;">Diseases</br>Basal rot (or) stem rot:</p>
Soil drenching with Carbendazim @ 0.1 %
<p style="font-weight:bold;position:relative;top:20px;">Crop duration</p>
It extends up to 2 years. The crop can be maintained for one more year with good management practices.
<p style="font-weight:bold;position:relative;top:20px;">Harvest:</p>
<p style="font-weight:bold;position:relative;top:20px;">For Loose flower and concrete extraction:</p>
Individual florets are plucked during early morning hours before 8 am daily, when they start to open.
<p style="font-weight:bold;position:relative;top:20px;">For cut flower:</p>
 Whole spike is cut leaving 4 to 6 cm from the base.
<p style="font-weight:bold;position:relative;top:20px;">Yield:</p>
Loose flowers: 14-15 t/ha; Cut flower: 2 - 3 lakhs spikes/ha/year; Bulbs & bulblets: 20 -25 t/ha (at the end of 3rdyear).
Concrete recovery: 0.08 - 0.11 %
<p style="font-weight:bold;position:relative;top:20px;">Yield</p>
Flower yield ranges about 14-15 t/ha. The concrete yield ranges about 8 to 10 kg/ha.
</p>
<br>
</div>
<div class="footer">
<div class="container" style="width:1000px;height:120px;font-family:Merienda One;font-size:48px;background-color:white;position:relative;top:-5px;left:40px"><img src="logo.jpeg" style="width:10%"><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;position:relative;top:-120;left:90px;color:Black;">Blossoms at Backyard</p><a href="https://www.facebook.com/blossomsatbackyard" style="background-color:white;position:relative;left:480px;top:-205"><i class="fa fa-facebook-square" style="font-size:35px;color:#0F19B6"></i></a><a href="https://www.instagram.com/blossomsatbackyard/" style="background-color:white;position:relative;left:500px;top:-205"><i class="fa fa-instagram" style="font-size:35px;color:#9E0562"></i></a></div>
<div><hr style="width:1200px;position:relative;top:-40px;left:60px;border-color:#CDCDCD"></hr></div>
<div class="container" style="width:500px;height:20px;font-family:Candara Light;font-size:16px;background-color:white;position:relative;top:-35px;left:880px"><a href="Terms.php" style="color:#0A8334">Terms of service</a>&nbsp &nbsp &nbsp <a href="directory.php" style="color:#0A8334">Directory</a>&nbsp &nbsp &nbsp <a href="FAQ.php" style="color:#0A8334">FAQ</a>&nbsp &nbsp &nbsp <a href="events.php" style="color:#0A8334">Events</a>
<div class="container" style="width:350px;height:200px;font-family:Candara Light;font-size:16px;background-color:white;position:relative;top:-30px;left:-800px"><p style="font-weight:bold;font-size:20px">Get in touch with us<br>Contact us at:</p><p>Shivani Awatade<br>Sushmita Paunikar<br>G.S.College of Commerce and Economics, Nagpur<br>Phone No. +07172258700<br>Email us at: blossomsatbackyrd@gmail.com<br>©Blossoms at Backyard 2020</p></div>
</div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>