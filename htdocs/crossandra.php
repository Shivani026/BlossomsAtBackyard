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
  height:520%;
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
	 top:3600px;
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
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:40%"><p>CROSSANDRA</p></div></hr>
<p style="font-weight:bold">Varieties</p>
Tetraploid types - Orange, Lutea Yellow, Sebaculis Red.<br>
Triploid types - Delhi Crossandra.<br>
<img src="cross1.png" style="height:250px;width:300px;position:relative;left:300px;top:15px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;position:relative;top:20px;">Climate:</p> It requires a temperature of 30 - 35°C for growth. It is shade tolerant to some extent but susceptible to low temperature and frost. 

<p style="font-weight:bold;position:relative;top:20px;">Soil:</p> Well drained sandy loam and red soils with pH of 6 - 7.5 are ideal. Soil is to be tested for nematodes before planting.

<p style="font-weight:bold;position:relative;top:20px;">Propagation:</p>
<p style="font-weight:bold;position:relative;top:20px;">Tetraploids:</p> Propagated through seeds. Seed rate is 5kg/ha. 60 day old seedlings are transplanted in the main field.
<p style="font-weight:bold;position:relative;top:20px;">Triploids: Propagated through terminal cuttings of 10 - 15 cm length (41,700 cuttings/ha)

<p style="font-weight:bold;position:relative;top:20px;">Seeds and sowing</p>
Fresh seeds are sown during July - October in raised beds at 15 cm apart in lines. Watering should be done daily. The seedlings will be ready for transplanting in 60 days.

<p style="font-weight:bold;position:relative;top:20px;">Seed rate</p>
The required seed rate is 5 kg/ha for optimum plant population. For Delhi Crossandra, rooted cuttings have to be used for planting.

<p style="font-weight:bold;position:relative;top:20px;">Preparation of field</p>
Land is ploughed thrice and FYM at 25 t/ha is incorporated. Ridges are formed 60 cm apart.  Dip the roots of seedlings in Carbendazim (1 g/l of water) and plant on one side of the ridge at 30 cm spacing.  For seed production the spacing may be 60 x 60 cm.  For Delhi Crossandra a spacing of 60 x 40 cm is to be followed.

<p style="font-weight:bold;position:relative;top:20px;">After cultivation</p>
Spray Diuron (pre-emergence) 2.5 kg a.i/ha for controlling the weeds.

<p style="font-weight:bold;position:relative;top:20px;">Manuring</p>

<p style="font-weight:bold;position:relative;top:20px;">Tetraploids:</p> Apply FYM 25 t/ha as basal and NPK at 75, 50 and 125 kg/ha as top dressing three months after planting. Repeat NPK application at the same dose at half yearly intervals for two more years (Instead of applying N at 75 kg/ha, N at 60 kg/ha + Azospirillum 2 kg/ha can also be applied).

<p style="font-weight:bold;position:relative;top:20px;">Delhi Crossandra:</p> Apply FYM 25 t/ha, Gypsum 100 kg/ha and P & K at 50 and 100 kg/ha respectively as basal dose. Top dressing is done 30 days after planting with neem cake 250 kg and N 40 kg/ha. Apply N P K @ 40:20:60 kg/ha 90 days after planting and repeat this dose at quarterly intervals for a period of two years.

<p style="font-weight:bold;position:relative;top:20px;">For both Tetraploids& Delhi Crossandra:</p>
<p style="font-weight:bold;position:relative;top:20px;">Biofertilizers:</p> Soil application of2 kg each of Azospirillum and Phosphobacteria per ha at the time of planting. It is to be mixed with 100kg of FYM and applied.

<p style="font-weight:bold;position:relative;top:20px;">Growth regulators:</p> Spray Ascorbic acid 1000 ppm (1 g/lit of water) before flowering.

<p style="font-weight:bold;position:relative;top:20px;">Top Dressing</p>
On 30 days after planting, apply Neem cake 250 kg and N 40 kg/ha. Again on 90 days after planting apply N P K 40:20:60 Kg and repeat this dose at quarterly intervals for a time period of two years.

<p style="font-weight:bold;position:relative;top:20px;">Irrigation</p>
Irrigation is done once in a week.

<p style="font-weight:bold;position:relative;top:20px;">Plant protection</p>
<p style="font-weight:bold;position:relative;top:20px;">Pests</p>
<p style="font-weight:bold;position:relative;top:20px;">Nematode</p>
Avoid planting Crossandra in nematode infested fields. To control nematodes, apply Phorate or Carbofuran 3 G at 1 kg a.i./ha a week after planting and the same may be repeated siz months after planting.

<p style="font-weight:bold;position:relative;top:20px;">Aphids</p>
To control aphids, spray Dimethoate 30 EC 2 ml/lit.

<p style="font-weight:bold;position:relative;top:20px;">Disease</p>
<p style="font-weight:bold;position:relative;top:20px;">Wilt </p>
Soil drenching with Carbendazim 1 g/lit or Triflooxystrobin + tebuconazole @ 0.75 g/litre

<p style="font-weight:bold;position:relative;top:20px;">Crop duration</p>
3 years including ratoon crop.

<p style="font-weight:bold;position:relative;top:20px;">Harvest</p>
Flowering will start a month after transplanting. Fully opened flowers are picked once in two days.

<p style="font-weight:bold;position:relative;top:20px;">Yield</p>
An average yield of 2000 kg of flowers per ha/year can be obtained. In Delhi Crossandra, 2800 kg of flowers per ha per year can be obtained.
</p>
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