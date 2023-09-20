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
  border-color:#F00E1F;
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
  height:420%;
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
	 top:3000px;
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
<hr style="border-width:20px; border-color:#F00E1F"><div class="hr-container" style="top:-15px;left:41%"><p>BLACK PEPPER</p></div></hr>
<img src="pep1.png" style="height:180px;width:330px;position:relative;left:250px;top:10px;bottom:10px;border-radius:6px">
<p style="font-weight:bold;font-size:18px;">Varieties</p>
Panniyur 1, 2, 3, 4, 5, 6 and 7, Karimunda, Sreekara, Subhakara, Panchami,Pournami, IISR Thevam,IISR Malabar Excel, IISR Girimunda, IISR Sakthi, PLD-2.
<br>Lower elevation and less shady areas- Panniyur 1.<br>
Higher elevation and more shady areas - Karimunda.<br>Inter cropping in Arecanut – Panniyur 5.
<p style="font-weight:bold;font-size:18px;">Soil and climate</p>
Pepper is grown mainly as a rainfed crop. Pepper requires heavy rainfall (150 - 250 cm) high humidity and warm climate.Thrives best on virgin soils rich in humus content and the crop can be grown at elevations up to 1500 m.
<p style="font-weight:bold;font-size:18px;">Season</p>
June – December
<p style="font-weight:bold;font-size:18px;">Propagation</p>
Black pepper vines develop three types of aerial shoots, namely (a) primary stem with long internodes, with adventitious roots which cling to the standards (b) runner shoots which originate from the base of the vine and have long internodes which strike roots at each node and (c) fruit bearing lateral branches. Cuttings are raised mainly from runner shoots, though terminal shoots can also be used. Cuttings from lateral branches are seldom used since they develop a bushy habit. However, rooted lateral branches are useful for raising bush pepper.
<p style="font-weight:bold;font-size:18px;">Production of rooted cuttings<br>Traditional method</p>
 Runner shoots from high yielding and healthy vines are kept coiled on wooden pegs fixed at the base of the vine to prevent the shoots from coming in contact with soil and striking roots. The runner shoots are separated from the vine during February-March and after trimming the leaves, cuttings of 2-3 nodes each are planted either in nursery beds or in polythene bags filled with fertile soil. Adequate shade has to be provided and the polythene bags are to be irrigated frequently. The cuttings become ready for planting during May - June.
