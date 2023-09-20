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
  border-color:#581845;
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
  height:290%;
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
	 top:2100px;
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
<hr style="border-width:20px; border-color:#581845"><div class="hr-container" style="top:-15px;left:41%"><p>SAPPAN WOOD</p></div></hr>
<img src="sapp1.png" style="height:210px;width:200px;position:relative;left:345px;top:10px;bottom:10px;border-radius:6px"><br><br>
Sappan wood or East Indian red wood is a multipurpose tree, yielding valuable natural dyes with medicinal plant properties. In India, it is cultivated in gardens and nurseries as a live fence plant in parts of Tamil Nadu, Kerala, Karnataka, Andra Pradesh and West Bengal.
<p style="font-weight:bold;font-size:18px;">Uses:<br>Timber :</p>
The tree is the source of the commercial redwood or Brazilwood. Sapanwood is white, heartwood makes upto 90% of the total volume is yellow or deep orange when fresh turning to dark red. The wood is straight grained with a fine to moderately fine texture, fairly heavy (600-780kg/m3), hard and lustrous. It is difficult to dry and susceptible to warping and resistant to termite attack. It is used for inlaying work, cabinet making, violin bows and for walking sticks.
<p style="font-weight:bold;font-size:18px;">Gum or resin :</p>
The stem produces a gum. Tannin or dyestuff: The heartwood yields a valuable red crystalline dye used on cotton, silk and wool fabrics. Bakam gives bright red and violet shades, and with garcine produces a chocolate tint. Bark and pods yield similar dyes, 40% tannin used for production of light leather goods.
Roots give a yellow dye. Sappan yields different shades of red with or without mordant. Natural mordant such as the bark of Lodhara (Symplocos racemosa) and Ebenum (Diospyrose ebenum) are frequently used to increase the binding potential of the dye
<p style="font-weight:bold;font-size:18px;">Essential oil:</p>
Leaves contain a pleasant smelling volatile oil. Medicine: A decoction of the wood is a powerful emmenagogue and, because of its tannic and gallic acids, is an astringent used in mild cases of dysentery and diarrhea. It is also given internally for certain skin aliments. The sappan is given as a tonic to women after confinement and to relieve vomiting of blood. It is one of the ingredients in a mixture prescribed for malaria. The dried heartwood is widely used in oriental medicine, particularly against inflammation. Seeds serve as a sedative.
<p style="font-weight:bold;font-size:18px;">Soil and climate:</p>
t grows well in all kinds of soil and lushy growth is obtained in red soil. It withstands drought and defoliates only for a short period of 10-15 days. It does not tolerate too wet soil conditions. Sappanwood tolerates an annual precipitation of 700-4300 mm, a mean annual temperature of 24-28oC and a soil pH of 5-7.5.
<p style="font-weight:bold;font-size:18px;">Propagation:</p>
Sappanwood can be propagated by seed and renewed by coppicing. Usually mature pods burst open in the dry season and scatter the seeds, which remain dormant untill the start of the rainy season. Pods are gathered, pounded and put into cold water. Seed germination occurs readily but is enhanced by dipping seeds wrapped in cotton cloth in boiling water for 5 seconds. Germination rate is 90%.
<br>Usually mature pods burst open in the dry season and scatter the seeds, which remain dormant until the start of the rainy season. Seeds germinate immediately if enough moisture is available. The germination rate is enhanced to about 90% by dipping the seeds into boiling water for 5 seconds. Usually the plants are grown in the shade of trees in the forest or in forest borders.
<p style="font-weight:bold;font-size:18px;">Crop management:</p>
Initially C. sappan grows straight but at about 2.5 m height, the branches start to droop with branches of nearby trees to from thickets, generally free from undergrowth. After the tree is felled, the stump sprouts profusely within 2 weeks. For use as dyewood, the tree is harvested every 6-8 years and when the trunk has attained 5-6 cm diameter. The tree is cut about 1 m above the ground to allow sprouts to grow from the stump.
<p style="font-weight:bold;font-size:18px;">Manures and fertilizers::</p>
5 kg if FYM is applied basally to each plant at the time of field preparation. Except organic inputs, little or no chemical fertilizers are applied.
<p style="font-weight:bold;font-size:18px;">Plant protection:</p>
Pod borer and termites are the major insects reported. Pod borers can be controlled by spraying 0.2% monocrotophos during fruiting stage at weekly intervals. Likewise termites can be controlled by drenching the soil with Chlorpyriphos or Dursban at 2ml/1 if water.
Medicinal plants require production involving minimal or no usage of chemical pesticides. Organic practices include control measures using neem based formulations. Fish oil resin soap can be used to manage such sucking pests. Botanicals viz., extracts of garlic, Vitex negundo, Lantana camera, Clerodendron inerme, Calotropis gigantean are often combined and sprayed periodically for controlling the pests.
<p style="font-weight:bold;font-size:18px;">Harvesting and yield:</p>
The main branches along with the stump are harvested. Average yield of inner pulp is about 80kg/tree. Seeds can be harvested right from the second year of planting but the heartwood is ready only after 6-12 years. An yield of 2000-2500kg of pods may be obtained, which inturn may yield 200-250 kg seeds per hectare. The harvested wood is chipped into pieces and the dye is extracted boiling them in water. While extracting, few paddy grains are thrown into boiling liquid to check the completion of the extraction process. If the husk scales off, boiling is considered sufficient. The wood dye yield varies with varietal and cultural factors
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