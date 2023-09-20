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
  height:555%;
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
	 top:3850px;
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
<hr style="border-width:20px; border-color:#CF1B5C"><div class="hr-container" style="top:-15px;left:40%"><p>LADY FINGER</p></div></hr>
<p style="font-size:15px">
<p style="font-weight:bold">Varieties</p>
MDU 1, Arka Anamika, Arka Abhay and Parbhani Kranti
<p style="font-weight:bold">Hybrids</p>
CO 3, CO BhH 1
</p> 
<img src="lad1.png" style="height:380px;width:700px;position:relative;left:50px;top:20px;bottom:25px;border-radius:6px">
<p style="font-size:15px">
</br>
<p style="font-weight:bold">Seed rate</p>
Varieties : 300-350 g / ha</br>
Hybrids : 100-150 g / ha
<p style="font-weight:bold">Soil</p>
It is adaptable to a wide range of soils from sandy loam to clayey loam. 
</p>
<img src="lad2.png" style="height:180px;width:280px;position:relative;left:250px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold">Season</p>
Planting can be done during June - August and February
<p style="font-weight:bold">Preparation of field</p>
Plough the land 4 - 5 times and apply FYM 10 kg, neem cake 1 kg, super phosphate 100 g and Furadon 10 g/sq.m during last ploughing. Form ridges and furrows at 45 cm apart.
<p style="font-weight:bold">Seed rate</p>
Varieties : 8.0 kg / ha</br>
Hybrids : 2.5 kg / ha</br>
<p style="font-weight:bold">Seed treatment</p>
Seed treatment with Tricoderma viride @ 4 g/kg or Pseudomonas fluorescens @ 10 g/ kg of seeds and again with 400 g of Azospirillum using starch as adhesive and dried in shade for 20 minutes. Sow three seeds per hill at 30 cm apart and then thin to 2 plants per hill after 10 days.</p>
<img src="lad3.png" style="height:180px;width:230px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
<img src="lad4.png" style="height:180px;width:230px;position:relative;left:250px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold">Sowing</p>
Sow three seeds per hill at 30 cm apart and then thin to 2 plants per hill after 10 days.
<p style="font-weight:bold">Spacing</p>
Seeds are sown at a spacing of 45 x 30 cm.
<p style="font-weight:bold">Irrigation</br>
Application of Fertilizers</p>
Apply Azospirillum and Phosphobacteria each at 2 kg/ha mixed with 100 kg of FYM before sowing.
<p style="font-weight:bold">Varieties</p>
Basal dose FYM @ 25 t/ha, N @ 20 kg, P @ 50 kg and K @ 30 kg/ha as basal and 20 kg N/ha at 30 days after sowing.
</p>
<img src="lad5.png" style="height:180px;width:230px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
<img src="lad6.png" style="height:180px;width:230px;position:relative;left:250px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold">Hybrids</p>
Basal dose FYM @ 40 t / ha, N @ 100 kg, P @ 100 kg and K @ 100 kg/ha as basal and 100 kg N / ha 30 at days after sowing.
<p style="font-weight:bold">Foliar nutrition</p>
1 % urea (10 g/l) + muriate of potash (10 g/l) on 30 and 45 days after planting.
 For hybrids, foliar application of water soluble fertilizer 19-19-19 three times @ 0.5% (5 g/l) at 10 days interval from 30 days after planting
<p style="font-weight:bold">Fertigation schedule for hybrids</p>
Recommended dose: 200:100: 100 kg / ha</br>
75% RD of Phosphorus applied as super phosphate = 469 kg/ha.</br>
 1. 19:19:19 = 54 kg / ha</br>
 2. 13:0:45 = 200 kg / ha</br>
 3. 12:61:0 = 25 kg / ha</br>
 4. Urea = 350 kg / ha</br>
</p>
<img src="lad7.png" style="height:300px;width:520px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold">Weed control</p>
Plough the land to fine tilth. Thoroughly prepare the field with the addition of FYM @ 25 t/ ha and form ridges and furrows at a spacing of 60 cm. Apply 2 kg/ha of Azospirillum and 2 kg/ha of Phosphobacteria by mixing with 50 kg of FYM. Irrigate the furrows and transplant 25 days old seedlings on the sides of ridges. Life irrigation to be given on 3rd day of planting.
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