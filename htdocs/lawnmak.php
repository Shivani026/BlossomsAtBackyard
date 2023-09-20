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
  height:410%;
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
	 top:2900px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:35%"><p>LAWN AND LAWN MAKING</p></div></hr>
<p style="position:relative;top:20px">A lawn is an area where grass is grown as a green carpet for a landscape and is the basic feature of any garden.  It serves to enhance the beauty of the garden, be it larger or smaller.  Proper lawn maintenance plays a crucial part in any landscape design. A beautiful well maintained lawn can make the entire landscape look good, whereas a lawn that is not maintained can completely ruin it's beauty. The lawn not only harmonizes with a decor of the drawing room, but also sets of a suitable background for a specimen tree or a shrub, as well as for colourful beds and borders.  The position of the lawn largely depends upon the layout of the garden in relation to the house.  In general lawn should be wide open with access to direct sunshine, especially in front of a rockery and a water pool.</p>
<img src="law1.png" style="height:250px;width:350px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Site and Soil</p>
After choosing the site, the next important factor for consideration is the size and shape of the lawn. The preparation of site includes digging, leveling and enriching the soil with organic manures or by amending with fertile soil. If the soil is very heavy, coarse sand may be added by removing subsoil to a depth of 20 cm. The ideal soil pH should be 5.0 to 5.6.  If it is very acidic 500 g/m2 lime should be added and to clayey loam or alkaline soil gypsum of the same quantity may be added. Provision of drainage for excess rain water should be made if the ground is not sloppy.
<p style="font-weight:bold;font-size:18px;">Levelling</p>
The site should be thoroughly levelled with spade, pebbles and weeds are hand picked.  The soil is rolled with a roller.  Weeds especially nut grass should not be allowed to grow and should be removed with roots for at least 2 to 3 times.
<p style="font-weight:bold;font-size:18px;">Methods of lawn making<br>1. Seeding</p>
The most popular grass suitable for seeding is "Doob" grass (Cynodon dactylon).  It has the fast spreading mat forming habit, radially forms roots at the nodes, the foliage is dark green, narrow with parallel vines. A lawn from seed is thought of only when grass roots are not available.  About 30 kg of seed is required for planting one hectare.  The soil should be reduced to fine tilth and given a light rolling. The site should be divided into suitable small squares or rectangles, the seeds are mixed with double the quan­tity of finely sieved soil and should be rolled again and wa­tered liberally with rose can. The seeds take four to five weeks for germination. Care should be taken not to flood the site.  For the first few times, the grasses are cut with a scythe. Lawn mower may be used for easy maintenance and for its spreading.
<p style="font-weight:bold;font-size:18px;">2. Turfing</p>
The turfs are nothing but pieces of earth with compact grasses on them. These turfs should be cut uniformly in squares from a place where the grass is short, compact and free from weeds. These turfs should be placed on the prepared ground site, side by side and beaten down flat with a turf beater. The cavities in between should be filled with fine soil. The entire turfed area should be rolled and watered liberally. This is the most expensive way of lawn making.
<p style="font-weight:bold;font-size:18px;">3. Turf plastering</p>
The doob grass can be procured in large quantities free from weeds and chopped properly into small bits of 5-7 cm long. Two baskets of chopped grass pieces should be mixed well with one basket each of garden soil and fresh cow dung and a shovel full of wood ash with required quantity of water to form a thick pasty substance. This mixture is then spread uniformly on the surface of a previously wetted perfectly leveled ground to a thickness of at least 2.5cm and watering should be done with a rose can. The next day, ground should be rolled and the grass should be allowed to spread. The grass will shoot up in a fortnight. To start with, cut with a scythe and after three months, use the lawn mower.
<p style="font-weight:bold;font-size:18px;">4. Dibbling roots</p>
This is the cheapest but time consuming method. Small pieces of grass roots should be dibbled 10 – 15 cm apart in a leveled ground when it is wet after rain. The roots spread and grow underground in the course of six months making a fairly compact lawn by frequent mowing, rolling and watering.
<p style="font-weight:bold;font-size:18px;">5. Astro Turf</p>
It is a synthetic lawn popularly used in developed countries in roof gardens as well as in play grounds. It dispenses the normal maintenance usually required for normal lawns. Constant sprinkling of water is one of the prime requi­site to bind the synthetic fibre to provide a surface akin to a lawn carpet.
A spacious lawn though beautiful will often be monotonous. So, to break the monotony, some beautiful tree or shrub is recommended as single specimen in the lawn.
<p style="font-weight:bold;font-size:18px;">Plants suitable for planting in lawns as single specimen<br>Trees:</p>
<ol>
<li>Amherstia nobilis</li>
<li>Callistemon lanceolatus</li>
<li>Magmolia grandiflora</li>
<li>Cupresses macrocarpa</li>
<li>Pinus longifolia</li>
<li>Thuja orientalis</li>
<li>Araucaria excelsa</li>
</ol>
<p style="font-weight:bold;font-size:18px;">Shrubs and creepers:</p>
<ol>
<li>Agave americana</li>
<li>Furcraea gigantea</li>
<li>Musa superba</li>
<li>Bougainvillea spectabilis</li>
<li>Cestrum nocturnum</li>
<li>Dombeya spectabilis</li>
<li>Hibiscus species</li>
</ol>
<img src="law2.png" style="height:250px;width:750px;position:relative;left:75px;top:20px;bottom:10px;border-radius:6px"><br><br>
<img src="law3.png" style="height:180px;width:750px;position:relative;left:75px;top:20px;bottom:10px;border-radius:6px"><br><br>
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