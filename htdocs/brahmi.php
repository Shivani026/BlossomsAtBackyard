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
  border-color:#581845;
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
  height:255%;
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
	 top:1850px;
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
<hr style="border-width:20px; border-color:#581845"><div class="hr-container" style="top:-15px;left:41%"><p>BRAHMI</p></div></hr>
<img src="bra1.png" style="height:180px;width:200px;position:relative;left:325px;top:10px;bottom:10px;border-radius:6px"><br><br>
Brahmi is found in humid and warmer parts of the world. It is a common creeping annual growing in damp and marshy areas.
<p style="font-weight:bold;font-size:18px;">Uses:</p>
The whole plant is used in indigenous system of medicine as a nerve tonic and for epilepsy and insanity. It is also being used as diuretic and for treating rheumatisim, asthma and hoarseness. Besides, brahmi also has good potency in controlling cough, fever and diabetes. Because of its inherent potential of enhancing memory and vitality, this miracle plant is gaining attention for its commercial cultivation globally. This plant is considered among one of the ‘celestrial drugs’ (Divya ausadhi), when consumed with milk for six months. In siddha system of medicine, the plant is useful against painful joints, swelling in joints, peripheral neuritis, constipation and burning urination. It is also used in convulsions, mental retardation, chest congestion and laryngitis.
<p style="font-weight:bold;font-size:18px;">Soil and climate</p>
This creeping herb is found growing along the canals and water bodies and in marshy area throughout India. The plant grows well in poorly drained soils. The plant prefers the soil of acidic nature for its congineal growth.
It is a plant that grows under sub-tropical and tropical climate. A temperature range of 330 – 400C with relative humidity of 60-65 percent has been found for its optimum vegetative growth.
<p style="font-weight:bold;font-size:18px;">Propagation:</p>
The plant is propagated by soft herbaceous cuttings. For mass propagation, whole plant is cut into small divisions and planted directly in the sunken beds. About 62,500 nos. of cuttings required for planting one hectare area. The cuttings of about 5-6 m long, each with a few leaves and nodes are ideal and establish easily. The cuttings are transplanted in wet soil at spacing of 10 x 10cm to get maximum herbage yield. Flood irrigation is provided quickly just after planting. The cuttings should be transplanted in the month of July-August to get maximum herbage yield.
<p style="font-weight:bold;font-size:18px;">Manures and fertilizers:</p>
The plant requires about 5t/ha of FYM which is to be applied as basal dose at the time of land preparation. Regarding the inorganic fertilizers application of 100:60:60kg/ha of NPK is recommended.
<p style="font-weight:bold;font-size:18px;">Irrigation </p>
It is very essential to water the field after transplanting for the survival and establishment of the plants. Subsequently, the field should be irrigated at 7-8 days interval. Irrigation should be avoided during rainy season.
<p style="font-weight:bold;font-size:18px;">Interculture:</p>
Primarily, hand weeding is needed at every 15-20 days interval but later on as plants proliferate and form a dense mat of vegetation, weeding may be done occasionally.
<p style="font-weight:bold;font-size:18px;">Plant protection:</p>
Grass hoppers are commonly observed and can be controlled by spraying of neem based insecticide or 0.2% of Nuvocron or Rogar
<p style="font-weight:bold;font-size:18px;">Harvesting and yield:</p>
The best time for harvesting brahmi is between Oct-Nov during which the mazimum biomass is produced. After this month, senescence sets in and there is loss of plant biomass and alkaloid yield. The ratoon crop can be taken favourably. In that case the upper portions of the stem 4-5 cm from the base are removed and rest is left for further regeneration. On an average and yield of 300q/ha of fresh and 60q/ha dry herbage can be obtained respectively, from a single harvest. After the first harvest, 40q/ha additional dry herbage yield can be obtained from the ratoon.
Generally the traditional method is followed to dry the harvested fresh material by spreading on the ground under shade at room temperature. The material should be turned over, alternatively during drying.
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