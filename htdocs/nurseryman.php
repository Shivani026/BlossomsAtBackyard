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
  border-color:#179D9F;
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
  height:320%;
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
	 top:2300px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:35%"><p>NURSERY MANAGEMENT</p></div></hr>
<p style="position:relative;top:20px">Nursery is a place where seedlings, cuttings and grafts are raised with care before transplanting.</p>
<p style="font-weight:bold;font-size:18px;">Advantage of raising seedlings in nursery</p>
<ol>
<li>It is very convenient to look after the tender seedlings</li>
<li>It is easy to protect the seedlings from pests and diseases</li>
<li>Economy of land usage (duration in the main field is reduced)</li>
<li>Valuable and very small seeds can be raised effectively without any wastage</li>
<li>Uniform crop stand in the main field can be maintained by selecting healthy, uniform and vigorous seedlings in the nursery itself.</li>
</ol>
<p style="font-weight:bold;font-size:18px;">Preparation of nursery<br>Selection of site</p>
<ol>
<li>The nursery area should be nearer to the water source</li>
<li>Generally, the location should be partially shaded i.e. under the trees. If not, artificial shade is to be provided</li>
<li>It should be well protected from animals</li>
<li>Proper drainage facilities should be provided.</li>
</ol>
<p style="font-weight:bold;font-size:18px;">Selection of soil</p>
A medium textured, loam (or) sand loam soil is preferred. Soil should be rich in organic matter. Soil depth should be preferably by 15-25 cm.
<p style="font-weight:bold;font-size:18px;">Types of nursery bed</p>
a) Flat bed &nbsp b) Raised nursery bed
<p style="font-weight:bold;font-size:18px;">Preparation of raised nursery bed</p>
Selected soil should be worked well to break the clods. Weeds, stones and stubbles should be removed. Height of the raised bed should be 10-15 cm with a width of 1m and length may be according to the requirement and conveniences. Two parts of fine red earth, one part of sand and one part of FYM can be incorporated to each bed to improve aeration and fertility of the soil. Before preparing the bed, the soil should be drenched wit 4 % formaldehyde or 0.3 % copper oxy chloride to kill the pathogenic spores in the soil.
<p style="font-weight:bold;font-size:18px;">Advantage of raised nursery bed</p>
Water movement will be uniform and drainage of excess water is possible (In the case of flat bed water moves from one end to the other and there is possibility of washing away of seeds).
<br>Germination percentage of seeds is normally high. Operations like weeding and plant protection measures are easy.
<p style="font-weight:bold;font-size:18px;">Media for propagating nursery plants</p>
Several materials and combination of different materials are available are media for germinating seeds and rooting cuttings. A good propagating medium should possess the following characters.
<p style="font-weight:bold;font-size:18px;">Potting procedure</p>
<ol>
<li>Wet the seedbed before lifting plants. Life with a ball of earth with as much of the root system intact, as possible. Do not pullout seedlings in the hot sun. Do not allow roots or the soil around the roots to dry.</li>
<li>Fill up pots by putting some crocks first, then a layer of sand (5-8 cm) and finally pot mixture (8-10 cm).</li>
<li>Place the plant with the ball of earth in the centre upon the layer of pot mixture (Place on one side of pots in the case of root stock plants used in inarching)</li>
<li>Put pot mixture around the ball of earth, press as you fill up and level off, leaving one inch head space at top. Do not press over the ball of earth. It will break and damage the roots.</li>
<li>Set the stem of plant at the same height as it was in the seed bed</li>
<li>Immerse pot with plant in a tub of water gently and keep inside water till air bubbles cease to come out. Remove and place the pot under shade of trees.</li>
</ol>
<p style="font-weight:bold;font-size:18px;">Repotting</p>
Repotting is done for changing the soil medium for pot bound plants.
<p style="font-weight:bold;font-size:18px;">Pot bound condition</p>
When the potted plants are grown for more than one season or one year in pot, the root very soon become a tangled mass and exhaust all the nutrient in the limited soil, besides being circumscribed in the limited place. This stage is known as pot bound condition.
<p style="font-weight:bold;font-size:18px;">Repotting procedure</p>
<ol>
<li>It is better to west the potted plant 24 hours earlier to facilitate repotting (removal of plant from pot)</li>
<li>The technique to remove the plant with a ball')f each intact is to keep the right hand palm over the soil, allowing the stem of the plant in between the first fingers and turn the pot upside down holding the pot at the bottom with the left hand and gently knocking the rim of the pot on the edge of table or any other hard surface or even on the bottom edge of another inverted pot. The ball of earth comes out of the pot. If for any reason, it fails to come out, break the pot knocking the sides with a stone or fork and free the soil from it.</li>
<li>Examine the roots, cut neatly with a secateur, the decayed, dead and dried or twisted roots. Reduce the size of the ball of earth around the roots.</li>
<li>Place the plant in the new pot at the same height at which it was in the old pot. Fill up pot with fresh pot mixture and immerse in water.</li>
</ol>
<p style="font-weight:bold;font-size:18px;">General</p>
The initial reaction after potting and repotting is wilting. The transpiration loss has to be checked to help plants revive. Hence keep freshly potted plants under shade and "pot water daily".
After about ten days under shade, the plants should be gradually exposed to sun by keeping them for some hours under sun and then putting them under shade. The period of exposure can be increased every week until finally the plants can be kept in the open. This process is called "hardening".
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