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
  border-color:#53302D;
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
  height:400%;
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
	 top:2800px;
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
<hr style="border-width:20px; border-color:#53302D"><div class="hr-container" style="top:-15px;left:41%"><p>COCOA</p></div></hr>
<img src="coa1.png" style="height:230;width:500px;position:relative;left:180px;top:30px;bottom:10px;border-radius:6px"><br>
<br><p style="font-weight:bold;font-size:18px;">Varieties</p>
There are three varietal types in cocoa namely Criollo, Forastero and Trinitario. Forastero types are known to perform well under Indian conditions.  Kerala Agricultural University has released 7 improved clones of Forestero types namely CCRP – 1, CCRP – 2, CCRP – 3,               CCRP – 4, CCRP– 5, CCRP – 6 and CCRP – 7 and 3 hybrids CCRP – 8, CCRP – 9, CCRP – 10. Central Plantation Crops Research Institute, Vittal has released one clone named as VTLCC-1 and 4 hybrids namely VTLCH1, VTLCH2, VTLCH3 and VTLCH4.  Based on survey made during 2008-2012 in TamilNadu, totally 151 trees were identified for yield and quality. These trees were continuously evaluated and best performing ten elite trees were selected and named as TNAUCC1 to TNAUCC10. The clonal propagation of these trees are in progress.
<p style="font-weight:bold;font-size:18px;">Climate and soil</p>
The natural habitat of the cocoa tree is in the lower storey of the evergreen rainforest, and climatic factors, particularly temperature and rainfall, are important in encouraging optimum growth. Cocoa is a perennial crop, and it can withstand different seasonal variations with good health and yield potential. Cocoa is normally cultivated at altitudes upto 1200 m above MSL with an annual rainfall of 1000mm to 2000mm and a relative humidity of 80 % with maximum 350C and minimum temperature of 150C. Cocoa can be grown as intercrop in coconut and arecanut gardens. It is predominantly grown on red laterite soils. It thrives well on wide range of soil types with pH ranging from 4.5- 8.0 with optimum being 6.5- 7.0.
<p style="font-weight:bold;font-size:18px;">Propagation</p>
Cocoa can be propagated by seeds. Seeds are to be extracted from pods. Cocoa pods take 150-170 days from pollination to attain the harvest stage. The stage of maturity is visible from the change of pod colour from green to yellow (Forestero) and red to yellow (Criollo). Collection of seeds from biclonal or polyclonal seed gardens involving superior self-incompatible parents is recommended to ensure genetic superiority of planting materials.  In TNAU coconut nursery, a poly clonal seed garden with 7 improved clones of KAU (CCRP1 to CCRP7)  and Vittal cocoa clone 1 and 4 hybrids namely VTLCH1 to VTLCH4.
Harvested seed pods can be stored in shade upto one week. Viviparous germination is reported in ripe cocoa which may affect the percentage of germination if it is stored beyond one week. Seeds are to be sown immediately after extraction from the pods. Viability of the beans can be extended for some more days if freshly extracted seeds are stored in moist charcoal and packed in polybags. Other alternative is extracting beans, removing the testa and packing in polythene bags.
<p style="font-weight:bold;font-size:18px;">Vegetative propagation</p>
As the seedling progenies showed wider genetic variability, to maintain true to types, asexual or vegetative propagation is followed. Grafting and budding are being followed in multiplication of cocoa.  It also ensures multiplication of identified high yielding clones in large quantities. Though vegetative propagation of cocoa by budding, rooting of cutting and grafting are feasible, the widely accepted methods in India are budding and grafting.<br>
<img src="coa2.png" style="height:120;width:450px;position:relative;left:200px;top:30px;bottom:10px;border-radius:6px"><br>
<br><br><p style="font-weight:bold;font-size:18px;">Selection of planting materials</p>
When seedlings are used as planting, select vigorous and healthy seedlings from polyclonal garden. The planting material should be of 4-6 month old seedling or grafted or budded plant.  The seedling/grafted/budded plant should be planted in the centre of the pit, not too deep. While planting grafts, polythene strip tied over graft joint should be removed and the joint should be above the soil.<br>
<img src="coa3.png" style="height:120;width:550px;position:relative;left:150px;top:30px;bottom:10px;border-radius:6px"><br>
<br><p style="font-weight:bold;font-size:18px;">Time and method of planting</p>
Cocoa is a shade loving plant. During its seedling period it requires about 50% shade and later the shade requirement is about 40%. The plant is grown as a mixed crop with other plants like spices and rubber mainly under rainfed conditions. Cocoa is planted as an intercrop in coconut and arecanut gardens.<br>
<img src="coa4.png" style="height:150;width:550px;position:relative;left:150px;top:30px;bottom:10px;border-radius:6px"><br>
<br><p style="font-weight:bold;font-size:18px;">Irrigation in cocoa</p>
Cocoa is usually grown in areas where water availability is adequate. Cocoa plants are sensitive to drought, irrigation in such cases becomes essential. During summer, as it exists in Southern India, the crop requires irrigation at weekly intervals. When it is grown as mixed crop with arecanut, the crop is to be irrigated once in a week during November-December, once in 6 days during January-March and once in 4-5 days during April-May with 175 litres of water. 
<p style="font-weight:bold;font-size:18px;">Soil nutrient management </p>
Soil nutrient management is critical to the general health of the tree, particularly where cocoa is grown on poor soils with low nutrient levels. The fertility of soils under cocoa plantations with complete canopy formation can be maintained or sustained for a fairly long time due to the ability of cocoa fallen leaves to recycle nutrients back into the soil and decomposition of leaf litter.  However, continuous harvesting will eventually result in loss of soil nutrients
<p style="font-weight:bold;font-size:18px;">Fertilizer schedule for cocoa</p>
An annual application of the following schedule should be applied in two equal splits, the first dose in April- May and the second dose in September- October i.e. pre and post monsoon applications.
<p style="font-weight:bold;font-size:18px;">Method of application</p>
Fertilizer may be applied uniformly around the base of the tree up to a radius of 30 cm during the first year, forked and incorporated into the soil. For grown up plants the best method is to rake and mix the fertilizers with soil in shallow basins of around 75 cm. This radius may be increased gradually upto 150 cm after third year. Care should be taken not to spill the inorganic fertilizers on the trunk, branches or leaves of young trees in order to avoid burning.
<p style="font-weight:bold;font-size:18px;">Yield:</p>
50-70 pods/tree/year

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