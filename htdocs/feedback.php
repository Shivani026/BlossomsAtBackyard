<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>KNLive.in</title>
</head>
<style>
body { 
margin:0; 
overflow-x:hidden;
overflow-y:auto;
} 
.bg-img {
  background-image: url("bg24.jpeg");
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
	color:black;
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
  text-decoration: none;
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
  color: #292A2A;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  border-radius:4px;
}

/* Top Nav Hover*/
.topnav a:hover, .dropdown:hover .dropbtn{
  background-color:  rgba(202, 255, 216,0.6);
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
  background-color: rgba(202, 255, 216,0.6);
  color: black;
  text-decoration: none;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/* Feedback Form */
.form-container {
  position:absolute;
  top:80px;
  left:850px;
  padding:14px;
  width:430px;
  height:600px;
  border-radius:10px;
  font-color:white;
  background-color:rgba(0,0,0,0.0);
}
.submitbtn {
  background-color: #FC711C;
  position:relative;
  top:20px;
  left:25%;
  width:200px;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius:15px;
  cursor: pointer;
  opacity: 0.8;
  font-family:'Merienda One';
  font-size:18px;
}
.form-container input[type=text] {
  width:100%;
  font-size:20px;
  border-radius:20px;
  padding: 12px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  font-color:white;
  background:white;
}

/* Add a background color when the inputs get focus */
.form-container input[type=text]:focus:focus {
  background-color:#fafafa;
  outline: none;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0,0.0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
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
	 color:black;
}
/* footer-links */
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
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
<span style="font-family:Dancing Script;font-weight:bold;font-size:43px;cursor:pointer;position:relative;top:-68;left:40;color:#292A2A;" onclick="openNav()">&#9776;</span><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;cursor:pointer;position:absolute;top:-15px;left:90;color:black;"><a href="home.php" style="text-decoration:none;color:#292A2A"> Blossoms at Backyard</a></p>
</hr>
<div class="form-container" style="font-family:Candara Light;font-size:15px;color:#282928;">
     <h1 style="font-size:30px;position:relative;top:-15px">Feedback</h1>
      <p style="font-size:20px;position:relative;top:-25px;font-weight:bold">We'd love to hear more from you.</p>
	  <form action="feedbackdata.php" method="POST">
      <label for="username" style="position:relative;top:-30px;font-size:18px"><b> Your Name:</b></label>
      <input style="position:relative;top:-30px" type="text" placeholder="Enter your name" name="name" required>

      <label for="email" style="position:relative;top:-30px;font-size:18px"><b>Email:</b></label>
      <input style="position:relative;top:-30px"type="text" placeholder="Enter Email"  name="email" required>
	  
	  <label for="email" style="position:relative;top:-30px;font-size:18px"><b>Contact No.:</b></label>
      <input style="position:relative;top:-30px"type="text" placeholder="Enter Contact No."  name="contact" required>

      <label for="email" style="position:relative;top:-30px;font-size:18px"><b>Comment:</b></label><br>
      <textarea name="comment" rows="2" cols="5" style="border-radius:20px;width:430px;font-size:15px;padding:13px;position:relative;top:-30px" placeholder="Review please"></textarea><br><br>
      <button style="position:relative;top:-30px" type="submit" id="myBtn" class="submitbtn" name="submit">Submit</button>
	  <div id="myModal" class="modal">
	  <div class="modal-content">
       <span class="close">&times;</span>
      <p style="color:black;font-family:Times New Roman;font-size:20px">Thank you.Your feedback has been successfully submitted.</p>
		</div>
		</div>
      </form> 
</div>
<div class="footer">
	<div class="container" style="width:1000px;height:120px;font-family:Merienda One;font-size:48px;background-color:rgba(0,0,0,0.0);position:relative;top:-5px;left:40px"><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;position:relative;top:-60;left:40px;color:black;">Blossoms at Backyard</p></div>
	<div><hr style="width:1200px;position:relative;top:-130px;left:60px;border-color:black;height:0.05px"></hr></div>
	<div class="container" style="width:500px;height:20px;font-family:Candara Light;font-size:16px;color:black;background-color:rgba(0,0,0,0.0);position:relative;top:-120px;left:880px"><a href="Terms.php" style="color:black">Terms of service</a>&nbsp &nbsp &nbsp <a href="directory.php" style="color:black">Directory</a>&nbsp &nbsp &nbsp <a href="FAQ.php" style="color:black">FAQ</a>&nbsp &nbsp &nbsp <a href="events.php" style="color:black">Events</a>
	<div class="container" style="width:350px;height:200px;font-family:Candara Light;font-size:16px;color:black;background-color:rgba(0,0,0,0.0);position:relative;top:-40px;left:-800px"><p style="font-weight:bold;font-size:20px">Get in touch with us<br>Contact us at:</p><p>Shivani Awatade<br>Sushmita Paunikar<br>G.S.College of Commerce and Economics, Nagpur<br>Phone No. +07172258700<br>Email us at: blossomsatbackyrd@gmail.com<br>©Blossoms at Backyard 2020</p></div>
	</div>
	</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>