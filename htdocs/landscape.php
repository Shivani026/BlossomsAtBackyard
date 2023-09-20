<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Blossoms at Backyard : Home : Landscaping and Decor</title>
</head>
<style>
body { 
margin:0; 
overflow-x:hidden;
overflow-y:auto;
} 
.bg-img {
  background-image: url("bg19.jpeg");
  background-repeat: repeat-y;
  background-size: cover;
  position: relative;
  height:1020px;
}
hr {
  display: block;
  margin:0;
  border-style: solid;
  border-color:rgba(0,0,0,0);;
 }
.hr-container{
	font-family: Merienda One;
	font-size:20px;
	color:white;
	text-align:centre;
	position: absolute;
	top:20px;
	left:33%;
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
  color: white;
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
/* flower categories*/
.category-container {
  padding-top:20px;
  padding-bottom:30px;
  position: relative;
  overflow-y:auto;
  overflow-x:hidden;
  top:-40px;
  left:220px;
  padding: 14px;
  width:900px;
  height:50%;
  border-radius:10px;
  font-color:white;
  background-color: rgba(254, 249, 190,0.8);
}
.img-container {
  position: absolute;
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
<span style="font-family:Dancing Script;font-weight:bold;font-size:43px;cursor:pointer;position:relative;top:-68;left:40;color:white;" onclick="openNav()">&#9776;</span><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;cursor:pointer;position:absolute;top:-15px;left:90;color:#ffffff;"><a href="home.php" style="text-decoration:none;color:#ffffff"> Blossoms at Backyard</a></p>
</hr>
<div class="category-container">
<hr style="border-width:20px;border-color:#BA5E0C;"><div class="hr-container" style="position:relative;left:42%;top:-35px"><a>Landscaping</a></div></hr>
 <div class="img-container" style="left:25px;top:70px;width:500px;height:150px">
  <a href="principles.php">
  <img src="landscaping.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Principles</div></a>
  </div>
 </div>
  <div class="img-container" style="left:250px;top:70px;width:500px;height:150px">
  <a href="features.php">
  <img src="gardenfea.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Garden Features</div></a>
  </div>
 </div>
   <div class="img-container" style="left:475px;top:70px;width:500px;height:150px">
  <a href="plantcomp.php">
  <img src="gardenplacom.jpeg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Plant Components</div></a>
  </div>
 </div>
   <div class="img-container" style="left:700px;top:70px;width:500px;height:150px">
  <a href="types.php">
  <img src="types.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Types of Garden</div></a>
  </div>
 </div>
   <div class="img-container" style="left:25px;top:250px;width:500px;height:150px">
  <a href="nurseryman.php">
  <img src="nurseryman.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Nursery Management</div></a>
  </div>
 </div>
   <div class="img-container" style="left:250px;top:250px;width:500px;height:150px">
  <a href="vergarden.php">
  <img src="vergarden.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Verticle Garden</div></a>
  </div>
 </div>
 <div class="img-container" style="left:475px;top:250px;width:500px;height:150px">
  <a href="hangcon.php">
  <img src="Hangingcon.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Hanging Containers</div></a>
  </div>
 </div>
 <div class="img-container" style="left:700px;top:250px;width:500px;height:150px">
  <a href="terrarium.php">
  <img src="terrarium.png" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Terrarium</div></a>
  </div>
 </div>
   <div class="img-container" style="left:25px;top:430px;width:500px;height:150px">
  <a href="lawnmak.php">
  <img src="lawnmaking.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Lawn Making</div></a>
  </div>
 </div>
  <div class="img-container" style="left:250px;top:430px;width:500px;height:150px">
  <a href="flowerarr.php">
  <img src="flowerarr.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Flower Arrangement</div></a>
  </div>
 </div>
  <div class="img-container" style="left:475px;top:430px;width:500px;height:150px">
  <a href="bonsai.php">
  <img src="bonsai.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Bonsai</div></a>
  </div>
 </div>
  <div class="img-container" style="left:700px;top:430px;width:500px;height:150px">
  <a href="roofgarden.php">
  <img src="roofgarden.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Roof Garden</div></a>
  </div>
 </div>
  <div class="img-container" style="left:250px;top:610px;width:500px;height:150px">
  <a href="gardenwaste.php">
  <img src="gardenwaste.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Garden Waste</div></a>
  </div>
</div>
  <div class="img-container" style="left:475px;top:610px;width:500px;height:150px">
  <a href="kitchengar.php">
  <img src="kitchengar.jpg" class="image" style="height:150px">
  <div class="overlay">
    <div class="text" style="cursor:pointer">Kitchen Garden</div></a>
  </div>
 </div>
<hr style="border-width:20px;opacity:0;position:absolute;top:750px;width:100%""><div class="hr-container" style="position:absolute;top:750px"><a></a></div></hr>
</div>
<div class="footer">
	<div class="container" style="width:1000px;height:120px;font-family:Merienda One;font-size:48px;background-color:rgba(0,0,0,0.0);position:relative;top:-5px;left:40px"><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;position:relative;top:-60;left:40px;color:white;">Blossoms at Backyard</p></div>
	<div><hr style="width:1200px;position:relative;top:-130px;left:60px;border-color:white"></hr></div>
	<div class="container" style="width:500px;height:20px;font-family:Candara Light;font-size:16px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:-120px;left:880px"><a href="Terms.php" style="color:white">Terms of service</a>&nbsp &nbsp &nbsp <a href="directory.php" style="color:white">Directory</a>&nbsp &nbsp &nbsp <a href="FAQ.php" style="color:white">FAQ</a>&nbsp &nbsp &nbsp <a href="events.php" style="color:white">Events</a>
	<div class="container" style="width:350px;height:200px;font-family:Candara Light;font-size:16px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:-40px;left:-800px"><p style="font-weight:bold;font-size:20px">Get in touch with us<br>Contact us at:</p><p>Shivani Awatade<br>Sushmita Paunikar<br>G.S.College of Commerce and Economics, Nagpur<br>Phone No. +07172258700<br>Email us at: blossomsatbackyrd@gmail.com<br>©Blossoms at Backyard 2020</p></div>
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