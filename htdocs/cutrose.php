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
  height:800%;
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
	 top:5500px;
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
<hr style="border-width:20px; border-color:#F01940"><div class="hr-container" style="top:-15px;left:32%"><p>HYBRID ROSE (Rosa hybrida)</p></div></hr>
<p style="font-weight:bold">Varieties</p>
<p style="font-size:15px">
Gladiator, Baby Pink, Sofia Lawrence, YCD 1, YCD 2, YCD 3 are commonly cultivated.
</p>
<img src="rose1.jpg" style="height:150px;width:200px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
	<img src="rose2.jpg" style="height:150px;width:200px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
    <img src="rose3.jpg" style="height:150px;width:200px;position:relative;left:220px;top:10px;bottom:10px;border-radius:6px">
	<p style="position:relative;left:100px;"> &nbsp &nbsp &nbsp YCD 1 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp YCD 2 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp YCD 3 </p>
<p align="justify" style="font-size:15px"><p style="font-weight:bold;font-size:18px">Soil and climate</p>
It is generally suitable for higher elevation (1500 m and above). It can also be grown in the plains under ideal condition of fertile loamy soils with salt-free irrigation water. The ideal climate for rose growing should have temperature with a minimum of 15°C and maximum of 28°C. Light is important factor which decides the growth. The growth is slowed by day length, i.e. > 12 hours and heavy overcast, cloudy/mist conditions. High relative humidity exposes the plant to serious fungal diseases. In tropics the ideal temperature is 25°C – 30°C on sunny day and on cloudy day 18°C – 20°C. The optimum temperature should be 15°C – 18°C. These temperatures are extremely difficult to find and it’s therefore to compromise.
<p style="font-weight:bold;font-size:18px">Propagation and planting</p>
The crop can be propagated by rooted cuttings or by budding on Briar root stocks in hills and on Edward Rose and Rosa indica in plains. One year old budded plants are planted in July - August at 75 cm x 75 cm spacing.
<p style="font-weight:bold;font-size:18px">Planting of Rose</p>
After cultivation the plants should be watered daily until they establish and thereafter once in a week. Pruning is done during March and October. Spray Diuran 2.5 kg a.i/ha to control weeds.  Avoid spray fluid coming in contact with Rose plants.
</p>
<img src="pruning.jpg" style="height:220px;width:200px;position:relative;left:300px;border-radius:6px;padding:10px">
   <p style="position:relative;left:340px;">fig. Pruning </p>
<p align="justify" style="font-size:15px">
<p style="font-weight:bold;font-size:18px">Support of the plants</p>
Post is placed at internals of 3m on both sides of the bed. Along the sides of the bed, galvanized wires or plastic string are fastened at the posts at 30cm – 40cm intervals to support the plant. Between the wires across the bed, thin strings can be tied to keep the width of the beds constant.
<p style="font-weight:bold;font-size:18px">Disbudding</p>
Varieties produce some side buds below the center bud. These side buds have to be removed or disbudded. The disbudding must be done regularly and also as soon as possible in order to avoid large wounds in the upper leaf axil.
</p>
<img src="disbuding.jpg" style="height:290px;width:400px;position:relative;left:210px;border-radius:6px;padding:10px">
<p align="justify" style="font-size:15px"><p style="font-weight:bold;font-size:18px">Dead shoot removal</p>
In the old plants the dead shoot or dried shoots on plants will serve as the host for fungi. So regularly these have to be removed.
<p style="font-weight:bold;font-size:18px">Soil loosening on beds</p>
After 6 months or so, there is every chance that the soil become stony and it has to be loosened for efficient irrigation.
<p style="font-weight:bold;font-size:18px">Bending</p>
Leaf is a source of food for every plant. There should be balance between Source (Assimilation) and sink (Dissimilation). After planting, 2 to 3 eye buds will sprout on main branch. These sprouts will grow as branches and these branches in turn form buds. The mother shoot is bend on 2nd leaf or nearer to the crown region. The first bottom break or ground shoot will start coming from the base. These ground shoots form the basic framework for production and thereon the ground shoots should be cut at 5th five pair of leaves and medium ground shoots should be cut at 2nd or 3rd five pair of leaves.
</p>
<p><img src="bending1.gif" style="height:200px;width:300px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
     <img src="bending2.jpg" style="height:200px;width:300px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px"></p>
