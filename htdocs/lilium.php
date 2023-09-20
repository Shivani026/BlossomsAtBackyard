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
  left:225px;
  padding:14px;
  width:65%;
  height:523%;
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
	 top:3600px;
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
<div class="text-container" style="  font-family: Merienda One;font-size:20px;">
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:41%"><p>LILIUM</p></div></hr>
<p style="font-weight:bold">Varieties</p>
<p style="font-size:15px">
<p style="font-weight:bold">Asiatic hybrids :</p>
Dreamland (yellow), Brunello (orange), Novona (white), Pollyanna (yellow), Yellow Giant (yellow), Vivaldi (pink), Black Out (Deep red)<br>
<p style="font-weight:bold">Oriental hybrids:</p>
Star Gazer (Pink & white), Nerostar, Siberia, Acapulco (cyclamen pink) and Casablanca<br>
<p style="font-weight:bold">Eastern lily (L. longiflorum)</p>
 Elegant Lady, Ace, Snow Queen, White, American, Croft and Harbor<br>
 <img src="lili1.png" style="height:200px;width:300px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
<img src="lili2.png" style="height:200px;width:300px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;"> &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp  Royal Sunset Lily hybrid &nbsp &nbsp &nbsp  &nbsp &nbsp Sorbonne Oriental Lilly </p>
<p style="font-weight:bold">Climate:</p> Liliums are best grown in green houses. Day temperature of 18-22°C and night temperature of 10-15°C are ideal.<br>

<p style="font-weight:bold">Soil:</p>Well drained sterile medium (preferably leaf mould, cocopeat and FYM in equal parts) with pH 5.5 to 6.5 is ideal. Fumigate the beds with Dazomet @ 30g/m2.<br>

<p style="font-weight:bold">Propagation:</p> Liliums are commercially propagated through bulbs. A six week cold storage period at 2oC to 5oC is needed to break dormancy. Bulbs can be stored at - 20C up to one year.<br>

<p style="font-weight:bold">Spacing:</p> 20 x 15 cm, 15 x 15 cm or 15 x 10 cm (plant density varies between 30 and 60/m2 depending on cultivar and bulb size)<br>

<p style="font-weight:bold">Irrigation:</p> 6- 8 litres/m2/day during summer and 5 - 6 litres/m2/day during winter<br>
<img src="lili3.png" style="height:200px;width:300px;position:relative;left:140px;top:10px;bottom:10px;border-radius:6px;border-style:solid;border-color:yellow;">
<img src="lili4.png" style="height:200px;width:300px;position:relative;left:160px;top:10px;bottom:10px;border-radius:6px;border-style:solid;border-color:yellow;">
<p style="position:relative;left:100px;"> &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Three week old bulbs &nbsp &nbsp &nbsp  &nbsp &nbsp Lilly Aphids with crescent marking </p>
<p style="font-weight:bold">Crop support:</p> Supporting plants withnylon mesh is advisable.
<p style="font-weight:bold">Plant protection:</p>
<p style="font-weight:bold">Pests:</p>
<p style="font-weight:bold">Aphids: </p>Apply Imidacloprid 17.8 % SL @ 1 ml/l or Dimethoate 30  EC @ 2  ml/l
<p style="font-weight:bold">Mites: </p>Spray Wettable sulphur @ 1.5 g/l or Abamectin @ 0.4 ml/l or Propargite @ 2 ml/l.
<p style="font-weight:bold">Thrips:</p> Spray Methyl demeton 25EC @ 2 ml/ or Dimethoate 30EC @ 2ml/l
<p style="font-weight:bold">Diseases:</p>
<p style="font-weight:bold">Grey mould:</p> Spray Zineb @ 2g/l
<p style="font-weight:bold">Bulb and scale rot:</p>Soil drenching with Carbendazim @ 1g/l or Difenoconazole @ 0.5ml/l
<p style="font-weight:bold">Foot rot & Root rot:</p> Soil drenching with Metalaxyl @ 0.1%
<p style="font-weight:bold">Botrytis Blight:</p>Dark brown spots on leaves,spraying of carbendazim @ 2g/lit of water effectively control the disease.
<p style="font-weight:bold">Harvest: </p>Harvesting is done when lower most bud shows colour (colour breaking stage) but is not open.
<p style="font-weight:bold">Crop duration:</p>
<p style="font-weight:bold">Asiatic hybrids   : </p> 8 - 10 weeks
<p style="font-weight:bold">Oriental hybrids : </p>14 - 16 weeks
<p style="font-weight:bold">Yield: </p>The average yield is 30 - 40 flower stems/m2<br>
<img src="lili6.png" style="height:350px;width:250px;position:relative;left:60px;top:10px;bottom:10px;border-radius:6px;border-style:solid;border-color:yellow;">
<img src="lili7.png" style="height:325px;width:450px;position:relative;left:90px;top:10px;bottom:10px;border-radius:6px;border-style:solid;border-color:yellow;">
<p style="position:relative;left:10px;"> &nbsp Harvesting stage with one bud &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  	Full Grown Lilly before harvest </p>
</p>
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