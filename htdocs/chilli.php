<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Blossoms at Backyard : Home : Vegetable Crops</title>
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
  border-color:#CF1B5C;
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
  height:730%;
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
	 top:5000px;
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
<div class="text-container" style="  font-family: Merienda One;">
<hr style="border-width:20px; border-color:#CF1B5C"><div class="hr-container" style="top:-15px;left:40%"><p>CHILLI</p></div></hr>
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Varieties</p>
K 1, K 2</br>
CO1, CO 2, CO 4 (vegetable type)</br>
PKM 1</br>
PMK 1 (for semi-dry conditions in Southern Districts)</br>
PLR 1 (for coastal regions of North - East Tamil Nadu) and</br>
KKM (Ch) 1</br>
<p style="font-weight:bold;font-size:20px;">Hybrids</p>
Chilli Hybrid CO 1
<p style="font-weight:bold;font-size:20px;">Protected nursery</p>
<ul>
<li>Prepare the nursery area of 3 cents with slanting slope of 2 % for the seedling production to cover 1 ha.</ul>
<li>Cover the nursery area with 50 % shade net and cover the sides using 40 / 50 mesh insect proof nylon net.</ul>
<li>Form raised beds of 1 m width and convenient length and place HDPV pipes at 2m interval for further protection with polythene sheets during rainy months.</ul>
<li>Mix sterilized cocopeat @ 300 kg with 5 kg neem cake along with Azospirillum and phosphobacteria each @ 1 kg.</ul>
<li>Approximately 1.2 kg of cocopeat is required for filling one protay. 300 protrays (98 cells) are required for the production of 29,000 seedlings, which are required for one hectare adopting a spacing of 90 x 60 x 45 cm in a paired row system.</ul>
<li>Nursery Bed Preparation</ul>
<li>Sow the treated seed in protrays @ 1 seed per cell.</ul>
<li>Cover the seed with cocopeat and keep the trays one above the other and cover with a polythene sheet till germination starts.</ul>
<li>After 6 days place the protrays with germinated seedlings individually on the raised beds inside the shade net.</ul>
<li>Water with rose can everyday upto seed germination. Drench with 19:19:19 @ 0.5% (5g/l) at 18 days after sowing.</ul>
</ul>
</p>
<img src="chil1.png" style="height:180px;width:230px;position:relative;left:300px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Manuring</br>Varieties</p>
Basal dose : FYM 25 t/ha, NPK 30:60:30 kg/ ha.</br>
Potassium as K2SO4 for quality improvement. Application of potassium in the form of potassium sulphate will increase quality of chilli.</br>
Top dressing : 30 kg N/ha in equal splits on 30, 60 and 90 days after planting.</br>
<p style="font-weight:bold;font-size:20px;">Hybrids</p>
Basal dose : FYM 30 t / ha, NPK 30:80:80 kg / ha.</br>
Top dressing : 30 kg N / ha in equal splits on 30, 60 and 90 days after planting.</br>
<p style="font-weight:bold;font-size:20px;">Fertigation schedule (CHILLI F1 HYBRID): Recommended Dose: 120:80:80 kg / ha</p>
75% RD of Phosporous applied as superphosphate = 375 kg / ha</br>
1. 19:19:19 = 42 kg/ha ; 2. 13:0:45 = 160 kg/ha ; 3. 12:61:0 = 20 kg/ha ; 4. Urea = 193 kg/ha</p>
<img src="chil2.png" style="height:180px;width:230px;position:relative;left:300px;top:10px;bottom:10px;border-radius:6px">
<img src="chil3.png" style="height:360px;width:800px;position:relative;left:50px;top:20px;bottom:25px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Harvest</p>
Harvesting can be done 75 days after transplanting. First two picking yield green chilli and subsequently yield red ripe fruits.
<p style="font-weight:bold;font-size:20px;">Yield</p>
<ul>
<li>Varieties : 2 - 3 t/ha of dry pods or 10 - 15 t/ha of green chillies.</li>
<li>Hybrids: 25 t / ha of green chillies.</li>
</ul>
</p>
<img src="chil4.png" style="height:180px;width:230px;position:relative;left:300px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Soil</p>
Well drained loamy soils rich in organic matter with pH range 6.5-7.5.
<p style="font-weight:bold;font-size:20px;">Season of sowing</p>
<ol>
<li>January - February</li>
<li>June - July</li>
<li>September- October</li>
</ol>
<p style="font-weight:bold;font-size:20px;">Seed rate</p>
Varieties: 1.0 kg / ha.</br>
Hybrids: 200 - 250 g / ha.</br>
Nursery area: 100 sq.m / ha.</br>
<p style="font-weight:bold;font-size:20px;">Seed treatment</p>
<ul>
<li>Treat the seeds with Trichoderma viride @ 4 g / kg or Pseudomonas fluorescens @ 10 g/ kg and sow in lines spaced at 10 cm in raised nursery beds and cover with sand.</li>
<li>Watering with rose can has to be done daily.</li>
<li>Drench the nursery with Copper oxychloride @ 2.5 g/l of water at 15 days interval against damping off disease. Apply Carbofuran 3 G at 10 g/sq.m. at sowing.</li>
</ul>
</p>
<img src="chil5.png" style="height:180px;width:230px;position:relative;left:300px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Field preparation</p>
Thoroughly prepare the field with the addition of FYM @ 25 t/ ha and form ridges and furrows at a spacing of 60 cm. Apply 2 kg/ha of Azospirillum and 2 kg / ha of Phosphobacteria by mixing with 20 kg of FYM. Irrigate the furrows and transplant 40-45 days old seedlings, with the ball of earth on the ridges.
<p style="font-weight:bold;font-size:20px;">Spacing</p>
Varieties : 60 x 45 cm
Hybrids : 75 x 60 cm
<p style="font-weight:bold;font-size:20px;">Weed control</p>
Apply Pendimethalin 1.0 kg a.i. / ha or Fluchloralin 1.0 kg a.i. / ha as pre-emergece herbicide followed by hand weeding once 30 days after planting.
<p style="font-weight:bold;font-size:20px;">Irrigation</p>
Irrigate is done at weekly intervals.
<p style="font-weight:bold;font-size:20px;">Layout and planting for drip irrigation and fertigation</p>
<ul>
<li>Apply FYM @ 25 t / ha as basal before last ploughing.</li>
<li>Apply 2 kg / ha of Azospirillum and 2 kg/ha Phosphobacteria by mixing with 20 kg of FYM.</li>
<li>Apply 75 % total recommended dose of superphosphate i.e. 375 kg / ha as basal.</li>
<li>Install the drip irrigation with main and sub main pipes and place lateral tubes at an interval of 1.5 m.</li>
<li>Place the drippers in lateral tubes at an interval of 60 cm and 50 cm spacing with 4 LPH and 3.5 LPH capacities respectively.</li>
<li>Form raised beds of 120 cm width at an interval of 30 cm and place the laterals at the centre of the each bed.</li>
<li>Before planting wet the beds using drip system for 8-12 hrs.</li>
<li>Planting to be done at a spacing of 90 x 60 x 45 cm in the paired row system, using ropes marked at 60 cm spacing.</li>
<li>Spray Pendimethalin 1.0 kg a.i. / ha or Fluchloralin 1.0 kg a.i / ha as pre-emergence herbicide at 3rd day after planting.</li>
<li>Gap filling to be done at 7th day after transplanting.</li>
</ul>
<p style="font-weight:bold;font-size:20px;">Effect of Endo root soluble and Mycorrhizae on Chilli</p>
Apply 250g of Endo Roots Soluble in two splits doses at 15 DAT and 45 DAT along with 100 % N and K and 50% P for higher yield and saving of Phosphorous.
Apply 250g of Mycorrhiza in two splits at transplanting and 30 DAT along with 100% N and K and 50% P for higher yield and saving of Phosphorous.
<p style="font-weight:bold;font-size:20px;">Growth regulators</p>
Apply 250g of Endo Roots Soluble in two splits doses at 15 DAT and 45 DAT along with 100 % N and K and 50% P for higher yield and saving of Phosphorous.
Apply 250g of Mycorrhiza in two splits at transplanting and 30 DAT along with 100% N and K and 50% P for higher yield and saving of Phosphorous.
<p style="font-weight:bold;font-size:20px;">Micronutrient spray</p>
Foliar spray of Zn SO4 @ 0.5 per cent thrice at 10 days interval from 40 days after planting.
Spray 19:19:19 + Mn @ 1 % at 60 days after planting.
<p style="font-weight:bold;font-size:20px;">Intercropping</p>
The intercrops like onion and coriander can be grown for getting additional income. It can also help to control the weed population.
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