<p style="position:relative;left:390px;">fig. Bending </p>
<p align="justify" style="font-size:15px"><p style="font-weight:bold;font-size:18px">Defoliation</p>
The removal of leaves is known as defoliation. It is done mainly to induce certain plant species to flower or to reduce transpiration loss during periods of stress. Defoliation may be done by removal of leaves manually or by withholding water. The shoots are defoliated after pruning.
<p style="font-weight:bold;font-size:18px">Manuring</p>
At three months interval, apply FYM at 10 kg and 8:8:16 g NPK/plant after each pruning. For cv. Happiness NPK may be applied @ 75:150:50 g/plant/year.
<p style="font-weight:bold;font-size:18px">Harvest</p>
Harvesting is done with sharp secateure at the tight bud stage when the colour is fully developed and the petals have not yet started unfolding. 
There should be 1-2 mature leaves (those with five leaflets) left on the plant after the flower has been cut.
The reason for leaving these matures leaves is to encourage production of new strong shoots. 
Harvesting is done preferably during early morning hours.
</p>
<p><img src="harvest1.jpg" style="height:200px;width:300px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
     <img src="harvest2.jpg" style="height:200px;width:300px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px"></p>
<p style="position:relative;left:200px;">Secateur for harvest  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Harvesting technique</p>
<p align="justify" style="font-size:15px"><p style="font-weight:bold;font-size:18px">Postharvest handling</p>
Roses must be placed in a bucket of water inside the polyhouse immediately after harvesting and transported to cold storage (2-4°C). 
The length of time depends upon the variety and quality of the roses.
The flowers are graded according to the length.It varies from 40-70 cm depending on the variety and packed in 10/12 per bunch.
</p>
<img src="precool.jpg" style="height:150px;width:200px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
	<img src="grad.jpg" style="height:150px;width:200px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
    <img src="pack.jpg" style="height:150px;width:200px;position:relative;left:220px;top:10px;bottom:10px;border-radius:6px">
	<p style="position:relative;left:100px;"> &nbsp &nbsp  Pre cooling  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp Grading&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Packing</p>
<p align="justify" style="font-size:15px">
<p style="font-weight:bold;font-size:18px">Physiological disorders</p>
<p style="font-weight:bold;font-size:18px">Blind wood</p>
The normal flowering shoot on a greenhouse rose possesses fully expanded sepals, petals, and reproductive parts.
The failure to develop a flower on the apical end of the stem is a common occurrence.
Such shoots are termed as blind wood.
The sepals and petals are present, but the reproductive parts are absent or aborted. 
Blind wood is generally short and thin, but it may attain considerable length and thickness when it develops at the top of the plant. 
This may be caused by low temperature, insufficient light, chemical residues, insect, pests, fungal diseases and other factors.
<p style="font-weight:bold;font-size:18px">Bull heads or malformed flowers</p>
The center petals of the bud remain only partly developed and the bud appears flat.
They are common on very vigorous shoots, particularly bottom breaks, and it is possible that there is a lack of carbohydrates to develop the petals. 
The cause of bull heading is yet unknown, however, thrips infestation will also cause malformed flowers.
Also at low temperature, some varieties will form bull heads.
<p style="font-weight:bold;font-size:18px">Colour fading</p>
The off- coloured flowers are seem to be a problem with some yellow varieties. 
In these varieties the petals may be green or a dirty white instead of a clear yellow. 
Raising the night temperature several degrees will reduce the number of off-coloured flowers. 
Occasionally the pink or red varieties develop bluish-coloured flowers. 
This is very often associated with use of organic phosphate and various other kinds of insecticides.
<p style="font-weight:bold;font-size:18px">Limp necks</p>
The area of the stem just below the flower “wilts” and will not support the head. 
This may be due to insufficient water absorption; cutting off the lower 1 to 2 inches of stem and placing the cut stem in water at 37°C will revive the flower.
<p style="font-weight:bold;font-size:18px">Blackening of rose petals</p>
This is caused by low temperature and high anthocyanin content. GA3 treatment causes accumulation of anthocyanin in petals of Baccara roses.
This effect was more pronounced at low temperature (20°C at day and 4°C at night) than in higher temperature (30°C at day and 20°C at night).
<p style="font-weight:bold;font-size:18px">Nutritional disorders</p>
Iron deficiencies can cause pale foliage. Adjusting the pH of the soil may solve this problem.
<p style="font-weight:bold;font-size:18px">Yield</p>
The Hybrid Teas roses can yield about 70 – 80 stems/plant/year, while the Floribundas yield yields 80 -90 stems/plant/year.
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