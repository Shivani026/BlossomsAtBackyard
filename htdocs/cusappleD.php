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
<hr style="border-width:20px; border-color:#75B02F"><div class="hr-container" style="position:relative;left:290px;top:-35px;color:black"><a>Deficiencies and Disorders (Custard apple)</a></div></hr>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Phosphorus</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Phosphorus Deficiency</p>
<img src="cusdef1.jpg" style="border-radius:10px;left:350px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Phosphorus Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Plants look lush blue-green or purplish in color. Mature leaves to be small, initially purplish tints and scorched areas, later become yellow with purple veins and died prematurely.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Soil application of single super phosphate</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Potassium</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Potassium Deficiency</p>
<img src="cusdef2.jpg" style="border-radius:10px;left:345px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Potassium Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Yellowish spots in the margins of new leaves which later spread over the surface and subsequently turned brown, starting with the older leaves. Leaves first become grey at the margin and later interveinally.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Soil application of KCl@300-500g/tree.</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Calcium</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Calcium Deficiency</p>
<img src="cusdef3.jpg" style="border-radius:10px;left:340px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Calcium Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Upper leaf coloration initially was darker green, but, later turning yellow at the edges and died. Fruit showing blossom end rot were found to ripen less rapidly</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Application gypsum@ 50 kg/ha</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Magnesium</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Magnesium Deficiency</p>
<img src="cusdef4.jpg" style="border-radius:10px;left:350px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Magnesium Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Chlorosis of leaves. Interveinal areas became yellow or greenish yellow while leaf margins remained green.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Soil application of dolomite</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Sulphur</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Sulphur Deficiency</p>
<img src="cusdef5.jpg" style="border-radius:10px;left:335px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Sulphur Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Symptoms are somewhat similar to nitrogen deficiency. Younger leaves are affected. Older leaves developd necrosis at tips and margins with development of small purple spots between the veins.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Soil application of gypsum@2-5kg/tree/year</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Boron</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:360px;position:relative">Boron Deficiency</p>
<img src="cusdef6.jpg" style="border-radius:10px;left:340px;position:relative;top:0px;width:250px;height:300px">
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Iron</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:360px;position:relative">Iron Deficiency</p>
<img src="cusdef7.jpg" style="border-radius:10px;left:330px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Iron Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Symptoms are first seen in the youngest leaves. Initially the smallest veins remani green, which produces areticulate pattern of green veins on yellow leaves. The leaves turn completely chlorotic but there is no associated necrosis.</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Soil application of FeSO4@0.5 kg /tree</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Manganese</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:350px;position:relative">Manganese Deficiency</p>
<img src="cusdef8.jpg" style="border-radius:10px;left:350px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Manganese Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Reduction in leaf size and development of interveinal orange-yellow mottling over the tip. Mottling spreads over the whole leaflet turn yellow while the veins remani green. Numerous small, dark brown, necrotic spots with chlorosis in leaflets of very young leaves</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Foliar spray of foliar spray of MnSO4@1%</p>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Zinc</button>
<div class="panel">
<p style="font-size:22px;font-weight:bold;left:370px;position:relative">Zinc Deficiency</p>
<img src="cusdef9.jpg" style="border-radius:10px;left:340px;position:relative;top:0px;width:250px;height:300px">
<p style="font-size:18px;font-weight:bold;">Zinc Deficiency Symptoms</p>
<p style="font-size:18" align="justify">Interveinal chlorosis; shortened internodes; epinastic curvature of leaves</p>
<p style="font-size:18px;font-weight:bold;">Corrective Measure :</p>
<p style="font-size:18" align="justify">Soil application of ZnSO4@ 20kg/tree/year or foliar spray of ZnSO4@0.5%</p>
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