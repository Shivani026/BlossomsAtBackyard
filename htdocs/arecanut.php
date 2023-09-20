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
  height:380%;
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
	 top:2700px;
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
<hr style="border-width:20px; border-color:#53302D"><div class="hr-container" style="top:-15px;left:41%"><p>ARECANUT</p></div></hr>
<img src="are1.png" style="height:180;width:650px;position:relative;left:120px;top:30px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Varieties</p>
Mangala, Sumangala, Subamangala, Mohitnagar, Srimangala, Samruthi (Andaman), Hirehalli dwarf, VTLAH 1, 2 and Thirthahalli dwarf.<br>
<img src="are2.png" style="height:450;width:350px;position:relative;left:250px;top:30px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Soil and climate</p>
Arecanut is capable of growing in a variety of soils. It thrives best in well drained soils. Adequate protection from exposure to South-Western sun is essential to avoid sun-scorch.  Quick growing shade trees have to be planted on the southern and western sides well in advance of planting seedlings. It is sensitive to moisture deficit and should be grown where adequate water facilities are available.Grows in a wide range of temperature ranging from minimum of 40C to a maximum of 400C. Altitude upto 1000 m above Msl. Rainfall – 750 – 4500 mm.
<p style="font-weight:bold;font-size:18px;">Season</p>
June – December is found to be the optimum.
<p style="font-weight:bold;font-size:18px;">Seeds and sowing</p>
For raising seedlings seed nuts from pre-marked and pre-potent mother palms of outstanding performance are selected and sown at a spacing of 5 - 6 cm apart in sand beds under partial shade with their stalk end pointing upwards.  After the sprouts have produced two to three leaves, they are transplanted to a polythene bag 30 x 10 cm filled with forest soil and are allowed to grow for 12 to 18 months under partial shade. The seedlings can also be transplanted in secondary nursery beds with a spacing of 30 cm on either side. Periodical watering should be given.
<p style="font-weight:bold;font-size:18px;">Planting</p>
Dwarf and compact seedlings with more number of leaves should be selected. Seedlings of 1 - 2 years age are planted in pits of about 90 cm x 90 cm x 90 cm at a spacing of 2.75 m either way and covered with soil to the collar level and pressed around.  Provide shade during summer months. Growing Banana or other crops in advance may also provide shade.
<p style="font-weight:bold;font-size:18px;">Irrigation</p>
Irrigate weekly once during November – February, once in 4 days during March – May. Flood irrigation 175 lit/ tree/ day. In drip irrigation 16 – 20 lit/ tree/ day.
<p style="font-weight:bold;font-size:18px;">Manuring</p>
Apply to each bearing palm (5 years and above) 10 - 15 kg of FYM or green leaf. 100:40:140 g of NPK/ tree/ year. To palms less than five years old, half of the above dose is recommended. Manures are applied during January - February after the North - East monsoon in a basin of 0.75-1.00 m radius around the tree to a depth of 20 - 30 cm.
<p style="font-weight:bold;font-size:18px;">Aftercultivation</p>
Weeding is done twice or thrice a year by spade digging.  Wherever the land is sloppy, terracing has to be done to prevent soil erosion.
<p style="font-weight:bold;font-size:18px;">Diseases<br>Bud rot or Mahali disease</p>
Infected tissues of the bud should be scooped off and treated with 10 % Bordeaux paste. Destruction and removal of seed palms and also bunches affected by Mahali and drenching crowns of surrounding healthy palms with 1 % Bordeaux mixture would help in minimizing the incidence of the disease.
<p style="font-weight:bold;font-size:18px;">Foot rot or Anabe</p>
Affected palms have to be isolated by digging trenches all round. The severely affected palms should be cut and destroyed. The stumps should be pulled out by digging and the drainage improved.Soil application of neem cake @ 2 kg / palm / year followed by root feeding with 125 ml of 1.5 % (15 ml/litre of water) Tridemorph at 3 months interval or Soil drenching of Bordeaux mixture (1%).
<p style="font-weight:bold;font-size:18px;">Stem breaking</p>
Wrap up of the green portion of the stem which is exposed to the South-West sun to protect against sun-scorch.
<p style="font-weight:bold;font-size:18px;">Leaf spot</p>
Foliar spray with Bordeaux mixture 1 % or 0.2 % Dithane M 45
<p style="font-weight:bold;font-size:18px;">Harvest</p>
The bearing starts after 5 years of planting. Nuts are harvested when they are three quarters ripe. The number of harvests will vary from three to five in one year depending upon the season and place of cultivation.
<p style="font-weight:bold;font-size:18px;">Yield</p>
An average of about 1250 kg/ha can be obtained.
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