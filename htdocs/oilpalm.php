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
  height:350%;
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
	 top:2500px;
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
<hr style="border-width:20px; border-color:#53302D"><div class="hr-container" style="top:-15px;left:41%"><p>OIL PALM</p></div></hr>
<img src="pal1.png" style="height:400;width:550px;position:relative;left:200px;top:30px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Varieties </p>
 Dura, Tenera, Pisifora
<p style="font-weight:bold;font-size:18px;">Climate:</p>
Temperature is 210 C to 320C, annual rainfall - 200 cm and relative humidity - 75 – 100 %. Altitude – 450 -900 m above MSL.
<p style="font-weight:bold;font-size:18px;">Soil: </p>
Moist deep, loamy soils, rich in humus with good water permeability are suitable. Soil pH - 4 - 6
<p style="font-weight:bold;font-size:18px;">Nursery techniques:</p>
 Fruits are separated from the bunch. Remove the exocarp and mesocarp with knife. Dry the seeds on concrete or wooden floors under shade for 2 days and stored for 3-9 months. Seeds are soaked in water for 5 days (changing the water daily) and spread out to dry for 24 hours. Dried seeds are put in 250 gauge and 23 X 13 cm size polythene bags filled with top soil, sand and well decomposed cattle manure in equal proportions and placed for germination. Germination (90-95 %) starts 10-12 days. Apply fertilizer mixture containing 15:15:6 of NPK @ 8 g in 5 litres of water for 100 seedlings.<br>
<img src="pal4.png" style="height:180;width:300px;position:relative;left:250px;top:30px;bottom:10px;border-radius:6px"><br>
<br><p style="font-weight:bold;font-size:18px;">Irrigation </p>
Yielding palm of 3 years age and above – minimum of 150 litres/day.Drip irrigation: 5 hrs of irrigation per day using 4 drippers per palm @ 8 litres of water /hr/dripper.
<p style="font-weight:bold;font-size:18px;">Manuring</p>
For five year old palm, apply 50 kg compost of FYM or grenn leaves may be applied.
<p style="font-weight:bold;font-size:18px;">Plant Protection<br>Pests:<br>Rhinoceros beetle</p>
Trap the adults with fermented castor cake or pheromone bait. Use Bio agents like virus (Baculovirus oryctes) and Fungi (Metarrihizium anisopliae). Treat the compost pit with Carbaryl or Quinalphos @ 0.025 % to kill the young stages of pest.
<p style="font-weight:bold;font-size:18px;">Red palm weevil:</p>
Removal of damaged and rotten bunches and apply tar to the wounds and cuts on the stem portion to avoid egg laying. Trap the adult beetles using pheromone baits. Root feeding of Monocrotophos (10ml of insecticide in 10 ml of water).
<p style="font-weight:bold;font-size:18px;">Case worm: </p>
Root feeding of Monocrotophos (10ml of insecticide in 10 ml of water).
<p style="font-weight:bold;font-size:18px;">Diseases:<br>Stem wet rot:</p>
Removal of infected portion and protective covering with Carbendazim (1%) + Monocrotophos (1ml) paste.
<p style="font-weight:bold;font-size:18px;">Bud rot disease: </p>
The affected crown should be removed and drenched with Carbendazim or Thiram @ 0.1 %.
<p style="font-weight:bold;font-size:18px;">Basal stem rot:</p>
 Removal and destruction of diseased palms. Apply 5 kg of Neem cake per year per tree.Root feeding with Calixin 10 ml or 10 g Aureofungin sol in 100 ml of water per tree per year.
<p style="font-weight:bold;font-size:18px;">Harvesting:</p>
First harvest can be done 3.5 to 4 years after planting. Few ripe fruits are loose/fall off indicates the bunch is ready for harvest. In Young palms, Chisel harvesting is followed. If palms become taller (from 10th year onwards), then harvesting is done by hook. Harvesting rounds should be made as frequent as possible to avoid over ripening of bunches. Harvesting rounds of 10-12 days are generally practiced. During rainy season harvesting rounds of 6-7 days are followed.
<p style="font-weight:bold;font-size:18px;">Yield:</p>
5 – 30 tonnes of fresh fruit bunches/ hectare.
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