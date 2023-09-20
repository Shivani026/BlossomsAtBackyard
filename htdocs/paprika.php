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
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
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
<hr style="border-width:20px; border-color:#CF1B5C"><div class="hr-container" style="top:-15px;left:35%"><p>EGGPLANT(BRINJAL)</p></div></hr>
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Varieties</p>
CO 1, CO 2</br>
MDU 1, PKM 1</br>
PLR 1,PLR (B) 2</br>
KKM 1, PPI 1</br>
VRM1, COBH 1 and COBH 2</br>
</p> 
<img src="brin1.png" style="height:360px;width:700px;position:relative;left:50px;top:20px;bottom:25px;border-radius:6px">
<img src="brin2.png" style="height:360px;width:700px;position:relative;left:50px;top:20px;bottom:25px;border-radius:6px">
<img src="brin3.png" style="height:360px;width:700px;position:relative;left:50px;top:20px;bottom:25px;border-radius:6px">
<img src="brin4.png" style="height:360px;width:700px;position:relative;left:50px;top:20px;bottom:25px;border-radius:6px">
<img src="brin5.png" style="height:360px;width:700px;position:relative;left:50px;top:20px;bottom:25px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Seed rate</p>
 Varieties : 400 g / ha</br>
            Hybrids : 200 g / ha
<p style="font-weight:bold;font-size:20px;">Seed treatment</p>
Treat the seeds with Trichoderma viride @ 4 g / kg or Pseudomonas fluorescens @ 10 g / kg of seed.</br>
the seeds with Azospirillum @ 40 g / 400 g of seeds using rice gruel as adhesive.</br>
Irrigate with rose can. In raised nursery beds, sow the seeds in lines at 10 cm apart and cover with sand.</br>
Transplant the seedlings 30 – 35 days after sowing at 60 cm apart in the ridges
</p>
<img src="brin6.png" style="height:180px;width:230px;position:relative;left:300px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Field preparation</p>
Thoroughly prepare the field with the addition of FYM @ 25 t / ha and form ridges and furrows at a spacing of 60 cm.</br>
Apply 2 kg / ha of Azospirillum and 2 kg / ha of Phosphobacteria by mixing with 50 kg of FYM.</br>
Irrigate the furrows and transplant 30-35 days old seedlings at 60 cm apart on the ridges.</br>
<p style="font-weight:bold;font-size:20px;">Spacing</p>
Varieties : 60 x 60 cm</br>
Hybrids : 90 x 60 cm
<p style="font-weight:bold;font-size:20px;">Manuring</p>
<ul>
<li>Apply 2 kg each of Azospirillum and Phosphobacteria in the main field at planting.</li>
<p style="font-weight:bold;font-size:20px;">Varieties</p>
<li>Basal dose : FYM 25 t/ha, NPK 50:50:30 kg/ ha.</li>
<li>Top dressing : 50 kg N/ha on 30th day of planting or during earthing up.</li>
<p style="font-weight:bold;font-size:20px;">Hybrids</p>
<li>Basal dose : FYM 25 t/ha, NPK 100:150:100 kg/ha.</li>
<li>Top dressing : 100 kg N/ha on 30th day of planting or during earthing up.</li>
</ul>
</p>
<img src="brin7.png" style="height:180px;width:230px;position:relative;left:300px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Fertigation schedule for hybrids</p>
Recommended dose: 200:150: 100 kg / ha</br>
75% RD of Phosphorus applied as superphosphate = 703 kg / ha.</br>
 1. 19:19:19 = 79 kg / ha ;  2. 13:0:45 = 189 kg/ ha ;  3. 12:61:0 = 37 kg / ha ;  4. Urea = 340 kg / ha
</p>
<img src="brin8.png" style="height:330px;width:580px;position:relative;left:180px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Harvest</p>
<ul>
<li>Harvest can be done 55 – 60 days after transplanting.</li>
<li>Fruits are harvested at tender stage at 4 – 5 days intervals.</li>
<p style="font-weight:bold;font-size:20px;">Yield</p>
<li>Varieties:25 to 30 t/ha</li>
<li>Hybrids:60 - 80 t/ha</li>
</ul>
</p>
<img src="brin9.png" style="height:180px;width:230px;position:relative;left:300px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Soil</p>
Well drained soil rich in organic matter with pH of 6.5-7.5.
<p style="font-weight:bold;font-size:20px;">Season of Sowing</p>
December – January and May – June.
<p style="font-weight:bold;font-size:20px;">Nursery bed preparation</p>
Apply FYM 10 kg, neem cake 1 kg, VAM 50 g, enriched super phosphate 100 g and furadon 10 g per square metre before sowing. Area required for raising seedling for planting 1.0 ha is 100 sq.m.
</p>
<img src="brin10.jpg" style="height:180px;width:230px;position:relative;left:300px;top:10px;bottom:10px;border-radius:6px">
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