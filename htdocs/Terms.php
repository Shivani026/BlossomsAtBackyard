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
  background-image: url("bg27.jpeg");
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
  background-color: rgba(255, 246, 244,0.6);
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
<div class="text-container" >
<h1 style="color:#11067F;font-size:48px;font-family: Merienda One;position:relative;left:30px">Terms Of Service</h1>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:180px;width:350px;color:black">
<p style="font-size:38px;font-family:Gill Sans MT;color:#4C4A61">Thank you for using Blossoms at Backyard!</p>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:170px;width:650px;color:black;float:right;left:0px;position:relative;top:-210px;font-family:Gill Sans MT;font-size:48px;">
<p style="font-size:20px;color:#4C4A61" align="justify">These Terms of Service ("Terms") govern your access to and use of the Blossoms at Backyard website (“Blossoms at Backyard” or the “Service”). Please read these Terms carefully, and contact us if you have any questions. By accessing or using Blossoms at Backyard, you agree to be bound by these Terms, our Privacy Policy, our Cookies Policy and our Community Guidelines.</p>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:180px;width:350px;color:black;position:relative;top:0px;font-family:Gill Sans MT">
<p style="font-size:38px;font-family:Gill Sans MT;color:#4C4A61">1.Our service</p>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:210px;width:650px;color:black;float:right;left:0px;position:relative;top:-190px;font-family:Gill Sans MT;font-size:48px">
<p style="font-size:20px;color:#4C4A61" align="justify">Blossoms at Backyard helps you discover more about horticulture. To do that, we show you things we think will be relevant, interesting and personal to you based on your search and onsite activity. To provide our Service, we need to be able to identify you and your interests. Some of the things we show you are promoted by advertisers. As part of our service we try to ensure that even promoted content is relevant and interesting to you. You can identify promoted content because it will be clearly labelled.</p>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:180px;width:350px;color:black;position:relative;top:50px;font-family:Gill Sans MT">
<p style="font-size:38px;font-family:Gill Sans MT;color:#4C4A61">2. Using Blossoms at Backyard</p>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:840px;width:650px;color:black;float:right;left:0px;position:relative;top:-190px;font-family:Gill Sans MT;font-size:48px">
<p style="font-size:38px;font-family:Gill Sans MT;color:#4C4A61">A. Who can use Blossoms at Backyard</p><p style="font-size:20px;color:#4C4A61" align="justify">You may use Blossoms at Backyard only if you can legally form a binding contract with Blossoms at Backyard, and only in compliance with these Terms and all applicable laws. When you submit your feedback, you must provide us with accurate and complete information. You can’t use Blossoms at Backyard if it would be prohibited by any sanctions.  Using Blossoms at Backyard may include downloading software to your computer or laptop. You agree that we may automatically update that website, and these Terms will apply to any updates.</p>
<p style="font-size:38px;font-family:Gill Sans MT;color:#4C4A61">B. Our license to you</p><p style="font-size:20px;color:#4C4A61" align="justify">Subject to these Terms and our policies (including our Community Guidelines), we grant you a limited, non-exclusive, non-transferable, and revocable license to use our Service.</p>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:180px;width:350px;color:black;position:relative;top:360px;font-family:Gill Sans MT">
<p style="font-size:38px;font-family:Gill Sans MT;color:#4C4A61">3. Your Access</p>
</div>
<div class="text-container" style="background-color:rgba(0,0,0,0.0);height:520px;width:650px;color:black;float:right;left:0px;position:relative;top:-540px;font-family:Gill Sans MT;font-size:48px">
<p style="font-size:38px;font-family:Gill Sans MT;color:#4C4A61">A. Searching Content</p><p style="font-size:20px;color:#4C4A61" align="justify">You may use Blossoms at Backyard for searching the content of your choice; be it information regarding a particular flower or crop, blossoms at backyard will provide you with all the available content it has with respect to what you searched for.</p>
<p style="font-size:38px;font-family:Gill Sans MT;color:#4C4A61">B. Limitation of content</p><p style="font-size:20px;color:#4C4A61" align="justify">Blossoms at Backyard does not claim to provide you information regarding every particular horticulture crop you ask for; but its editors can make you available with the information required to you by responding to your request. All you've got to do is send us your query or request through the feedback section provided by us and you'll be notified once the information you requested for has been added to the website.</p>
</div>
</div>
<div class="footer">
	<div class="container" style="width:1000px;height:120px;font-family:Merienda One;font-size:48px;background-color:rgba(0,0,0,0.0);position:relative;top:-5px;left:40px;bottom:30px"><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;position:relative;top:-60;left:40px;color:white;">Blossoms at Backyard</p></div>
	<div><hr style="width:1200px;position:relative;top:-130px;left:60px;border-color:white"></hr></div>
	<div class="container" style="width:500px;height:20px;font-family:Candara Light;font-size:16px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:-120px;left:880px"><a href="Terms.php" style="color:white">Terms of service</a>&nbsp &nbsp &nbsp <a href="directory.php" style="color:white">Directory</a>&nbsp &nbsp &nbsp <a href="FAQ.php" style="color:white">FAQ</a>&nbsp &nbsp &nbsp <a href="events.php" style="color:white">Events</a>
	<div class="container" style="width:350px;height:200px;font-family:Candara Light;font-size:16px;color:white;background-color:rgba(0,0,0,0.0);position:relative;top:-40px;left:-800px"><p style="font-weight:bold;font-size:20px">Get in touch with us<br>Contact us at:</p><p>Shivani Awatade<br>Sushmita Paunikar<br>G.S.College of Commerce and Economics, Nagpur<br>Phone No. +07172258700<br>Email us at: blossomsatbackyrd@gmail.com<br>©Blossoms at Backyard 2020</p>
	</div>
	</div>
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