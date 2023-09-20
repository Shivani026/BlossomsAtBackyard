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
  height:530%;
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
	 top:3700px;
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
<hr style="border-width:20px; border-color:#53302D"><div class="hr-container" style="top:-15px;left:41%"><p>COFFEE</p></div></hr>
<p style="font-weight:bold;font-size:18px;">Varieties</p>
<img src="cof1.png" style="height:200;width:450px;position:relative;left:200px;top:30px;bottom:10px;border-radius:6px"><br>
<br><br><p style="font-weight:bold;font-size:18px;">Arabica varieties</p>
Sln 795, Sln 7, Sln 9, Sln 10, Cauvery and its selections and HRC (Hawaian Red Cuturra),  Chandragiri and san Roman
<p style="font-weight:bold;font-size:18px;">Robusta varieties</p>
Sln 274, Sln 270, Sln 3.<br>
<img src="cof2.png" style="height:220;width:450px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px"><br>
<img src="cof3.png" style="height:220;width:450px;position:relative;left:200px;top:30px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Soil and climate</p>
Soil should be deep, friable, open textured rich in plant nutrients with plenty of humus and of slightly acidic nature (pH – 4.5 to 6.5)<br>
<img src="cof4.png" style="height:100;width:450px;position:relative;left:200px;top:30px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Seeds and sowing</p>
Coffee is propagated by seeds
<p style="font-weight:bold;font-size:18px;">Season</p>
Planting spreads from June - December
<p style="font-weight:bold;font-size:18px;">Preparation of seeds</p>
Healthy and well developed fully ripe berries are harvested from specially identified plants for use as seed bearers. After discarding the floats, the sound fruits are depulped, sieved and mixed with sieved wood ash and dried in shade.  The seed is then graded to remove all cut, triangular and elephant beans. Prior to planting, the seeds are treated with Agrosan or any Organomercurial compound to prevent fungal infection.
<p style="font-weight:bold;font-size:18px;">Nursery practices</p>
Select light loamy soil of good drainage with high organic matter content with water and shade facilities. Form raised beds of 15 cm height, 1m width and at convenient length. Incorporate 30 - 40 kg of well rotten compost, 2 kg of finely sieved agricultural lime and 400 g of rock phosphate to a bed of 1 x 6 m size. In heavy soils, it is necessary to add coarse sand for drainage and aeration
<p style="font-weight:bold;font-size:18px;">Sowing</p>
Pre-sowing seed treatment wiith Azospirillum and Phosphobacterium can be done.Seeds are sown in December - January in the bed 1.5 - 2.5 cm apart with the flat side down wards in regular rows. Then they are covered with a thin layer of fine soil and a layer of paddy straw.Water the beds daily and protect from direct sunlight by an over head pandal. Seeds germinate in about 45 days after which they are transplanted to a secondary nursery beds for raising ball or Bag nursery.<br>
<img src="cof5.png" style="height:180;width:450px;position:relative;left:200px;top:30px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Bag nursery</p>
Polythene bags with adequate number of holes in the bottom half are taken and are filled with a prepared mixture containing jungle soil, FYM and sand in the proportion of 6:2:1. An area of 12 x 8 m can accommodate 5000 seedlings.  Seedlings are planted in polythene bags.
<p style="font-weight:bold;font-size:18px;">Preparation of field</p>
Selective felling may be done while retaining a number of desirable shade trees. Terracing should be done in deep slopy areas. After the summer showers, pits of 45 cm x 45 cm x 45 cm are dug at 1.25 - 2.5 m apart. The pits are left open for weathering and then filled and heaped for planting. At the time of filling, apply 500 g of rock phosphate per pit along with top soil. Planting is done along the contour in slopy areas.<br>
<img src="cof6.png" style="height:300;width:250px;position:relative;left:320px;top:30px;bottom:10px;border-radius:6px"><br>
<p style="font-weight:bold;font-size:18px;">Spacing</p>
Arabica Coffee	:	1.5 to 2.0 m either way.<br>
Dwarf varieties	:	Sanraman: 1 x 1 m.<br>
Robusta coffee	:	2.5 m either way.
<p style="font-weight:bold;font-size:18px;">Plant protection<br>Pests<br>White stem borer</p>
Attacks arabica coffee grown under inadequate shade.<br>
Maintain/create optimum shade<br>
Borer infested plants should be thoroughly trace, uprooted during March and September, burnt to avoid economic loss during the subsequent years.<br>
Install pheromone traps @ 25 /ha, if the incidence is high.<br>
Remove the loose scaly bark on the main stem and thick primaries using coir glove or coconut husk.<br>
Pad with monocrotophos 36 WSC @ 5 ml by making a window in the stem at 5 cm x 5 cm and fill it with absorbant cotton dipped in insecticide solution and close it.<br>
<img src="cof7.png" style="height:250;width:650px;position:relative;left:120px;top:30px;bottom:10px;border-radius:6px"><br>
<br><br><p style="font-weight:bold;font-size:18px;">Yield</p>
750 - 1000 kg dry parchment /ha
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