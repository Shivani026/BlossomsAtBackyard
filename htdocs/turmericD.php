<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Blossoms at Backyard : Home : Propagation</title>
</head>
<style>
body { 
margin:0; 
overflow-x:hidden;
} 
.bg-img {
  background-image: url("bg26.jpeg");
  background-repeat: repeat-y;
  background-size: cover;
  position: relative;
  height:1020px;
}
hr {
  display: block;
  margin:0;
  border-style: solid;
  border-color:rgba(0,0,0,0);
 }
.hr-container{
	font-family: Merienda One;
	font-size:20px;
	color:white;
	text-align:centre;
	position: absolute;
	top:20px;
	left:43%;
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
  right:80px;
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
  overflow-y:auto;
  overflow-x:hidden;
  top:-25px;
  left:200px;
  padding:14px;
  width:70%;
  height:50%;
  border-radius:10px;
  font-color:white;
  background-color: rgba(254, 249, 190,0.8);
}
/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: rgba(0,0,0,0);
  display:relative;
  top:40px;
  color: black;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  font-family:Merienda One;
  font-size:22px;
}
 .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  padding-bottom:20px;
  background-color:rgba(0,0,0,0);
  display: none;
  overflow: hidden;
  font-family:Merienda One;
  font-size:18px;
}
.img-container {
  position: relative;
  width:60%;
}

.image {
  border:none;
  border-radius:10px;
  display: block;
  width: 40%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height:auto;
  width: 40%;
  opacity: 0;
  transition: .5s ease;
  background-color:#FFF5DA;
  cursor:pointer;
}

.img-container:hover .overlay {
  opacity:0.7;
}
/* overlay text */
.text {
  color: #0F0E0B;
  font-family:Merienda One;
  font-size: 20px;
  position: absolute;
  opacity:0.9;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
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
/* Table*/
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
.footer {
	 position:absolute;
	 top:750px;
	 bottom:0px;
	 width:100%;
	 height:200px;
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
<div class="bg-img">
<hr style="border-width:45px;"> 
<div class="top-container">
  <div class="topnav">
   	  <a href="home.php"><i class='fas fa-home' style='font-size:24px'></i></a>
	  <div class="dropdown">
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
<hr style="border-width:20px; border-color:#75B02F"><div class="hr-container" style="position:relative;left:300px;top:-35px;color:black"><a>Deficiencies and Disorders (Turmeric)</a></div></hr>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Nitrogen</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Nitrogen Deficiency</p>
<img src="turdef1.jpg" style="border-radius:10px;left:340px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Nitrogen Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Pale or yellow green leaves (chlorosis) symptoms appear first in the older leaves.  Reddish tints gradually appear at the leaf margins spread toward the midrib or central vein.  Leaves are small.  Overall growth is markedly reduced. Deficiency results in reduction of rhizome yield.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Application of 140 kg N/ha in the form of Urea in five split doses viz. at planting, 30, 60, 90 and 120 DAP along with 60 kg P2O5 and 60 Kg K2O or foliar spray of DAP 2% or 1% Urea twice at weekly interval.</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Phosphorus</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Phosphorus Deficiency</p>
<img src="turdef2.jpg" style="border-radius:10px;left:350px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Phosphorus Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Reduced growth, color may intensify, browning or purpling in foliage in some plants, thin stems, reduced lateral breaks, loss of lower leaves.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">6kg superphosphate in 100 lit of water-is made previous day evening and  next day clear filtrate collected.  To this add 150g urea, 150g MgSO4, 150g FeSO4, and 100g borax.  Mixture should be sprayed in the interval of 15 days till symptoms disappear.</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Potassium</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Potassium Deficiency</p>
<img src="turdef3.jpg" style="border-radius:10px;left:345px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Potassium Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Reduced growth, shortened internodes, marginal burn or scorch (brown leaf edges), necrotic (dead) spots in the leaf, reduction of lateral breaks and tendency to wilt readily.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Application of K at 90 kg/ha in four splits (basal, 60, 90 and 120 DAP) or foliar spray of K2SO4 at 1% at fortnightly interval.</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Magnesium</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Magnesium Deficiency</p>
<img src="turdef4.jpg" style="border-radius:10px;left:350px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Magnesium Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Symptoms appear on the older leaves.  Older leaves may fall off, or they develop a triangular arrowhead at the base of the leaf, near the stalk.  Reduction in growth, marginal chlorosis, interveinal chlorotis (yellow between the veins) in some species.  Eventually the whole leaf becomes yellow.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Foliar spray of Magnesium sulphate @ 0.5%(5g MgSo4 dissolved in 1 lit of water) in the interval of 15 days on the foliage till the symptoms disappear.</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Sulphur</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Sulphur Deficiency</p>
<img src="turdef5.jpg" style="border-radius:10px;left:335px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Sulphur Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Stunted plant growth, leaves turn to pale yellow, finally chlorosis sysmptoms will occur.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Foliar spray of Magnesium sulphate solution (5gMgSo4 dissolved in 1 lit of water) +10g urea in the interval of 15 days on the foliage till the symptoms disappear</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Iron</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:360px;position:relative">Iron Deficiency</p>
<img src="turdef6.jpg" style="border-radius:10px;left:330px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Iron Deficiency Symptoms</p>
<p style="font-size:18" align="justify">The deficiency of iron shows up first in the young leaves of plants, which develop interveinal chlorosis and it progresses rapidly over the entire leaf.  In severe cases, the leaves turn completely white.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Soil application of FeSO4 at 30kg/ha followed by foliar spray of FeSO4 (2.5 kg/ha) during 3rd, 4th and 5th months.</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Manganese</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Manganese Deficiency</p>
<img src="turdef7.jpg" style="border-radius:10px;left:350px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Manganese Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Symptoms occur on new growth.  Leaves appear mottled, light green to yellow green in-between the veins.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Spray with Manganese Sulphate solution 0.5% twice at meekly intervals.</p>
</div>
</div>
</div>
<div class="footer">
	<div class="container" style="width:1000px;height:120px;font-family:Merienda One;font-size:48px;background-color:rgba(0,0,0,0.0);position:relative;top:-5px;left:40px"><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;position:relative;top:-60;left:40px;color:white;">Blossoms at Backyard</p></div>
	<div><hr style="width:1200px;position:relative;top:-130px;left:60px;border-color:white"></hr></div>
	<div class="container" style="width:500px;height:20px;font-family:Candara Light;font-size:16px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:-120px;left:880px"><a href="Terms.php" style="color:white">Terms of service</a>&nbsp &nbsp &nbsp <a href="directory.php" style="color:white">Directory</a>&nbsp &nbsp &nbsp <a href="FAQ.php" style="color:white">FAQ</a>&nbsp &nbsp &nbsp <a href="events.php" style="color:white">Events</a>
	<div class="container" style="width:350px;height:200px;font-family:Candara Light;font-size:16px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:-40px;left:-800px"><p style="font-weight:bold;font-size:20px">Get in touch with us<br>Contact us at:</p><p>Shivani Awatade<br>Sushmita Paunikar<br>G.S.College of Commerce and Economics, Nagpur<br>Phone No. +07172258700<br>Email us at: blossomsatbackyrd@gmail.com<br>©Blossoms at Backyard 2020</p></div>
	</div>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>