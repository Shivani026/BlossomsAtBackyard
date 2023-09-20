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
  height:410%;
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
	 top:2900px;
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
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:43%"><p>CHRYSANTHEUM</p></div></hr>
<p style="font-weight:bold">Varieties</p>
CO 1 (yellow coloured flowers), CO 2 (purple coloured flowers), MDU 1 (yellow coloured flowers) Indira and Red Gold.</p>
<img src="chry1.png" style="height:150px;width:200px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
<img src="chry2.png" style="height:150px;width:200px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
<img src="chry3.png" style="height:150px;width:200px;position:relative;left:220px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;"> &nbsp  CO1 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp CO2  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  MDU1 </p>
<p style="font-size:15px">

<p style="font-weight:bold;position:relative;top:20px;">Climate:</p>  Tropical and subtropical climatic conditions are ideal. However, the best temperature for growing chrysanthemum is 20-280C for day and 15-200C for night. Since chrysanthemum is a short day plant, planting should be done such that flowering coincides with short day conditions. Under Tamil Nadu conditions, it is planted during April-May so that it flowers during September - December. 

<p style="font-weight:bold;position:relative;top:20px;">Soil:</p>  Well drained red loamy soil with pH of 6 to 7.

<p style="font-weight:bold;position:relative;top:20px;">Propagation and planting:</p>  Commercial propagation is through terminal cuttings (5-7 cm long) or suckers. Planting during June - July at 30 x 30 cm spacing on one side of ridges  (1,11,000 plants/ha).

<p style="font-weight:bold;position:relative;top:20px;">Irrigation</p> 
Irrigation is done twice a week in the first month and subsequently at weekly intervals.

<p style="font-weight:bold;position:relative;top:20px;">Manuring</p> 
Recommended dose -25t FYM and 125:120: 25 kg NPK/ha.
Basal application - half of N + entire P and K; top dressing - half of N applied 30 days after planting.

<p style="font-weight:bold;position:relative;top:20px;">Pinching:</p>  Done 4 weeks after planting to induce lateral branches.

<p style="font-weight:bold;position:relative;top:20px;">Desuckering:</p>  Remove the side suckers periodically.

<p style="font-weight:bold;position:relative;top:20px;">Micronutrients:</p>  Foliar spray of ZnSO4 0.25% + MgSO4 0.5%.

<p style="font-weight:bold;position:relative;top:20px;">Biofertilizers:</p>  Soil application of2 kg each of Azospirillum and Phosphobacteria per ha at the time of planting. It is to be mixed with 100kg of FYM and applied.

<p style="font-weight:bold;position:relative;top:20px;">Growth regulators:</p>  Spray GA3 @ 50 ppm on 30, 45 and 60 days after planting.
Plant protection

<p style="font-weight:bold;position:relative;top:20px;">Pests</p> 
Thrips, aphids and leaf eating caterpillars: Spray Acetamiprid @ 0.3 g/l or Indoxacarb @ 1 ml/l

<p style="font-weight:bold;position:relative;top:20px;">Diseases</p> 
<p style="font-weight:bold;position:relative;top:20px;">Root rot:</p> Soil drenching with Copper oxychloride 2.5 g/lit or Trifloxystrobin + Tebuconazole @ 0.75 g/litre or Difenoconazole @ 0.5ml/l

<p style="font-weight:bold;position:relative;top:20px;">Leaf spot:</p>  Foliar application of Mancozeb @ 2.5g/l or Azoxystrobin @ 1g/l
<p style="font-weight:bold;position:relative;top:20px;">Chrysanthemum mosaic disease</p>
<ol>
<li> Cuttings should be obtained from virus – free indexed stocks.</li>
<li> Removal and destruction of infected plants.</li>
<li>Destruction of the weed host.</li>
<li> Spraying Monocrotophos 0.05 per cent controls the vector and reduces the disease.</li>
</ol>
<p style="font-weight:bold;position:relative;top:20px;">Leaf spot</p>
To control the leaf spot, spray Mancozeb @ 2 g/lit.

<p style="font-weight:bold;position:relative;top:20px;">Duration</p>
The duration is 6 - 8 months for plant crop and 4 months for ratoon crops.

<p style="font-weight:bold;position:relative;top:20px;">Harvest</p>
Harvesting of the flowers starts from 3rd month onwards at 4 days intervals.Harvesting is done at 3/4 to full open stage for nearby markets and 1/2 open stage for distant markets.

<p style="font-weight:bold;position:relative;top:20px;">Yield</p>
An average yield of 20 t/ha from plant crop and 10 t/ha from ratoon crop can be obtained.
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