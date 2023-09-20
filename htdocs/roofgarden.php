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
  height:460%;
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
	 top:3200px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:41%"><p>ROOF GARDEN</p></div></hr>
<p style="font-weight:bold;font-size:18px;">Introduction:</p>
Green roofs offer several ecological, economic and other benefits to the urban environment. These include mitigation of the urban heat island effect, provision of natural habitat for plants and animals, reduction of dust, smog and noise levels, improved storm water management and water quality and reduced energy use. Green roofs also provide owner incentives such as increased life of roofs and enhanced quality of life.
<img src="rof1.png" style="height:250px;width:750px;position:relative;left:75px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Types:</p>
Green roof substrate is the key component of any green roof system. Green roof is divided into two types:<br>
1.Extensive Roof / Green roofs<br>
2.Intensive Roof(Roof Garden)<br>
<img src="rof2.png" style="height:200px;width:750px;position:relative;left:75px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Building and installation of roof gardens:</p>
<ul>
<li>Layers of roof garden</li>
<li>Water proofing</li>
<li>Drainage layer</li>
<li>Growing media</li>
<li>Plant selection</li>
<li>Irrigation</li>
</ul>
<p style="font-weight:bold;font-size:18px;">Layers of roof garden:</p>
Roof garden employs a multilayer system, including a waterproof membrane, drainage layers, geotextile layer, specialised soil medium, soil stabiliser, and a selection of appropriate plant species and varieties that best tolerates the often extreme environmental conditions found in a rooftop setting.
<p style="font-weight:bold;font-size:18px;">Installation:</p>
1.Roof deck water proofing
<br>2.Protection layer is laid to avoid root penetration to the concrete roof
<br>3.Installation of draincells
<br>4.After installation of drain cells
<br>5.Installation of filter layer- geotexile sheet
<br>6.Substrate is poured over the sheet and leveled
<br>7.Design and planting
<br>8.Vegetation after planting
<p style="font-weight:bold;font-size:18px;">Water proof membrane:</p>
Water proofing is the area that is responsible for the most litigation. The structure of the building will determine water proofing design and installation. There are many kinds of waterproof membrane. Some membranes have added root retardants which acts as root barrier.
<p style="font-weight:bold;font-size:18px;">Drainage layer:</p>
The purpose of drainage systems is to facilitate water runoff from the roof to prevent structural collapse and plants from drowning while retaining enough moisture to support plant life. The roof drainage should be integrated into the building drainage system. Drainage facilities must be capable of collecting both overflow from the drainage course and surface water from the vegetation support course and of conveying it away.<br><br>
The drainage system should be permanent and cover the entire roof area. Water retention may be desirable as an environmental mandate. This may require:<br>
<br>Increased drainage cup size (versi cells)
<br>A water retention layer
<br>Engineered growing medium
<p style="font-weight:bold;font-size:18px;">Filter sheet:</p>
Drains water and retains the growing media and roots
<p style="font-weight:bold;font-size:18px;">Growing medium:</p>
Growing medium selection is critical to the long and short term success of a green roof. The following factors should be considered for selecting growing medium :<br>
<ul>
<li>Load bearing capacity</li>
<li>Slope</li>
<li>Climate</li>
<li>Drainage</li>
<li>Plant species</li>
</ul><br>
Natural mineral components of roof garden substrate include sand, clay, lava, pumice, gravel, etc. Artificial or modified mineral components such as perlite, vermiculite, etc., are used in roof garden. Organic materials such as peat, composts are also added to the substrate formulation.The light weight soil amendments reduce substrate weight and support plant growth. The pH should be 5.5 -8. the air content and water storage capacity should be more than 20% and 45% by volume.
<p style="font-weight:bold;font-size:18px;">Plant species selection:</p>
Plant species selection is dependent on a number of factors:
<ul>
<li>Maintenance investment and resources</li>
<li>Aesthetics</li>
<li>Climate and weather</li>
<li>Structural load bearing</li>
<li>Roof type</li>
<li>Plant growth rate and nutrient demand</li>
<li>Supply and availability</li>
</ul>
<br>Different depth of the substrate supports different vegetation. For example, in extensive green roof, moss and sedum can be grown in 4 – 10 cm depth and moss, sedum and herbaceous plants can be grown in 5 – 11 cm depth.  In a depth of 15 – 25 cm, grass and herbaceous plants can be grown.In roof garden, lawn shrubs, coppices and trees can be grown. Trees can be grown in more than 50 cm depth of the growing medium.
<p style="font-weight:bold;font-size:18px;">Irrigation:</p>
Additional watering should be carried out regularly at roof garden. This may be provided by using a hose, sprinkler type or drip type hoses, or overhead irrigation system or automated watering system.
<p style="font-weight:bold;font-size:18px;">Benefits:</p>
<ul>
<li>Aesthetic effects
<li>Acts as natural insulation for hot and cold air and a save energy for your building</li>
<li>Reduces CO2 levels and increases oxygen and improved air quality</li>
<li>Improves thermal insulation and energy efficiency</li>
<li>Provides protection to buildings from adverse temperature and hence improves the life expectancy of the buildings</li>
<li>Mitigate urban island heat effect</li>
<li>It  holds rain water, providing food and shelter for wildlife</li>
</ul>
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