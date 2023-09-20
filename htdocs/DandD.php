<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Blossoms at Backyard : Home : Propagation</title>
</head>
<style>
body { 
margin:0; 
overflow-x:hidden;
} 
.bg-img {
  background-image: url("bg26.jpeg");
  background-repeat: repeat-y;
  background-size: cover;
  position: relative;
  height:1030px;
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
  top:0px;
  left:200px;
  padding:14px;
  width:70%;
  height:40%;
  border-radius:10px;
  font-color:white;
  background-color: rgba(254, 249, 190,0.8);
}
/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: rgba(0,0,0,0);
  display:relative;
  top:40px;
  color: black;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  font-family:Merienda One;
  font-size:22px;
}
 .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  padding-bottom:20px;
  background-color:rgba(0,0,0,0);
  display: none;
  overflow: hidden;
  font-family:Merienda One;
  font-size:18px;
}
.img-container {
  position: relative;
  width:60%;
}

.image {
  border:none;
  border-radius:10px;
  display: block;
  width: 40%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height:auto;
  width: 40%;
  opacity: 0;
  transition: .5s ease;
  background-color:#FFF5DA;
  cursor:pointer;
}

.img-container:hover .overlay {
  opacity:0.7;
}
/* overlay text */
.text {
  color: #0F0E0B;
  font-family:Merienda One;
  font-size: 20px;
  position: absolute;
  opacity:0.9;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
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
	 top:780px;
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
<div class="text-container" style="  font-family: Merienda One;font-size:20px;">
<hr style="border-width:20px; border-color:#75B02F"><div class="hr-container" style="position:relative;left:340px;top:-35px;color:black"><a>Deficiencies and Disorders</a></div></hr>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Fruit crops</button>
<div class="panel" style="height:520px">
<div class="img-container" style="left:25px;top:10px;width:500px;height:150px">
  <a href="mangoD.php">
  <img src="mango.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Mango</div></a>
  </div>
 </div>
  <div class="img-container" style="left:250px;top:-140px;width:500px;height:150px">
  <a href="bananaD.php">
  <img src="bananas.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Bananas</div></a>
  </div>
 </div>
   <div class="img-container" style="left:475px;top:-290px;width:500px;height:150px">
  <a href="sapotaD.php">
  <img src="sapota.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Sapota(Chiku)</div></a>
  </div>
 </div>
   <div class="img-container" style="left:700px;top:-440px;width:500px;height:150px">
  <a href="papayaD.php">
  <img src="papaya.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Papaya</div></a>
  </div>
 </div>
   <div class="img-container" style="left:25px;top:-410px;width:500px;height:150px">
  <a href="guavaD.php">
  <img src="guava.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Guava</div></a>
  </div>
 </div>
   <div class="img-container" style="left:250px;top:-560px;width:500px;height:150px">
  <a href="limeD.php">
  <img src="alime.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer"> Acid Lime</div></a>
  </div>
 </div>
 <div class="img-container" style="left:475px;top:-710px;width:500px;height:150px">
  <a href="watermelonD.php">
  <img src="watermelon.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Watermelon</div></a>
  </div>
 </div>
 <div class="img-container" style="left:700px;top:-860px;width:500px;height:150px">
  <a href="grapesD.php">
  <img src="grapes.jpeg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Grapes</div></a>
  </div>
 </div>
   <div class="img-container" style="left:25px;top:-830px;width:500px;height:150px">
  <a href="pineappleD.php">
  <img src="pineapple.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Pineapple</div></a>
  </div>
 </div>
  <div class="img-container" style="left:250px;top:-980px;width:500px;height:150px">
  <a href="pomegranateD.php">
  <img src="pomegranate.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Pomegranate</div></a>
  </div>
 </div>
  <div class="img-container" style="left:475px;top:-1130px;width:500px;height:150px">
  <a href="jackfruitD.php">
  <img src="jack.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Jack fruit</div></a>
  </div>
 </div>
  <div class="img-container" style="left:700px;top:-1280px;width:500px;height:150px">
  <a href="cusappleD.php">
  <img src="cusapple.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Custard apple</div></a>
  </div>
 </div>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Vegetable crops</button>
<div class="panel" style="height:380px">
 <div class="img-container" style="left:25px;top:30px;width:500px;height:150px">
  <a href="tomatoD.php">
  <img src="tomatoes.jpeg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Tomato</div></a>
  </div>
 </div>
  <div class="img-container" style="left:250px;top:-120px;width:500px;height:150px">
  <a href="ladyfingerD.php">
  <img src="ladyfinger.jpeg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Ladyfinger</div></a>
  </div>
 </div>
   <div class="img-container" style="left:475px;top:-270px;width:500px;height:150px">
  <a href="brinjalD.php">
  <img src="brinjal.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Eggplant(Brinjal)</div></a>
  </div>
 </div>
   <div class="img-container" style="left:700px;top:-420px;width:500px;height:150px">
  <a href="chilliD.php">
  <img src="chilli.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Chillies</div></a>
  </div>
 </div>
   <div class="img-container" style="left:25px;top:-380px;width:500px;height:150px">
  <a href="potatoD.php">
  <img src="potato.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Potato</div></a>
  </div>
 </div>
   <div class="img-container" style="left:250px;top:-530px;width:500px;height:150px">
  <a href="onionD.php">
  <img src="onion.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Onion</div></a>
  </div>
 </div>
 <div class="img-container" style="left:475px;top:-680px;width:500px;height:150px">
  <a href="bottlegourdD.php">
  <img src="bottlegourdd.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Bottle gourd</div></a>
  </div>
 </div>
 <div class="img-container" style="left:700px;top:-830px;width:500px;height:150px">
  <a href="cabbageD.php">
  <img src="cabbage.jpeg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Cabbage</div></a>
  </div>
 </div>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Spice crops</button>
<div class="panel" style="height:370px">
 <div class="img-container" style="left:20px;top:20px;width:500px;height:150px">
  <a href="gingerd.php">
  <img src="ginger.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Ginger</div></a>
  </div>
 </div>
<div class="img-container" style="left:250px;top:-130px;width:500px;height:150px">
  <a href="blackpepd.php">
  <img src="blackpep.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Black Pepper</div></a>
  </div>
 </div>
<div class="img-container" style="left:475px;top:-280px;width:500px;height:150px">
  <a href="cardamomd.php">
  <img src="Cardamom.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Cardamom</div></a>
  </div>
 </div>
<div class="img-container" style="left:700px;top:-430px;width:500px;height:150px">
  <a href="turmericd.php">
  <img src="turmeric.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Turmeric</div></a>
  </div>
 </div>
<div class="img-container" style="left:375px;top:-390px;width:500px;height:150px">
  <a href="corianderd.php">
  <img src="coriander.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Coriander</div></a>
  </div>
</div>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Flower crops</button>
<div class="panel" style="height:180px">
 <div class="img-container" style="left:25px;top:20px;width:500px;height:150px">
  <a href="chrysantheumd.php">
  <img src="cutchrysantheum.jpg" class="image" style="width:200px;height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Chrysantheum</div></a>
  </div>
 </div>
 <div class="img-container" style="left:250px;top:-130px;width:500px;height:150px">
  <a href="jasmined.php">
  <img src="mogra.jpg" class="image" style="width:200px;height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Jasmine</div></a>
  </div>
 </div>
 <div class="img-container" style="left:475px;top:-280px;width:500px;height:150px">
  <a href="neriumd.php">
  <img src="nerium.jpg" class="image" style="width:200px;height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Nerium</div></a>
  </div>
 </div>
 <div class="img-container" style="left:700px;top:-430px;width:500px;height:150px">
  <a href="rosed.php">
  <img src="rose.jpeg" class="image" style="width:200px;height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Rose</div></a>
  </div>
 </div>
</div>
<button class="accordion"><i class="fas fa-angle-down"></i>&nbsp Plantation crops</button>
<div class="panel" style="height:400px">
 <div class="img-container" style="left:25px;top:20px;width:75%">
  <a href="tead.php">
  <img src="tea.jpg" class="image">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Tea</div></a>
  </div>
 </div>
  <div class="img-container" style="left:320px;top:-160px;width:75%">
  <a href="coffeed.php">
  <img src="coffee.jpg" class="image">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Coffee</div></a>
  </div>
 </div>
   <div class="img-container" style="left:615px;top:-340px;width:75.5%">
  <a href="coconutd.php">
  <img src="coconut.jpg" class="image">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Coconut</div></a>
  </div>
 </div>
   <div class="img-container" style="left:165px;top:-315px;width:75.5%">
  <a href="arecanutd.php">
  <img src="arecanut.jpg" class="image">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Arecanut</div></a>
  </div>
 </div>
  <div class="img-container" style="left:460px;top:-495px;width:75%;height:185px">
  <a href="oilpalmd.php">
  <img src="oilpalm.jpg" class="image" style="height:185px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Oil Palm</div></a>
  </div>
 </div>
</div>
</div>
</div>
<div class="footer">
	<div class="container" style="width:1000px;height:120px;font-family:Merienda One;font-size:48px;background-color:rgba(0,0,0,0.0);position:relative;top:-5px;left:40px"><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;position:relative;top:-60;left:40px;color:white;">Blossoms at Backyard</p></div>
	<div><hr style="width:1200px;position:relative;top:-130px;left:60px;border-color:white"></hr></div>
	<div class="container" style="width:500px;height:20px;font-family:Candara Light;font-size:16px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:-120px;left:880px"><a href="Terms.php" style="color:white">Terms of service</a>&nbsp &nbsp &nbsp <a href="directory.php" style="color:white">Directory</a>&nbsp &nbsp &nbsp <a href="FAQ.php" style="color:white">FAQ</a>&nbsp &nbsp &nbsp <a href="events.php" style="color:white">Events</a>
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