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
  height:340%;
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
	 top:2450px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:40%"><p>TERRARIUM</p></div></hr>
<p style="position:relative;top:10px">A terrarium is a collection of plants growing in a glass-enclosed container. A small garden in a glass container is easy to make and to care for Many different containers and plants can be used- whatever is available to you. In addition to plants, you can add rocks(stones), shells or pieces of bark to create miniature scenes. This indoor gardening activity can give pleasure to you and your family or friends. Also, a terrarium is a good idea for a gift.</p>
<p style="font-weight:bold;font-size:18px;">How it works?</p>
The glass walls allow light to reach the plants and give protection from dust, drafts, and temperature changes. The plants usually used are ones that require a high amount of moisture. Therefore, the terrarium is set up to provide a highly humid atmosphere, which means that the air contains lots of water. It works in this way, Plants give off water from their leaves in the form of gaseous water vapor. When air in the container comes in contact with the cooler glass walls, the water vapor condenses, or becomes liquid. This water runs down the sides of the container and soaks into the soil on the bottom. The water is then available for the plants to take up through their roots. The water can be used over and over again, so you will rarely need to water your terrarium. To keep the humidity high, you should always have a lid on the container to prevent the water from escaping.
<img src="ter1.png" style="height:250px;width:550px;position:relative;left:150px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Containers:</p>
You will need a glass container clear enough to see through. Cloudy or tinted glass reduces the amount of light the plant receives. Any size container will do, depending on the number of plantsyou are using. The container should have a removable cover to control moisture. A piece of glass or plastic can be used if your container does not have a lid.
<ul>
<li>Fish bowls</li>
<li>Fish tanks or Aquarium</li>
<li>Candy Jars</li>
<li>Glass bowls</li>
<li>Brandy Snifter</li>
<li>Conical flask, glass beakers or any transparent glass container can be used </li>
</ul>
<p style="font-weight:bold;font-size:18px;">Soil:</p>
Enough soil is needed to make a 1½-inch to 2-inch layer in the bottom of the container. Thesoil should be porous to allow good drainage. It should be slightly moist for planting. Equal parts of garden soil, sand, and peat moss(1:1:1). Drainage Material:
Since terrarium has no drainage holes as that of your out door pots, Provision must be made for the escape of excess water. A layer of moss on the bottom of the terrarium can serve as a drainage layer in very small containers. For large containers Broken pieces of clay flower pots or charcoal, or a layer of sand or fine gravel may be added before the moss layer.
<p style="font-weight:bold;font-size:18px;">Plants:</p>
Use small plants that grow slowly. Plant should fill the container but not crowd it. You can collect plants from your garden, local nurseries etc.This only a Suggested list and not an exhaustive one,
<p style="font-weight:bold;font-size:18px;">Accessories (This adds beauty and variety)</p>
<ul>
<li>Coloured pebbles</li>
<li>Small toys</li>
<li>Shells</li>
<li>Barks</li>
<li>Stones etc</li>
</ul>
<p style="font-weight:bold;font-size:18px;">Planning:</p>
After selecting a container, plan your terrarium layout. You can arrange plants in whatever design you wish. You may want to include small pebbles, some driftwood, or even stones to create interest, but don’t clutter your plan with too many ornaments; they will only ruin its natural look
Consider how the terrarium will be displayed. Viewed mainly from one side, plan to build toward theback of the container. Extra soil, moss, and larger plants can be placed toward the back, with smaller plants clustered toward the front. 
<p style="font-weight:bold;font-size:18px;">Tools required:</p>
<ul>
<li>Trowel</li>
<li>spoons</li>
<li>tongs</li>
<li>Rammer</li>
<li>Fork cum Rake</li>
</ul>
<p style="font-weight:bold;font-size:18px;">Care and maintenance:</p>
Once your terrarium is planted with suitable plants, the aftercare part is easy,
<ul>
<li>Water sparingly</li>
<li>Give it light- not direct sunlight, diffused or indirect light or near artificial  light sources</li>
<li>Pinch and prune whenever necessary</li>
</ul>
<img src="ter2.png" style="height:250px;width:750px;position:relative;left:75px;top:20px;bottom:10px;border-radius:6px"><br><br>
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