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
  height:570%;
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
	 top:3900px;
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
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:40%"><p>CARNATION</p></div></hr>
<p style="font-weight:bold">Varieties<br>
Standard Types</p>
<p style="font-size:15px">
Red- Domingo, Master, Gaudina, Leopardii, Big Red, Taureg, Guapo, Aicardii<br>
White-  Baltico, White Liberty, Emotion, White Dona, Lisa<br>
Pink- Dona, Charmant, Dumas, Pink Dover, Bizet<br>
Light pink  - Charmant, Cipro Big Mama, Dona, Golem<br>
Yellow        - Diana, Kiro, Soto, Salamanca, Liberty<br>
Orange       - Solar, Star, Folgore<br>
Double       - Malaga, Star, Athena, Happy Golem<br>
</p>
<img src="carn1.png" style="height:150px;width:200px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
<img src="carn2.png" style="height:150px;width:200px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
<img src="carn3.png" style="height:150px;width:200px;position:relative;left:220px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;"> &nbsp  PINK DONA &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp TUNDRA &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  WHITE TUNDRA </p>
<img src="carn4.jpg" style="height:550px;width:400px;position:relative;left:250px;top:20px;bottom:25px;border-radius:6px">
<p style="font-weight:bold;position:relative;top:20px">Spray Types</p>
<p style="position:relative;top:10px;font-size:15px">Estimade, Indira, Vera, Durago, Amore, Kiss Siga are some of the popular spray types.</p>
<p style="font-size:15px">
Red- Red Eye, Red Fuego, Red Vital, Aveiro<br>
White-  White Prestige, Milky Way, Elvis,T-587<br>
Pink- Rosa Bebe, Spur, Suprema, D- 925, Celebration, Osiris<br>
Yellow        - Stella, Prestige, Mila, Sonia, Abril<br>
Orange       - Sunshine, Autumn, Fancy Fuego, Disney, Eilat<br>
Double       - Berry, Orbit Plus, Nadeja, Picaro<br>
</p>
<img src="carn5.jpg" style="height:800px;width:600px;position:relative;left:150px;top:20px;bottom:25px;border-radius:6px">
<p style="font-size:18px;position:relative;top:20px;">
Growing environment: Naturally ventilated aerodynamic steel frame structure.<br>
Climate: Cool climate with day temperature of 18-240C and night temperature of 10-150C; relative humidity of 70 -75 %.<br>
Soil: Well drained red loamy soil with pH of 5.5 - 6.5.<br>
Season:
It can be cultivated throughout the year as it is grown under controlled conditions.<br>
Propagation and Planting
Plantlets/suckers can be used for planting. The terminal cuttings of 5-10 cm are treated with NAA at 500 ppm for 5 minutes to induce rooting. Cuttings are dipped in Carbendazim 2g/lit solution. Raised beds at 3 feet width and 45 cm height are formed at 45 cm interval and planting is done on top of the bed at 15 x 15 cm spacing. The cuttings normally develop good root system within 21 days.<br>
Fumigation - Dazomet @ 30g/m2 or H2O2 @ 300 ml/m2.<br>
Bed size:100 cm width, 30 cm height, convenient length with 40 cm foot path.<br>
Spacing:  6 row planting - 15x15 cm (25 plants/m2).<br>
4 row planting - 15x15cm (22 plants/m2) .<br>
Irrigation: Drip system with drippers at 30 cm spacing (5-6 l/m2/day).<br>
Growing condition – Day temperature 20-25oC<br>
Night temperature 10-15oC<br>
Critical photoperiod 13 hours<br>
RH 50-60%      - Malaga, Star, Athena, Happy Golem<br>
</p>
<p style="font-size:18px;position:relative;top:18px;">
<p style="font-weight:bold;position:relative;top:20px;">Support Material</p>
Carnation crop has the tendency to bend unless supported properly.  Hence the crop needs support while growing. Good support material is metallic wire woven with nylon mesh.  At every two meters the wire should be supported with poles. The poles at both the ends of bed should be strong. Metallic wire is tied around the bed along the length with the support from supporting poles.  Across the bed, nylon wires are woven like net. For an optimum support, an increasing width of the meshes can be used. Bottom net can be of 10x10cm, then two nets of 12.5x12.5cm and the upper most can be 15x15cm.</li>
Pinching
<ul>
<li>Depending upon the need of crop spread, single, one and a half or double pinch method is adopted.</li>
<li>Ideal time for pinching is early morning.</li>
<li>When the plant attains 5 nodes, the first pinch is given. This is called ‘single pinch’. This would give rise to six lateral shoots.</li>
<li>With a ‘one and half pinch’, 2-3 of these lateral shoots are pinched again. For the ‘double pinch’, all the lateral shoots are pinched of</li>
</ul>
</p>
<p style="font-size:15px">
<p style="font-weight:bold;position:relative;top:20px;">Disbudding</p>
In standard carnations, side buds should be removed whereas in spray carnations, the terminal bud has to be removed.
<p style="font-weight:bold;position:relative;top:20px;">Irrigation</p>
Irrigation is provided with drip system once in 2-3 days according to soil moisture to maintain water holding capacity at 60% to 65%. The optimum water requirement of the crop is 4-5 lit/m2/day
<p style="font-weight:bold;position:relative;top:20px;">Manuring</p>
Neem cake 2.5 ton/ha, Phosphorus 400 g/100 sq.feet and Magnesium sulphate 0.5 kg/100 sq.feet are applied as basal.
<p style="font-weight:bold;position:relative;top:20px;">Top dressing</p>
Calcium Ammonium Nitrate and MOP at 5:3 ratio is mixed and applied @ 2.5 g/plant/month as top dressing.<br>
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