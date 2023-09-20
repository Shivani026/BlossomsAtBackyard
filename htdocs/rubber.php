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
  border-color:#53302D;
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
  height:300%;
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
	 top:2200px;
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
<div class="text-container" style="  font-family: Merienda One;font-size:15px;">
<hr style="border-width:20px; border-color:#53302D"><div class="hr-container" style="top:-15px;left:41%"><p>RUBBER</p></div></hr>
<p style="font-weight:bold;font-size:18px;">Varieties</p>
Tjir 1, PB 86, BD 5, BD 10, PR 17, GT 1, RRII 105, RRIM 600, PB 28/59, PB 217, PB 235, RRIM 703, RRII 5, PCK-1, 2 and PB 260<br>
<img src="rub1.png" style="height:250;width:400px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Soil and climate</p>
It requires deep and lateritic fertile soil with an acidic pH of 4.5 to 6.0 and highly deficient in available phosphorous. Tropical climate with annual rainfall of 2000 – 4500 mm is suited for cultivation. Minimum and maximum temperature should be ranged from 25 to 34°C with 80 % relative humidity is ideal for cultivation. Regions prone to heavy winds should be avoided.
<p style="font-weight:bold;font-size:18px;">Season</p>
June – July is optimum for cultivation
<p style="font-weight:bold;font-size:18px;">Method of propagation</p>
Propagated by green budding, brown budding and crown budding.
<p style="font-weight:bold;font-size:18px;">Nursery:</p>
Bed size: 60-120 cm width and of convenient length.<br>
Spacing: Seedling stumps – 23 x 23 cm, 30 x 30 cm and 34 x 20 cm<br>
            Budded stumps – 30 x 30 cm<br>
            Stump budding – 60 x 60 cm<br>
            Bud wood nursery – 60 x 90 cm or 60 x 120 cm.<br>
<p style="font-weight:bold;font-size:18px;">Plant protection<br>Pests<br>Scale insect</p>
When severe infestation is noticed, spray Organophosphorus insecticides like malathion 50 EC 2 ml/lit.
<p style="font-weight:bold;font-size:18px;">Mealy bug</p>
Spray fish oil rosin-soap 25 g/lit. Release Austalian lady bird beetle, Cryptolaemus montrouzieri @ 10/tree.
<p style="font-weight:bold;font-size:18px;">Termite (White ant)</p>
Drench the soil at the base of affected plants with Chlorpyriphos 20 EC 2 ml/litre.
<p style="font-weight:bold;font-size:18px;">Cockchafer grub</p>
Drench soil at the base of plants in the affected area with the solution of Chlorpyriphos 20 EC 2 ml/litre.
<p style="font-weight:bold;font-size:18px;">Mites</p>
Spray Sulphur 50 WP at 2 g/lit or spray Dicofol 18.5 EC 2.5 ml/lit
<p style="font-weight:bold;font-size:18px;">Diseases<br>Abnormal leaf fall</p>
Prophylactic spraying on the foliage prior to the onset of South-West monsoon with, Bordeaux mixture 1% at 4000 - 5000 lit/ha using high volume sprayers.Oil based Copper oxy chloride using low volume sprayer or through aerial application.
Two rounds of spray using about 17 to 22 lit of fungicide oil mixture per ha per round (1:6 proportion) at 10 to 15 days interval (or) a single round of spray with about 30 - 37 lit of fungicide oil mixture per ha (1:5 proportion).
<p style="font-weight:bold;font-size:18px;">Secondary leaf fall</p>
The control measures suggested for abnormal leaf fall will check this disease also.
<p style="font-weight:bold;font-size:18px;">Brown root disease</p>
Open up the root system. Completely killed and dried roots may be traced and pruned. Partially affected and healthy roots washed withfungicide Carbendazim (0.1%) solution.  When the fungicide dries up, a thin coating with a wound dressing compound may be given.  Refill the soil and drench the base with fungicide solution.
<p style="font-weight:bold;font-size:18px;">Yield</p>
Rubber yield steeply increases year by year, reaching a peak after 14 years of planting. In South India, the annual yield of rubber is 375 kg/ha from seedlings trees, whereas budded plants yield 800 - 1000 kg/ha.
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