<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Blossoms at Backyard : Home : Plantation Crops</title>
</head>
<style>
body { 
margin:0; 
overflow-x:hidden;
} 
.bg-img {
  background-image: url("ground.jpg");
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
	left:40%;
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
  left:200px;
  padding:14px;
  width:70%;
  height:45%;
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
<div class="text-container" style="  font-family: Merienda One;">
<hr style="border-width:20px; border-color:#53302D"><div class="hr-container"><a>Nursery Techniques</a></div></hr>
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">1.Establishment of Nursery</p>
<img src="nur1.png" style="height:200px;width:260px;position:relative;left:330px;top:20px;bottom:25px;border-radius:6px">
<p style="font-size:15px;position:relative;top:30px">
Nursery is developed gradually. The mother plants planted for vegetative and seed propagation and seed propagated plants such as seasonal flower seedlings are raised for sale simultaneously. Important factors considered for establishing a nursery are agro-climatic conditions, soil types, soil pH, location, area, irrigation facilities, communication, market demand, availability of germplasm or mother plants, skilled persons, etc.</br>
Selection of site: The site selected for raising a nursery should preferably be located near marketing centres for the convenience of transportation of the products with minimum or no damage. The site should be convenient enough for transportation of input materials also. It is important to have or develop a perennial source of water inside the nursery. If need arises, wind breaks of tall plants like eucalyptus, aonla, seedling mango, etc. may be planted to provide necessary shade and protection.</br>
Product choice: The product choice will primarily depend on the market demand in nearby areas. For wider market coverage, the choice may be dependent on market studies in the desired areas. Varieties of various ornamental plants like shade loving foliage plants, flowering plants, creepers, plants suitable for parks, gardens and roadside plantations, offices, business houses, hospitals, residential buildings, etc. may be propagated in the nursery. Planting materials such as seedlings of flowers, bulbs, corms, etc. may also be produced.</br>
Physical programme: For this model, the following physical programme is considered</br>
</p>
<img src="nur2.png" style="height:130px;width:380px;position:relative;left:330px;top:30px;bottom:25px;border-radius:6px">
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">2.Nursery Structures</p>
Structures required: A number of structures may be necessary for raising a nursery. To begin with, the following structures need to be constructed:</br>
<ol>
<li>Workshed: The workshed of 6 m x 4.5 m with thatch roofs and locally available materials like bamboo, wood, etc. may be constructed. Total amount of Rs.6750/- @ Rs.250 per sq.m. has been considered for this purpose.</li>
<li>Polyhouse: The polyhouse of 9 m x 4 m dimension with 90 cm, brick wall, 3.6 m tall rhombus netting with expanded metal and polythene roof supported by local materials like bamboo, wood and planks, may be constructed. The cost estimated for such a house is approximately Rs.300.00 per sq.m. An additional lumpsum amount of Rs.2000.00 may be considered for construction of wooden racks inside the poly house.</li>
<li>Store-cum-office: A store-cum-office of 6.0 m x 4.5 m constructed with locally available materials may serve the purpose. For this, a rate of Rs. 350/- per sq.m. has been considered adequate.</li>
<li>Fencing: A goat proof fencing only will be effective for a nursery. For this model of 0.5 acre area, an amount of Rs.16250.00 has been considered as the total cost for erecting a goat-proof fencing around the boundary.</li>
</ol>
</p>
<img src="nur3.png" style="height:150px;width:200px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px">
<img src="nur4.png" style="height:150px;width:200px;position:relative;left:270px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Poly House structure &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp Land Preparation fot nursery</p>
<p style="font-size:15px">
<p style="font-weight:bold;font-size:20px;">Land preparation:</p>
<ul>
<li>The land development for nursery is very important.</li>
<li>In nursery, the land may be divided into minimum four parts: area for mother plant, area for seed production,area for raising flower seedlings and area for storing of seedlings or vegetatively propagated perennial plants.</li>
<li>The land of a nursery is prepared by ploughing and cross ploughing.</li>
<li>All kinds of waste materials are to be removed and the land must be levelled properly.</li>
</ul>
<p style="font-weight:bold;font-size:20px;">3.Pro tray Technique</p>
Mix sterilized cocopeat @ 300 kg with 5 kg neem cake along with Azospirillum and phosphobacteria each @ 1 kg. Approximately 1.2 kg of cocopeat is required for filling one protray. 238 protrays (98 cells) are required for the production of 23,334 seedlings, which are required for one hectare adopting a spacing of 90 x 60 x 60 cm in a paired row system.</br>
Sow the treated seed in protrays @ 1 seed per cell.</br>
Cover the seed with cocopeat and keep the trays one above the other and cover with a polythene sheet till germination starts.</br>
After 6 days, place the protrays with germinated seeds individually on the raised beds inside the shade net.</br>
</br>
Raising vegetable nursery in portrays</br>
Chillies, tomato and brinjal seeds were sown in portrays with cocopeat. The portrays and cocopeat was purchased from Dharmapuri. While sowing, the portrays were filled with cocopeat and seeds were sown. Ten portrays were arranged one on the other and covered by a polythene sheet and kept as such for four days. On 5th day the polythene cover was taken out and water was sprinkled by rose cane. Afterwards the seedlings were maintained in the shade net.</br>
</br>
Impact Horizontal spread</br>
Farmers had accepted the benefit of raising nursery in protrays rather than in nursery bed. Because of better establishment of seedlings in main field, farmers feel that gap filling is is much minimized as pro tray seedlings established well.
</br></br>
Economic gains</br>
The farmer had raised 55,000 seedlings (Tomato Seedlings : 20,000, Brinjal seedlings: 15,000 and Chilli seedlings : 20,000) during last year using protrays with cocopeat. He sold the seedlings to farmers of his own village at a cost of 55 paise/seedling. By which he earned about Rs. 30,250/-. The expenditure for producing the seedlings was Rs.10,600/- and he had got a net income of Rs.19,650/-.
</br></br>
Employment generation</br>
The seedlings are raised in shade net and sold to other farmers at a reasonable price. His labourers were skill trained in handling pro trays and nursery techniques. Many landless labourers have got employment opportunities
</br></br>
</p>
<img src="nur5.png" style="height:150px;width:200px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px">
<img src="nur6.png" style="height:150px;width:200px;position:relative;left:285px;top:10px;bottom:10px;border-radius:6px">
<p style="position:relative;left:100px;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Cocopeat and Pro tray&nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp Filling of cocopeat in Pro tray</p>
<p style="font-size:15px">
<ul>
<li>There has been an increasing demand for horticultural crops more particularly fruit and ornamental ones in both urban and rural areas of India.</li>
<li>With this, the demand for good quality planting materials has gone up and hence the nursery business has developed rapidly in the recent years in our country.</li>
<li>Nursery product is no longer restricted to orchards or large parks and gardens.</li>
<li>It has entered into high rise buildings, offices, factories, business houses, hospitals, hotels, backyards, roadsides in cities, roof tops, etc. for decoration purpose.</li>
<li>Heavy demand is observed during festive seasons and seasons of fairs and melas.</li>
<li>Ornamental nursery business has, therefore, come up in a large scale in areas near city and towns.</li>
</ul>
</p>
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