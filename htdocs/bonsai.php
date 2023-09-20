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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:41%"><p>BONSAI</p></div></hr>
<p style="position:relative;top:20px">Bonsai is an art of growing and training of a plant to a miniature form having a natural look of old age. It was originated from china, but it was called as the Japanese art. It involves techniques of extreme dwarfing. The optimum size of bonsai may be only 30 to 60 cm in height, but miniature sizes of below 25 cm have also been preferred. Bonsai of minimum 10 years old are period, but of 100 and even 200 years of age are available and are highly valued as ‘venerable’ specimens.
<br>Bonsai requires special types of containers. They should be usually shallow with 5 to 7.5 cm deep (except for cascade type of bonsai for which deep pots can be used). Round, hexagonal or square shaped containers with 25 to 30 cm diameters are preferred. Containers with specific colours like mosaic, sky blue, terra cotta, grey or jungle green are well suited for bonsai culture. Plants adaptable for extreme dwarfing like juniper. pine, elm, maple, cypress are suitable materials for bonsai culture. But in tropical places like India, the tree species like Manilkhara, Sapota, Bassia, Tamarind and Ficus spp. and shrubs like West Indian cherry are well suited.
<br>Trunk and branches may be bent, forced and tied by coiling them with heavy wire. This wire is removed after several months when training to shape has been accomplished. The bonsai plants may be trained to different shapes like twisted trunk, upright, S-shaped, semi-cascade, cascade, slanting or any other formal shape. Planting of both tips and roots is usually done at planting time and periodically pinching the tip and removing the excess side shoots are essential to maintain the general outline of design. Annually, the plants are either repotted or lifted from the pot, root pruned and reset.
<br>The bonsai plant is fed sparingly of week fertilizer solution containing major and minor nutrients. Sometimes extracts of oil cakes may be also added. Similarly, the plant is given only minimum requirements of moisture. It is advisable to water twice a day to plants kept in shallow containers and once a day to plants kept in deeper pots.
<br>Selection of hardened woody plants that have been subjected to adverse conditions is a good starting point. Such kind of planting materials may be collected from rock crevices of from the walls of any buildings. Old seedlings kept in containers form any nursery or cutting, grafted plants or layers may be also utilized in bonsai culture.</p>
<p style="font-weight:bold;font-size:18px;">Styles of bonsai<br>Formal Upright</p>
It is one of the most natural styles where the trunk is perfectly straight. The branches should alternate left to right to suggest age. The bottom third branches are removed and the remainder is drawn downward.
<img src="bon1.png" style="height:250px;width:250px;position:relative;left:300px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Informal Upright</p>
This style is characterized by a lightly curving trunk displaying the harsh elements of nature. This can be achieved with ease using wire and/or cords. It is as appropriate for conifers as with deciduous trees.
<img src="bon2.png" style="height:250px;width:250px;position:relative;left:300px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Broom</p>
It has a straight trunk that begins to divide and subdivide into many branches. The characteristics are its thick and finely branched crown. Some trees for this style are Beech, Elm, False cypress and Maple.
<img src="bon3.png" style="height:250px;width:250px;position:relative;left:300px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Slanting</p>
It is so called because the general slope of the trunk is highly pronounced. The branches should lie horizontal or droop slightly downward. The surface roots have an unstable appearance but have a well anchored impression.
<img src="bon4.png" style="height:250px;width:250px;position:relative;left:300px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Windblown</p>
It is rare in nature. This kind of tree is found on cliffs or mountains. The trunk, branches and twigs are trained in a single direction to give the affect of a strong wind and storm.<br>
<img src="bon5.png" style="height:250px;width:250px;position:relative;left:300px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">The Clasped-to-Stone</p>
It is a much loved but difficult to create style. The size and shape of the rock should complement the plant that is set on a gravel or water dish. A whole chapter could be spend on this style.
<p style="font-weight:bold;font-size:18px;">Agrotechniques for Bonsai</p>
1. Propagation
<br>2. Season
<br>3. Potting and repotting
<br>4. After care
<br>5. Container
<br>6. Planting media
<p style="font-weight:bold;font-size:18px;">Propagation</p>
Through seeds, cuttings, layering or grafting
<br>Seeds: Pines and Junifers
<br>Cuttings: Ficus, Pomegranate, Mulberry and Bougainvilleas
<br>Layers: Jasmine, Ixora, Bougainvilleas and Pome granate
<br>Grafts: Mango, Sapota, Citrus
<p style="font-weight:bold;font-size:18px;">Season</p>
1 July - August
<br>2. Febraury - March
<br>Best time is before opening of the buds
<p style="font-weight:bold;font-size:18px;">Potting and repotting</p>
<ul>
<li>1/3 of the roots can be trimmed</li>
<li>Long tap roots are to trimmed</li>
<li>Excessive branches are to thinned out</li>
<li>Balanced nutrition and adequate watering is must</li>
<li>Potting is not advisable during winter or hot months</li>
<li>Repotting is done after 2-3 years </li>
</ul>
<p style="font-weight:bold;font-size:18px;">Containers</p>
Mostly terracotta or ceramic.
Small in size.
Square/round/rectangle/oval in shape.
Preferred is oval / rectangle.
In round / square the plant is to be in the centre.
In others placed in the sides of the containers.
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