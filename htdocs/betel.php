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
<hr style="border-width:20px; border-color:#53302D"><div class="hr-container" style="top:-15px;left:41%"><p>BETELVINE</p></div></hr>
<img src="bet1.png" style="height:220;width:200px;position:relative;left:330px;top:10px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Varieties</p>
Karpurakodi, Kallarkodi, Revesi, Karpuri, SGM 1, SGM (BV) - 2, Vellaikodi, Pachaikodi, Sirugamani 1, Anthiyur kodi, Kanyur kodi and Bangla type are under cultivation.<br>
<img src="bet2.png" style="height:220;width:400px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Soil and climate</p>
Well drained fertile clay loams are suitable. It does not tolerate saline and alkaline conditions. Betelvine require a cool humid with considerable humidity and regular supply of moisture in the soil is essential.
<p style="font-weight:bold;font-size:18px;">Seeds and sowing</p>
The vines are propagated by terminal stem cutting or setts about 30 - 45 cm long. Setts obtained from the top portions of the vines are easy to root and hence best for planting. On an average 1, 00,000 setts are required for planting one hectare. Setts with vigorous apical buds and nodal adventitious roots are selected and planted at the base of the live supports, which are to be planted 4 to 5 months earlier.
<p style="font-weight:bold;font-size:18px;">Season</p>
November - December and January – February are optimum for cultivation.
<p style="font-weight:bold;font-size:18px;">Preparation of field</p>
The field is prepared to a fine tilth and beds of 2 m wide are formed to a convenient length. Provide drainage trenches of 0.5 m width by 0.5 m depth in between two adjoining beds. Plant the seeds of the live supports i.e. Agathi (Sesbania grandiflora) in long rows. About 750 banana suckers are planted at the edges of the beds, which are used, for tying the vines on the live support and for packing the betel leaf.  When the Agathi plants reach 4 m height, they are topped off for maintaining the height. The crop is planted in two rows in beds of 180 cm width on Agathi plants with a spacing of 45 cm between plants in the row.
<p style="font-weight:bold;font-size:18px;">Irrigation</p>
Irrigate the field immediately after planting and afterwards once in a week.
<p style="font-weight:bold;font-size:18px;">Manuring</p>
Apply 150 kg N/ha/year through Neem cake (75 kg N) and Urea (75 kg N) and 100 kg P2O5 through Super phosphate and 30 kg Muriate of potash in three split doses first at 15 days after lifting the vines and second and third dose at 40 - 45 days intervals.  Apply on beds shade dried neem leaf or Calotropis leaves at 2 t/ha and cover it with mud (2 t in 2 split doses).<br>
<img src="bet3.png" style="height:180;width:400px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Plant protection<br>Pests<br>Scale insects</p>
Select scale-free seed vines. Spray Chlorpyriphos 20 EC 2 ml/lit when one or two scales are noticed on the basal portion of the stem/leaves. Direct the spray solution to the basal portion of the vines.  Spray NSKE 5 % or Malathion 50 EC 1 ml/lit.
<p style="font-weight:bold;font-size:18px;">Mites (Sevvattai)</p>
Mites can be controlled by spraying Wettable sulphur 50 WP @ 1 g/lit or Dicofol 18.5 EC 0.5 ml/lit.
<p style="font-weight:bold;font-size:18px;">Sooty mould (Aphids)</p>
To control aphids spray Chlorpyriphos at 2 ml/lit on Agathi leaves. Clip off excess Agathi leaves.
<p style="font-weight:bold;font-size:18px;">Harvest</p>
It depends upon the growth of the vines and market condition. Once harvesting starts it continues almost every day.
<p style="font-weight:bold;font-size:18px;">Yield</p>
About 75 to 100 lakh leaves/ha/year can be obtained.<br>
<img src="bet4.png" style="height:220;width:400px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br>
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