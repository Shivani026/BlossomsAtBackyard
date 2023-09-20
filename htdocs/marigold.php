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
  height:650%;
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
	 top:4450px;
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
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:40%"><p>MARIGOLD</p></div></hr>
<p style="font-weight:bold">Varieties</p>
Local types (orange & yellow), Pusa Narangi Gainda, Pusa Basanthi Gainda (IARI varieties) and MDU 1 can be cultivated.</p>
<img src="mari1.jpg" style="height:150px;width:250px;position:relative;left:120px;top:10px;bottom:10px;border-radius:6px">
<img src="mari2.jpg" style="height:150px;width:250px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;position:relative;top:20px;">Soil</p>
Well drained loamy soil is found suitable. The soil pH should be 7.0 to 7.5. Saline and acidic soils are not suitable for cultivation.
<p style="font-weight:bold;position:relative;top:20px;">Seeds and sowing</p>
The seeds are sown throughout the year. Nursery is raised with 1.5 kg seeds/ha and the seedlings are transplanted after four weeks on one side of the ridge at 45 x 35 cm spacing. Treat the seeds with Azospirillum (200 g in 50 ml of rice gruel) before sowing
<p style="font-weight:bold;position:relative;top:20px;">Irrigation</p>
Irrigation is done once in a week or as and when necessary. Water stagnation should be avoided.
<p style="font-weight:bold;position:relative;top:20px;">Manuring</p>
During last ploughing, incorporate 25t/ha of FYM. Apply 45:90:75 kg NPK/ha as basal and 45 kg N/ha as top dressing 45 days after planting.
<p style="font-weight:bold;position:relative;top:20px;">After cultivation</p>
Weeding should be done as and when necessary. Irrigation should be given immediately after planting and life irrigation on third day after planting. Water stagnation should be avoided. Based on the soil moisture condition, irrigation should be done.
<p style="font-weight:bold;position:relative;top:20px;">Nipping/tipping</p>
Thirty days after planting terminal portion should be tipped / removed to encourage the branching.
<p style="font-weight:bold;position:relative;top:20px;">Plant protection</br>Pests:</br>Mealy bug:</br>Damage symptom:</br></p>
Mealy bugs are crowdly present in young shoots, stem and leaves. Flattening and crinkled with dark green leaves. It’s segregate honey like substances because of that leaves are converted into black sooty mould. Apical parts of the shoots show retarted growth.
</p>
<img src="mari3.jpg" style="height:200px;width:300px;position:relative;left:120px;top:10px;bottom:10px;border-radius:6px">
<img src="mari4.jpg" style="height:200px;width:300px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:200px;">fig. Mealy bug infestation in flower and shoots </p>
<p style="font-size:15px">
<p style="font-weight:bold;position:relative;top:20px;">Control measures</p>
<ul>
<li>Spray prophenophos or dimethoate @ 2ml/litre.</li>
<li>Spray Fish oil rosin soap @ 25g/litre</li>
</ul>
<p style="font-weight:bold;position:relative;top:20px;">Thrips - Thrips tabaci:</br>Damage symptom: </p>
Discoloured or distorted plant tissue is clues that thrips were present. Thrips prefer to feed in rapidly growing tissue. Damaged leaves become papery and distorted. Infested terminals may discolour, rolled and drop leaves prematurely.
Petals may exhibit “colour break,” which is pale tissue that was killed by thrips feeding before buds opened.
<p style="font-weight:bold;position:relative;top:20px;">Control measures</p>
<ul>
<li>Set up yellow sticky trap 20 per acre</li>
<li>Released Amphelicies cucumeris spider parasitoid.</li>
<li>Fipronil 1.5ml/litre or spiromesifen 0.75ml/litre or azardiractin 3ml/litre</li>
</ul>
<p style="font-weight:bold;position:relative;top:20px;">Spider</p>
It can be controlled by spraying Kelthane 1 ml/lit of water
<p style="font-weight:bold;position:relative;top:20px;">Leaf spot</p>
Leaf spot can be controlled by spraying Bavistin 1 g / lit of water
<p style="font-weight:bold;position:relative;top:20px;">Root rot</p>
Drench 1 g/lit of Bavisitin to control root rot.
<p style="font-weight:bold;position:relative;top:20px;">Crop duration</p>
The crop duration is about 130 - 150 days.
<p style="font-weight:bold;position:relative;top:20px;">Harvest</p>
Flowers are picked once in 3 days beginning from 60 days after planting.
<p style="font-weight:bold;position:relative;top:20px;">Yield</p>
The average yield is about 18 t/ha.
<p style="font-weight:bold;position:relative;top:20px;font-size:24px">Precision production technology</p>
<p style="font-weight:bold;position:relative;top:20px;">Hybrid:</p>
L3 hybrid (cultivated for xanthophyll extraction).
<p style="font-weight:bold;position:relative;top:20px;">Seeds and sowing:</p>
Sown throughout the year. Seed rate is 100 g/acre. Seeds are sown in protrays and 20 day old seedlings are transplanted on raised beds at 90 x 22.5 cm spacing to accommodate 44,400 plants/ha. Treat the seedlings with Pseudomonas fluorescens @ 0.5% before planting.
<p style="font-weight:bold;position:relative;top:20px;">Fertigation:</p>
Recommended Dose of Fertilizer (RDF) is 90: 90:75kg NPK/ha. 75% RDF is applied through fertigation [Water Soluble Fertilizer (WSF) application through drip irrigation]. Water Soluble Fertilizers such as Polyfeed (19:19:19), Potassium Nitrate (13:0:45) and Urea (46% N) can be used
<p style="font-weight:bold;position:relative;top:20px;">Biofertilizers:</p>
Soil application of2 kg each of Azospirillum and Phosphobacteria per ha at the time of planting. Biofertilizers are to be mixed with 100kg of FYM and applied.
<p style="font-weight:bold;position:relative;top:20px;">Micronutrients: </p>
Foliar spray of FeSO4 0.5% + ZnSO4 0.5% on 30th and 45th day after transplanting.
<p style="font-weight:bold;position:relative;top:20px;">Biostimulants: </p>
SprayHumic acid @ 0.2% on 30 & 45 days after transplanting.
<p style="font-weight:bold;position:relative;top:20px;">Plant protection</br>Pests:</br>Cut worms and Helicoverpa armigera</p>
Spray spinosad 45 SC @ 0.75ml/litre. Spinosad 45 SC is quickly biodegradable and is accepted by the importers
<p style="font-weight:bold;position:relative;top:20px;">Mealy bug:</p>
Spray Prophenophos @ 2ml/l Fish oil rosin soap @ 25 g/l
<p style="font-weight:bold;position:relative;top:20px;">Bud borer:</p>
Spray Spinosad @ 0.75 ml / l
<p style="font-weight:bold;position:relative;top:20px;">Leaf miner / thrips:</p>
 Spray Fipronil @ 1.5ml/l
<p style="font-weight:bold;position:relative;top:20px;">Red spider Mite:</p>
 Spray Abamectin 1.9 EC @ 0.5 ml/l or Fenazaquin @ 2 ml/l or Exodus (natural lactones) @ 2 ml/l
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