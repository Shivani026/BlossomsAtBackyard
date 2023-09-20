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
  height:580%;
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
	 top:4000px;
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
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:40%"><p>ROSE </p></div></hr>
<p style="font-weight:bold">Varieties</p>
<p style="font-size:15px">Edward Rose and Andra Red Rose and Button rose are found mainly under cultivation.<br>
</p>
<img src="rosee1.png" style="height:150px;width:200px;position:relative;left:180px;top:10px;bottom:10px;border-radius:6px">
<img src="rosee2.png" style="height:150px;width:200px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;"> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp Andra Red Rose &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Edward Rose  </p>
<p>
<p style="font-weight:bold">Soil and climate</p>
Well-drained sandy loam with pH of 6-7 is suitable.Bright sunshine for minimum of 6 hours is essential for the cultivation of roses. Day temperature of 260 C and night temperature of 150 C are ideal. It can be grown in the plains of Tamil Nadu where the optimum climate is available. It can be well grown in the plains of Tamil Nadu.
<p style="font-weight:bold">Propagation and planting</p>
Cuttings with 2-3 buds are dipped in IBA or IAA @ 500 ppm. Pits of 45 cm x  45 cm x 45 cm are dug at 2.0 x 1.0 m spacing and 10 kg FYM is added to each pit before planting. 
<p style="font-weight:bold">Irrigation</p>
Irrigation is done once in 2 days until plants establish and once a week thereafter. Avoid salt water for irrigation purpose.
<p style="font-weight:bold">Manuring</p>
After pruning in October and again in July the plants are manured with FYM 10 kg and 6:12:12 g of NPK per plant.
<p style="font-weight:bold">Micronutrients</p>
Foliar application of 0.2% micronutrient mixture containing 20 g MnSO4 + 15 g MgSO4 + 10 g FeSO4 + 5 g B  (2g of the mixture is dissolved in one litre of water) can produce bright coloured flowers.
<p style="font-weight:bold">Biofertilizers</p>
Soil application of 2 kg each of Azospirillum and Phosphobacteria per ha at the time of planting. It is to be mixed with 100kg of FYM and applied in pits.
<p style="font-weight:bold">Aftercultivation</p>
<p style="font-weight:bold">Pruning</p>
The best time of pruning is the period when the activity of rose plant is least and the plant is dormant to near dormant stage. Pruning time will depend on climatic conditions of the particular region. The vigorous past season shoots are cut back to half the length. All the weak, diseased, criss-crossing and unproductive shoots are removed. The cut ends should be protected with Bordeaux or Fytolan paste + Carbaryl 50 WP.
Cut back the vigorous past season shoots to half the length during October to December. All the weak, diseased, criss-crossing and unproductive shoots are removed. The cut ends should be protected with Bordeaux paste or Copper Oxychloride + Carbaryl 50 WP.
<p style="font-weight:bold">Growth regulators</p>
Spray 250ppm of GA3 (30 days after pruning) during early vegetative stage to increase the flower production.

<p style="font-weight:bold">Plant protection</p>
<p style="font-weight:bold">Pests</p>
<p style="font-weight:bold">Rose chaffer beetle</p>
Hand pick Cetonid beetles and destroy during day time. Spray Quinalphos 25 EC @  2 ml/lit. Setup light trap to attract Holotrichia and Anomala spp to have check on the pest.
<p style="font-weight:bold">White  grub :</p>
Set up light to attract Holotrichia and Anomala spp. Spray phosalone 35 EC @ 2 ml/lit.

<p style="font-weight:bold">Red scale</p>
Rub off the scales with cotton soaked in kerosene or diesel. Cut and burn the affected branches. Spray Malathion 50 EC 2 ml/lit at the time of pruning and again during March – April or Apply Carbofuran 3G 5 g/plant or spray Fish oil rosin soap 25 g/lit or Quinalphos 25 EC 2 ml/lit to control the pest.

<p style="font-weight:bold">Mealy bug</p>
Mealy bugs can be controlled by spraying Monocrotophos 2 ml/lit or Methyl parathion 2 ml/lit.

<p style="font-weight:bold">Flower caterpillar</p>
<p style="font-weight:bold">Helicoverpa armigera</p>
Spray Ha NPV 1.5 x 102; PIB/ha to control the borer incidence.
<p style="font-weight:bold">Spodoptera litura</p>
Spray Sl NPV 1.5 x 102 PIB/ha to control the borer incidence.

<p style="font-weight:bold">Bud worm</p>
Bud worms can be controlled by spraying Monocrotophos 36 WSC 2 ml/lit at fortnightly interval during flowering.<br>
<img src="rosee3.png" style="height:150px;width:200px;position:relative;left:180px;top:10px;bottom:10px;border-radius:6px">
<img src="rose4.png" style="height:150px;width:200px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px">
<p style="font-weight:bold">Diseases</p>
<p style="font-weight:bold">Black spot disease (Diplocarpon rosae)</p>
It can be controlled by spraying Carbendazim 1 g/lit twice at fortnightly intervals.
Spray Carbendazim @ 1 g/l twice at fortnightly intervals or Azoxystrobin @ 1g/l
<p style="font-weight:bold">Crop duration</p>
The plants will start flowering in the first year and will give economic yield from the second year onwards.

<p style="font-weight:bold">Season of flowering and harvesting</p>
Flowering will commence from 45 days after pruning. Fully opened flowers are picked early in the morning.

<p style="font-weight:bold">Yield</p>
About 10 lakh flowers/ha/year can be obtained.<br>
<p style="font-weight:bold">Black spot disease (Diplocarpon rosae)</p>
It can be controlled by spraying Carbendazim 1 g/lit twice at fortnightly intervals.
Spray Carbendazim @ 1 g/l twice at fortnightly intervals or Azoxystrobin @ 1g/l
<p style="font-weight:bold">Crop duration</p>
The plants will start flowering in the first year and will give economic yield from the second year onwards.

<p style="font-weight:bold">Season of flowering and harvesting</p>
Flowering will commence from 45 days after pruning. Fully opened flowers are picked early in the morning.

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