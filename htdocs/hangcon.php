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
  height:380%;
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
	 top:2700px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:35%"><p>HANGING CONTAINERS</p></div></hr>
<img src="han1.png" style="height:350px;width:350px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p>A group of attractive indoor plants in a hanging basket will indeed provide a beautiful display, but do not rush into hanging a container from a hook in the ceiling or a bracket on the wall until you have carefully studied the difficulties.
They are particularly useful where space is limited, but even in conventional gardens they are many opportunities to use aerial displays of plants. They are invaluable for softening architectural environments; helping to lift the eye above other planting; and can be integrated into ambitious schemes in which plants are arranged on several lines.</p>
<p style="font-weight:bold;font-size:18px;">Hanging baskets:</p>
The traditional hanging basket is a simple suspended container consisting of a wire frame in which a linear holds sufficient growing mix to sustain one or, more usually, several plants. A number of other suspended containers – either ready-made or improvised – serve the same purpose and displayed in a similar way to hanging baskets.
<p>Wire-framed baskets and other suspended containers are best planted so that the container itself is concealed by full and trailing growth. This may be achieved with a single vigorous trailer,such as Tradescantia zebrina, a popularhouse or conservatory</p>
<p>plant that can also be moved outdoors in summer.In general, however, it is easier to create a floating cloud of foliage and flowers with a mixture of several different, less tender plants. The aim is to achieve a loosely rounded shape, using plants of different habit, so that growth hides the container. One approach is to use upright and rounded plants to form a crown above an irregular, hanging fringe of trailing or spreading plants. This could be achieved by including erect cultivars of pelargoniums and Verbena x hybrida, franked by trailing fuchsias, lobelias, and petunias. Another option is to use containers that are in themselves ornamental, so that, even when the display is at its peak, some of the container is visible.
Hanging baskets are often hung as isolated features, perhaps to take advantage of an existing support. This might be an arc or the cross piece of a pergola, for example. Another approach is to fit specially made supporters for single or multiple hanging baskets.</p>
<img src="han2.png" style="height:370px;width:350px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br><br>
<p style="position:relative;top:20px">	Brackets can be simple and inconspicuous, or ornamental and in a style that suits the surroundings.
A hanging basket can make a dramatic focal point to enliven a blank wall, especially if it can be seen from a window or door. They can also be eye-catching when suspended from the corner of a building, but for safety they must be well above the highest of passers-by.</p>
<p style="font-weight:bold;font-size:18px;">Elevated eve-catcher :</p>
This vibrant combination of trailing plants ensures a long season of colour; they mask the basket, but the ornamental bracket can still be seen.
        The most obvious of the multiple arrangements are pairs of baskets, mounted, for example, either side of a door or combined with other containers. A handsome design can be created by using a large container, such as an urn, at ground level against a wall, with hanging baskets mounted above it and on either side. The plants in the hanging baskets may match or contrast with those in the large container.
For a more ambitious scheme, hanging baskets can be hung in rows, for example, on a series of arches, or on brackets along a wall. Carefully coordinated or contrasting plantings can be dramatically staged by using a cast of smaller baskets either side of a large one, or by introducing variations in the height at which the containers are suspended.Using the cross-pieces of a pergola, a sequence of paired hanging baskets either side of a path makes an impressive avenue, although it is worth bearing in mind that such features will be time-consuming to water.
<p style="font-weight:bold;font-size:18px;">Containers & Medium:</p>
You must choose a container, which is suitable for indoors. The standard wire basket lined with sphagnum moss is ideal for outdoors, but in the home you will have the problem of water dripping on to the floor. You can line the basket with polythene sheet, but waterlogging may then be a problem. The best answer is to put the pots of plants in a larger waterproof container, which bears the holding wires, chains or cords. The space between the pots and the hanging container should be filled with moist peat. A variation is a plastic hanging pot with a built-in drip tray. Always use a peat-based potting compost rather than a soil one—excess weight can be a problem.
<p style="font-weight:bold;font-size:18px;">Watering:</p>
 To make watering and misting an easier task place the display at eye level or if you must suspend it over head-high then have a pulley arrangement instead of an ordinary hook. You can buy a pump-action watering can if the display cannot be lowered. Ensure that the hook is securely fixed to a ceiling joist or the bracket is firmly attached to the wall, and finally make sure that your choice of plants is suited to the light available—flowering plants and variegated foliage house plants will need a spot near a window.
<p style="font-weight:bold;font-size:18px;">Good hanging basket plants:</p>
<img src="han3.png" style="height:200px;width:400px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br><br>
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