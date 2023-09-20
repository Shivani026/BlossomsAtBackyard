<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Blossoms at Backyard : Home : Terms Of Service</title>
</head>
<style>
body { 
margin:0; 
overflow-x:hidden;
} 
.bg-img {
  background-image: url("bg29.jpeg");
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
  overflow-y:auto;
  overflow-x:hidden;
  top:-25px;
  left:50px;
  padding:14px;
  width:90%;
  height:50%;
  border-radius:10px;
  font-color:white;
  background-color: rgba(253, 255, 255,0.85);
}
.text-container a:link{
	text-decoration:none;
}
.text-container a:visited {
  text-decoration: none;
}

.text-container a:hover {
  text-decoration: underline;
}

.text-container a:active {
  text-decoration: underline;
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
<div class="text-container">
<h1 style="color:#C71737;font-size:48px;font-family: Merienda One;position:relative;left:30px;top:-10px">Directory</h1>
	<div class="container" style="width:1150px;height:20px;font-family:Candara Light;font-size:21px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:10px;left:30px">
	<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:680px;width:220px;color:black;float:left;left:-10px;position:relative;top:-50px;bottom:60px;font-family:Candara Light;font-size:24px;font-weight:bold">
	<a href="anthurium.php">Anthurium</a><br>
<a href="applegourd.php">Apple gourd</a><br>
<a href="arecanut.php">Arecanut</a><br>
<a href="aromacrop.php">Aromatic Crops</a><br>
<a href="bananas.php">Banana</a><br>
<a href="ber.php">Thai apple(Ber)</a><br>
<a href="betel.php">Betelvine</a><br>
<a href="bittergourd.php">Bitter gourd</a><br>
<a href="blacknight.php">Blacknight Shade</a><br>
<a href="blackpep.php">Black Pepper</a><br>
<a href="bonsai.php">Bonsai</a><br>
<a href="bottlegourd.php">Bottle gourd</a><br>
<a href="brahmi.php">Brahmi</a><br>
<a href="brinjal.php">Eggplant(Brinjal)</a><br>
<a href="capcicum.php">Capcicum</a><br>
<a href="cardamom.php">Cardamom</a><br>
<a href="carnation.php">Carnation</a><br>
<a href="cashew.php">Cashew</a><br>      
<a href="chilli.php">Chilli</a><br>
<a href="chrysantheum.php">Chrysantheum</a><br>
<a href="citronella.php">Citronella</a><br>
<a href="cocoa.php">Cocoa</a><br>
<a href="coffee.php">Coffee</a><br>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:680px;width:290px;color:black;float:left;left:10px;position:relative;top:-50px;bottom:60px;font-family:Candara Light;font-size:24px;font-weight:bold">
<a href="coriander.php">Coriander</a><br>
<a href="crossandra.php">Crossandra</a><br>
<a href="cucumber.php">Cucumber</a><br>
<a href="cutchrysantheum.php">Cut Chrysantheum</a><br>
<a href="cutrose.php">Cut Rose</a><br>
<a href="dendrobium.php">Dendrobium Orchids</a><br>
<a href="digitalis.php">Digitalis</a><br>
<a href="fenugreek.php">Fenugreek</a><br>
<a href="flowerarr.php">Flower Arrangement</a><br>
<a href="flowercrop.php">Flower Crops</a><br>
<a href="fruitcrop.php">Fruit Crops</a><br>
<a href="features.php">Garden Features</a><br>
<a href="gardenwaste.php">Garden Waste</a><br>
<a href="principles.php">Garden Principles</a><br>
<a href="ginger.php">Ginger</a><br>
<a href="grapes.php">Grapes</a><br>
<a href="guava.php">Guava</a><br>
<a href="gymnema.php">Gymnema</a><br>
<a href="hangcon.php">Hanging Containers</a><br>
<a href="jackfruit.php">Jack Fruit</a><br>
<a href="kitchengar.php">Kitchen Garden</a><br>
<a href="ladyfinger.php">Lady Finger</a><br>
<a href="landscape.php">Landscaping and Decor</a><br>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:680px;width:260px;color:black;float:left;left:50px;position:relative;top:-50px;bottom:60px;font-family:Candara Light;font-size:24px;font-weight:bold">
<a href="lawnmak.php">Lawn Making</a><br>
<a href="lemongrass.php">Lemongrass</a><br>
<a href="lilium.php">Lilium</a><br>      
<a href="lime.php">Lime</a><br>
<a href="mango.php">Mango</a><br>
<a href="marigold.php">Marigold</a><br>
<a href="medcrop.php">Medicinal Crops</a><br>
<a href="mint.php">Mint</a><br>
<a href="nerium.php">Nerium</a><br>      
<a href="noni.php">Noni</a><br>
<a href="nurseryman.php">Nursery Management</a><br>
<a href="oilpalm.php">Oil Palm</a><br>
<a href="paparika.php">Paprika</a><br>
<a href="papaya.php">Papaya</a><br>
<a href="patchouli.php">Patchouli</a><br>      
<a href="pineapple.php">Pineapple</a><br>      
<a href="plantcomp.php">Plant Components</a><br>
<a href="plantncrop.php">Plantation Crops</a><br>      
<a href="pomegranate.php">Pomegranate</a><br>
<a href="pumpkin.php">Pumpkin</a><br>
<a href="pyrethrum.php">Pyrethrum</a><br>      
<a href="ribbedgourd.php">Ribbed gourd</a><br>      
<a href="roofgarden.php">Roof Garden</a><br>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:680px;width:220px;color:black;float:left;left:90px;position:relative;top:-50px;bottom:60px;font-family:Candara Light;font-size:24px;font-weight:bold">

<a href="rose.php">Rose</a><br>
<a href="rosemary.php">Rosemary</a><br>
<a href="rubber.php">Rubber</a><br>
<a href="sapota.php">Sapota</a><br>
<a href="sappanwood.php">Sappan Wood</a><br>
<a href="spicecrop.php">Spice Crops</a><br>
<a href="sweetorange.php">Sweet Orange</a><br>
<a href="tea.php">Tea</a><br>
<a href="terrarium.php">Terrarium</a><br>      
<a href="tomato.php">Tomato</a><br>
<a href="tuberrose.php">Tubberrose</a><br>
<a href="turmeric.php">Turmeric</a><br>      
<a href="types.php">Types of Garden</a><br>
<a href="vallarai.php">Vallarai</a><br>
<a href="vegcrop.php">Vegetable Crops</a><br>
<a href="vergarden.php">Verticle Garden</a><br>
<a href="vetiver.php">Vetiver</a><br>
</div>

</div>
</div>
<div class="footer">
	<div class="container" style="width:1000px;height:120px;font-family:Merienda One;font-size:48px;background-color:rgba(0,0,0,0.0);position:relative;top:-5px;left:40px"><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;position:relative;top:-60;left:40px;color:white;">Blossoms at Backyard</p></div>
	<div><hr style="width:1200px;position:relative;top:-130px;left:60px;border-color:white"></hr></div>
	<div class="container" style="width:500px;height:20px;font-family:Candara Light;font-size:16px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:-120px;left:880px"><a href="terms.php" style="color:white;">Terms of service</a>&nbsp &nbsp &nbsp <a href="directory.php" style="color:white">Directory</a>&nbsp &nbsp &nbsp <a href="FAQ.php" style="color:white">FAQ</a>&nbsp &nbsp &nbsp <a href="events.php" style="color:white">Events</a>
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