<p style="font-weight:bold;font-size:18px;">Rapid multiplication method</p>
An efficient propagation technique developed at Sri Lanka has been modified for adoption in India for quick and easy multiplication of black pepper vines. In this method, a trench of 45 cm depth, 30 cm width and convenient length is made. The trench is filled with rooting medium comprising of forest soil, sand and farm yard manure in 1:1:1 ratio. Split halves of bamboo with septa or split halves of PVC pipes of 1.25-1.50 meter length and 8-10 cm diameter provided with plastic septa at 30 cm intervals are fixed at 45∞ angle on a strong support. Rooted cuttings are planted in the trench at the rate of one cutting for each bamboo split. The lower portions of the bamboo splits are filled with rooting medium (preferably weathered coir dust-farm yard manure mixture in 1:1 ratio) and the growing vine is tied to the bamboo split in such a way so as to keep the nodes pressed to the rooting medium. The tying can be done with dried banana leaf sheath fibers or coir rope. The cuttings are irrigated regularly. As the cuttings grow, the bamboo splits are filled with rooting medium and each node is pressed down to the rooting medium and tied. For rapid growth, a nutrient solution of urea (1 kg), super phosphate (0.75 kg), muriate of potash (0.5 kg) and magnesium sulphate (0.25 kg) in 250 litres of water is to be applied @ 0.25 litre per vine at monthly intervals.
<p style="font-weight:bold;font-size:18px;">Trench method</p>
A simple, cheap and efficient technique for propagating black pepper from single nodes of runner shoots taken from field grown vines has been developed at the institute. A pit of 2.0 meter x 1.0 meter x 0.5 meter size is dug under a cool and shaded area. Single nodes of 8-10 cm length and with their leaf intact, taken from runner shoots of field grown vines are planted in polythene bags (25 cm x 15 cm, 200 gauge) filled at the lower half with a mixture of sand, soil, coir dust and cow dung in equal proportion. The single nodes are to be planted in the bags in such a way that their leaf axil is above the potting mixture. The polythene bags with the planted single nodes are arranged in the pit. After keeping the bags in the pit, the pit should be covered with a polythene sheet. This sheet may be secured in position by placing weights on the corners. The cuttings should be watered at least five times a day with a rose can and the pit should be covered with the polythene sheet immediately after watering. It is advisable to drench the cuttings two-three times with copper oxychloride (2g/litre).<br>
After two-three weeks of planting, the cuttings will start producing roots which are visible through the polythene bags. After the initiation of roots the frequency of watering may be reduced to three-four times a day. After about one month, new shoots start emerging from the leaf axil. At this stage it is advisable to keep the pit open for about one hour per day so that the cuttings would harden and will not dry when they are taken out of the pit. The cuttings can be taken out of the pit after two months of planting and kept in a shaded place and watered twice a day. These cuttings will be ready for field planting after about 2Ω months. By this method 80-85 per cent success can be obtained. Foliar application of nutrient solution will also enhance the growth of the cuttings.
<p style="font-weight:bold;font-size:18px;">Planting</p>
Slopes facing West and South should be avoided.  Pits of 50 cm x 50 cm x 50 cm size are dug at a spacing of 2 to 3 m in either direction (Panniyur 1 - 3 x 3 m).  5 to 10 kg of FYM/Compost is mixed with top soil and the pits are filled.  Rooted cuttings are planted in June - July @ two per standard like Silver oak, Dadap and Jack.  In multitier cropping system, standards should be planted at a spacing of 7 – 8 m. 
<p style="font-weight:bold;font-size:18px;">Manuring</p>
Apply cattle manure or Compost @ 10 kg/vine just before the onset of South West monsoon.  In addition 100 g of N, 40 g of P and 140 g of K per vine are applied in two split doses in the months of May - June and in September - October.  Slaked lime at 500 g per vine is applied in alternate years during May - June.Apply Azospirillum @ 100 g/vine one month after the application of chemical fertilizers. Integrated nutrient management - Inorganic N 50 % of the recommended dose + FYM 10 kg + 50 g Azospirillum + 50 g Phosphobacteria + 200 g VAM per plant.The manures and fertilizers are applied around the vine at a distance of 30 cm from the base and incorporated into the soil.
<p style="font-weight:bold;font-size:18px;">Irrigation</p>
Protective irrigation in basins during December - May at 10 days interval.
<p style="font-weight:bold;font-size:18px;">Plant protection<br>Pests<br>Pollu Beetle and Leaf Caterpillars</p>
Spray Quinalphos 25 EC 2 ml/lit once in July and again in October.
<p style="font-weight:bold;font-size:18px;">Leaf gall and thrips</p>
Spraying Monocrotophos 36 WSC 1.5 ml/lit or Dimethoate 30 EC @ 2 ml/lit or Chlorpyriphos 2 ml/lit or Dichlorvos 76 WSC 1 ml/lit or Phosphomidan 40 SL @ 2 ml/lit three rounds at monthly intervals starting from new flush formation.
<p style="font-weight:bold;font-size:18px;">Top shoot borer</p>
Top shoot borer can be controlled by spraying Monocrotophos or Quinalphos (0.05%) on terminal shoots at monthly intervals (during July – October) to protect emerging new shoots.
<p style="font-weight:bold;font-size:18px;">Harvest:</p>
Harvesting commences from third year onwards. The harvesting season is from November to March. Harvest is done by hand picking the whole spikes when few berries in the spike start turning red. The berries are separated and dipped in hot water (80°C) for one minute and sun dried for 7 to 10 days.
<p style="font-weight:bold;font-size:18px;">Yield</p>
About 2 to 3 kg/vine/year.
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