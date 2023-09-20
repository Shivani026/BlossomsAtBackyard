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
  border-color:#F01940;
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
  left:200px;
  padding:14px;
  width:65%;
  height:800%;
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
	 top:5500px;
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
/* Table*/
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
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
<div class="text-container" style="  font-family: Merienda One;font-size:18px;">
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:15%"><p>CUT CHRYSANTHEMUM (Dendranthema grandiflora Tzeuleu)</p></div></hr>
<p style="font-weight:bold;font-size:20px">Varieties</p>
<p style="font-size:18px">
Standard types: Bonfire Orange, Bonfire Yellow.
Spray types: Reagan Yellow, Reagan White, Nanako, etc.,</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Climate:</p>Cut chrysanthemums are grown under polyhouses with the following environmental conditions.<br>
Temperature              : 16 - 250C<br>
Relative humidity        : 70 - 85 %<br>
CO2                          : 600 - 900 ppm<br>
Photoperiod                : Long day conditions with 13 hours light & 11 hours darkness during vegetative stage (upto 4-5 weeks from planting) and short day conditions with 10 hours light & 14 hours darkness during flower bud  initiation stage.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Soil:</p>Well drained sandy loam soil with good texture and aeration or growing medium made of 1: 1: 2 of soil, compost and cocopeat with pH of 5.5 to 6.5.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Growing Media</p>The growing media consists of soil, compost and coco peat in the ratio of 1:1:2. The beds are formed with 1 m width, 0.3m height and at convenient length. The soil pH must be 6.5 with 1 to 1.5 EC (Electrical Conductivity).</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Propogation:</p>Terminal cuttings and tissue culture plants are used. Terminal cuttings are widely used for commercial cultivation. Cuttings of 5-7 cm length are taken from healthy stock plants and are induced to root by treating with IBA (1000 ppm).</p>
	<img src="cutchry1.png" style="height:150px;width:200px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px">
    <img src="cutchry2.png" style="height:150px;width:200px;position:relative;left:230px;top:10px;bottom:10px;border-radius:6px">
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Planting:</p>Beds of 1m width, 0.3m height and convenient length are formed. Nets (with cell size depending on the spacing adopted) are placed on the beds and planting is done</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Spacing:</p>15x 15 cm (45 plants/m2) or 10 x 15 cm (67 plants/m2).</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Irrigation:</p>Drip irrigation with 8-9 litres of water/m2/day.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Nutrition:</p>Basal application of DAP - 50 g/m2<br>Weekly schedule - from 3rd week after planting</p>
<table style="width:500px;height:100px" align="center">
  <tr>
    <td rowspan="2" align="center">Fertilizer</td>
	<td colspan="2" align="center">Quantity (g/m2)
	<tr>
	<td align="center">Monday</td>
	<td align="center">Wednesday</td>
	</tr>
	</td>
  </tr>
  <tr>
  <td align="center">19-19-19</td>
  <td align="center">3.0</td>
  <td align="center">1.0</td>
  </tr>
  <tr>
  <td align="center">KNO3</td>
  <td align="center">3.0</td>
  <td align="center">1.0</td>
  </tr>
  <tr>
  <td align="center">CAN</td>
  <td align="center">2.0</td>
  <td align="center">1.0</td>
  </tr>
  <tr>
  <td align="center">Ammonium nitrate</td>
  <td align="center">2.0</td>
  <td align="center">1.0</td>
  </tr>
  <tr>
  <td align="center">MgSO4</td>
  <td align="center">2.0</td>
  <td align="center">1.0</td>
  </tr>
  </table>
  <p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Fertilizer Management:</p>NPK @ 20:20:10 g/m2 is applied through fertigation at weekly intervals</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Growth Regulators:</p>Alar 50 – 150 gm/100 lit water and B 9 at 8 – 25 ml/lit of water is used twice at the growing stage.</p>
