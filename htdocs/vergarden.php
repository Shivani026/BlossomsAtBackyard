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
  height:550%;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:36%"><p>VERTICAL GARDEN</p></div></hr>
<img src="ver1.png" style="height:220px;width:350px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Introduction:</p>
The lack of vegetation in urbanized areas, as result of human establishments, directly affects the quality of life, from physical and aesthetical point of view. The construction of vertical gardens is recommended both in interiors and especially in the exterior of buildings. By applying these technologies, any kind of area can be used at its maximum capacity, obtaining esthetic valences, benefic for environment and human health. Even if the price of constructing and maintaining the vertical gardens is higher than a classical landscape it’s compensated by the environmental benefits, raising the vegetation surfaces, with impact for reducing the pollution effect. The new modern concepts for landscape development are keen on using any kind of concrete or glass, turning them in real vertical gardens, being possible to overcome the development of the urban areas making a smooth transition for a healthy green urban environment.
<p>Vertical Gardening is a special kind of urban gardening suitable to small spaces, particularly for decorating the walls and roofs in various styles. This is an alternative method for gardening by expanding the scope of growing plants in a vertical space. Intensive urbanization has left hardly any horizontal space for outdoor gardens. Green walls   are   not   only spectacularly beautiful, but also helpful in enlivening the ambiance. Green walls can absorb heated gas in the air, lower both indoor and outdoor temperature, providing a healthier indoor air quality as well as a more beautiful space.</p>
<p style="font-weight:bold;font-size:18px;">Types of vertical greening system:</p>
<ol>
<li>Green façade</li>
<li>Living/green wall</li>
<ul>
<li>Modular green walls</li>
<li>Vegetated mat wall</li>
</ul></ol>
<img src="ver2.png" style="height:350px;width:250px;position:relative;left:300px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Green facades:</p>
<ul>
<li>Green facades are a type of green wall system in which climbing plants or cascading groundcovers are trained to cover specially designed supporting structures.</li>
<li>Plants are either grown in the ground or in the elevated containers where they are watered and fertilized</li>
</ul>
<p>Green facades are a type of green wall system in which climbing plants or cascading groundcovers are trained to cover specially designed supporing structures. Rooted at the base of these structure, in the ground, in intermediate planters or even on achieving full coverage. Green facades can be anchored to existing walls or built as freestanding structure, such as fences or columns</p>
<p style="font-weight:bold;font-size:18px;">Green walls / Living walls :</p>
Living wall system composed of pre-vegetated panels, vertical modules or planted blankets that are fixed vertically to a structural wall or frame. These panels can be made of plastic, expanded polystyrene, synthetic fabric and support a great diversity of plants species ( eg: a lush mixture of ferns, ground covers, perennials and edible plants).
Constructed from pre-vegetated panels, vertical modules or planted blankets (vegetated mat wall) that are fixed to structural framework or to a wall Made from steel framework, plastic, expanded polystyrene and synthetic fabric to support a variety of diversity and density of plant species Tend to require more maintenance such as fertilizer and water than green facade systems that are planted into the ground
<p style="font-weight:bold;font-size:18px;">Modular green wall :</p>
Vertical Garden Modules is made up of recycled poly propylene material. It has attractive look, highly durable in nature and it can be easily installed. It provides instant solution for making garden in your residing place.
<img src="ver3.png" style="height:350px;width:350px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Green wall cups:</p>
<ul>
<li>Frame/ Supporting panel</li>
<li>Easily detachable cups/pots</li>
</ul>
<img src="ver4.png" style="height:350px;width:350px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Vegetated mat wall :</p>
This system, pioneered by Patrick Blanc, is composed of two layers of synthetic fabric with pockets filled with the plants and growing media .The fabric walls are supported on a framework  and backed by a waterproof membrane against the building wall Nutrients and water are delivered through an irrigation system at the top of the wall
<p style="font-weight:bold;font-size:18px;">Building and installation of Green walls:</p>
Green wall system vary greatly in their design and construction from DIY projects to modular green wall systems. This heading provides information on
<ul>
<li>Structures and components for green wall system</li>
<li>Suitable Plants</li>
<li>Growing media</li>
<li>Iirrigation and plant nutrition</li>
<li> considerations for green walls</li>
</ul>
<p style="font-weight:bold;font-size:18px;">General considerations:</p>
<ul>
<li>Watering: Appropriate time</li>
<li>Carefull selection for wind prone areas (Succulent and hardy plants)</li>
<li>Removing the dried leaves</li>
<li>Keeping the structure clean</li>
<li>Disposing the water from drainage system</li>
<li>Pruning if necessary</li>
<li>Timely application of fertilizers</li>
</ul>
<p style="font-weight:bold;font-size:18px;">Benefits of Vertical gardening:</p>
<ul>
<li>Aesthetic effects</li>
<li>Acts as natural insulation for hot and cold air and a save energy for your building</li>
<li>Reduces CO2 levels and increases oxygen and improved air quality</li>
<li>Conserves water and watering takes less effort</li>
<li>Sound absorption and noise absorption</li>
<li>Improves thermal insulation and energy efficiency</li>
<li>Provides protection to buildings from adverse temperature and hence improves the life expectancy of the buildings</li>
<li>Mitigate urban island heat effect</li>
<li>It  holds rain water, providing food and shelter for wildlife</li>
</ul>
<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>

<p style="font-weight:bold;font-size:18px;"></p>


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