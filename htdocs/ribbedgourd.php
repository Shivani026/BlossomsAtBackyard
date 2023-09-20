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
  height:480%;
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
	 top:3300px;
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
<hr style="border-width:20px; border-color:#CF1B5C"><div class="hr-container" style="top:-15px;left:40%"><p>RIBBED GOURD</p></div></hr>
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Varieties</p>
Co 1, Co 2, PKM 1.
</p>
<img src="rib1.png" style="height:150px;width:200px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
<img src="rib2.png" style="height:150px;width:200px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
<img src="rib3.png" style="height:150px;width:200px;position:relative;left:220px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;"> &nbsp  Ribbed Gourd &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp Drip irrigated ribbed gourd &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Bandhal System </p>
<img src="rib4.png" style="height:150px;width:200px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px">
<img src="rib5.png" style="height:150px;width:200px;position:relative;left:270px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Field View &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp 	Mulching of ribbed gourd</p>
<img src="rib8.png" style="height:200px;width:700px;position:relative;left:100px;top:20px;bottom:25px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Soil</p>
Sandy loam rich in organic matter with good drainage and pH range from 6.5-7.5.
<p style="font-weight:bold;font-size:20px;">Season</p>
Planting spreads during July and January
<p style="font-weight:bold;font-size:20px;">Seed rate</p>
About 1.5 kg of seeds is required for a hectare.
<p style="font-weight:bold;font-size:20px;">Seed treatment</p>
The seeds are treated with Trichoderma viride 4 g or Pseudomonas fluorescens 10 g / kg of seeds before sowing.
<p style="font-weight:bold;font-size:20px;">Preparation of field</p>
Plough the field to fine tilth.  Dig pits of 30 cm x 30 cm x 30 cm size at 2.5 x 2 m spacing and form basins.
<p style="font-weight:bold;font-size:20px;">Sowing</p>
Sow the seeds (5 seeds / pit) and thin the seedlings to two/ pit after 15 days.
</p>
<img src="rib6.jpg" style="height:150px;width:200px;position:relative;left:180px;top:10px;bottom:10px;border-radius:6px">
<img src="rib7.jpg" style="height:150px;width:200px;position:relative;left:330px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;">  &nbsp &nbsp &nbsp  Ribbed gourd with black polythene mulch  &nbsp &nbsp &nbsp &nbsp &nbspRibbed gourd under pandal system </p>
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Irrigation</p>
Irrigate the basin before dibbling the seeds and thereafter once in a week.
<p style="font-weight:bold;font-size:20px;">Application of fertilizers</p>
Apply 10 kg of FYM, 100 g of NPK 6:12:12 g mixture as basal dose/pit and N @ 10 g/pit at 30 days after sowing.Apply Azospirillum and Phosphobacteria @2 kg/ha and Pseudomonas 2.5 kg/ha along with FYM 50 kg and neem cake @ 100 kg before last ploughing.
<p style="font-weight:bold;font-size:20px;">Drip irrigation</p>
Install drip system with main and sub-main pipes and place the inline lateral tubes at an interval of 1.5 m. Place the drippers in lateral tubes at an interval of 60 cm and 50 cm spacing with 4 LPH and 3.5 LPH capacities respectively.
<p style="font-weight:bold;font-size:20px;">Sowing</p>
Dig pits of size 45 x 45 x 45 cm at spacing of 2 m in row spaced at 1.5 m. Sow three seeds in each pit. After germination, thin to 2 healthy seedlings. Instead of direct sowing, the seeds can be sown in poly bags @ 2 seeds / bag and 15 days after germination, they can be planted @ 2 seedlings per pit.
<p style="font-weight:bold;font-size:20px;">Fertigation</p>
Apply a dose of 250:100:100 kg NPK/ha throughout the cropping period through split application.
<p style="font-weight:bold;font-size:20px;">Fertigation Schedule- Ribbed gourd (Hybrid</p>
Recommended dose: 250:100:100 Kg/ha
</p>
<img src="rib9.png" style="height:300px;width:700px;position:relative;left:100px;top:20px;bottom:25px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">After cultivation</p>
Hoeing is done thrice to control weed population. Provide support for the plants to reach the pandal erected at a height of 2 m.  Spray Ethrel 250 ppm (2.5 ml/10 lit of water) four times commencing from 15th day after sowing at weekly intervals to increase yield.
<p style="font-weight:bold;font-size:20px;">Plant protection</br>PestsBeetles</br>fruit flies and caterpillars</p>
Spray Dichlorvos 76% EC 6.5 ml/10 lit or Trichlorofon 50% EC 1.0 ml/l
<p style="font-weight:bold;font-size:20px;">Diseases</br>Powdery mildew</p>
Powdery mildew can be controlled by spraying Dinocap 1 ml/lit. or Carbendazim 0.5 g/lit.
<p style="font-weight:bold;font-size:20px;">Downy mildew</p>
Downy mildew can be controlled by spraying Mancozeb or Chlorothalonil 2 g/lit twice at 10 days interval.
<p style="font-weight:bold;font-size:20px;">Yield</p>
Average yield is 14 – 15 t/ha
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