<p style="font-weight:bold;font-size:20px">Special Practices</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Pinching</p>First pinching - 3 weeks after planting; 2nd pinching - 5 weeks after planting.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Disbudding</p>In spray varieties, only the large apical bud is removed and the lateral buds are retained. In standard varieties, the lateral buds are removed and only apical buds are allowed to develop.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Blindness</p>It occurs when the night temperature is too low and the days are short at the time when flower buds are forming. A rosetted type of growth is indicative of this difficulty. Center petals that fail to develop can be due to excessive heat; or in dark weather some varieties apparently lack enough food to open the flower. Chlorosis, or yellowing of the upper foliage, is generally associated with over watering, excessive fertilizer in the soil, or insects or diseases attacking the root system. Continued growth of shoots and failure to form flower buds when short days are started the mean night temperature was too low. Sunscald is prevalent on standards in flower in very warm weather. The petals turn brown and dry up.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Light requirement</p>Chrysanthemum is very much influenced by light and hence photoperiod should be regulated. (Photoperiod should be regulated as detailed under ‘climate’</p>
<table style="width:500px;height:100px" align="center">
  <tr>
    <td style="font-weight:bold" align="center">Growth phase</td>
	<td style="font-weight:bold" align="center">Weeks from planting</td>
	<td style="font-weight:bold" align="center">Photoperiod </td>
  </tr>
  <tr>
  <td align="center">Vegetative phase</td>
  <td>Up to 4-5 weeks from planting till the plant attains 50 to 60 cm height</td>
  <td>	Long day : 13 hrs light and 11 hrs dark</td>
  </tr>
  <tr>
  <td align="center">Flowering	</td>
  <td>5 -6 weeks after planting till harvest</td>
  <td>Short day : 10 hrs light and 14 hrs dark</td>
  </tr>
  </table>
  <img src="cutchry3.png" style="height:300px;width:250px;position:relative;left:170px;top:20px;bottom:10px;border-radius:6px">
    <img src="cutchry4.png" style="height:300px;width:250px;position:relative;left:200px;top:20px;bottom:10px;border-radius:6px">
<p style="position:relative;left:320px;">Lighting for chrysanthemum </p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Growth regulators:</p>Spray GA3 (50 ppm) at 30, 45 and 60 days after planting to increase flower stem length.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Weed management:</p>Weeding and hoeing are done manually as and when required.</p>
<p style="font-weight:bold;font-size:20px">Plant protection</p>
<p style="font-weight:bold;font-size:20px">Pests</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Leaf miner:</p>Spray Imidacloprid @ 0.5 ml/l or Acetamiprid @ 0.3 g/l.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Thrips:</p>Spray Fipronil @ 1.0 ml/l. Keep Yellow Sticky Trap 10 nos. for 100 sq.m area.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Aphids:</p>Spray Methyl demeton @ 2 ml/l or Monocrotophos @ 1 ml/l.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Red spider mite:</p>Spray Abamectin 1.9 EC @ 0.5 ml/l or Propargite @ 2 ml/l.</p>
<p style="font-weight:bold;font-size:20px">Diseases</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">White Rust:</p>Spray Azoxystrobin @ 1ml/l or Triflooxystrobin + Tebuconazole @   0.75 g/l.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Leaf spot:</p>Spray Macozeb @ 2g/l or Azoxystrobin @ 2 ml/l or Difenoconazole @ 0.5ml/l.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Wilt:</p>Soil drenching with Carbendazim @ 1 g/l or Triflooxystrobin + Tebuconazole @ 0.75 g/l.</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Powdery mildew:</p>Spray Wettable Sulphur @ 2g/l or Azoxystrobin @ 1ml/l.</p>
<p style="font-weight:bold;font-size:20px">Harvest</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Harvest index</p>Standard types - Flowers are harvested when 2 - 3 rows of rays florets are perpendicular to the flower stalk.<br>
Spray types - When 50% flowers have shown colour for distant markets; when two flowers have opened and others have shown colour for local markets.</p>
<img src="cutchry5.png" style="height:300px;width:250px;position:relative;left:330px;top:20px;bottom:10px;border-radius:6px">
<p style="position:relative;left:300px;">Chrysanthemum ready to harvest </p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Yield</p>Standard types:67 flower stems/m2<br>Spray types:  260 flower stems/m2</p>
<p style="font-size:15px"><p style="font-weight:bold;font-size:20px">Post harvest technology</p>
Pulsing	:Sucrose 4 % for 24 hrs<br>
Vase life : 18 days; Control : 8.5 days)<br>
Holding solution: BA 10 ppm + Bavistin 0.1 % + Sucrose 2 %<br>
(Vase life : 17 days; Control : 8.5 days)<br>
Wrapping material:Polysleeves with holes (50 gauge thickness)<br>
(Shelf life: 9.25 days; Control : 6.5 days)</p>
<p style="font-size:18px">After harvest, the stem have to be cut at equal length (90 cm is the standard), bunched in five, putting a rubber band at the base and sliding them into a plastic sleeve and putting the bunches in plastic buckets filled with water. Early morning on the day of shipment (or night before), the bunches can be packed in boxes.</p>
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