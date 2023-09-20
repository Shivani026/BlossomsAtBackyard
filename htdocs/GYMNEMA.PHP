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
  height:350%;
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
	 top:2500px;
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
<hr style="border-width:20px; border-color:#581845"><div class="hr-container" style="top:-15px;left:41%"><p>GYMNEMA</p></div></hr>
<img src="gym1.png" style="height:230px;width:300px;position:relative;left:280px;top:10px;bottom:10px;border-radius:6px"><br><br>
Ocimum sanctum is native to India, where it enjoys a religious attachment and liked to be grown in shrines and homes as an aromatic perennial shrub. Tulsi is part of routine worship and has scientific background as the plants possess antimicrobial and antiviral properties and purifies the air. It is also grown as  temperate climates, the natural habitat of tulsi varies from sea level to an altitude of 2000 m. It grows naturally in moist soil all over the globe.
This plant is also grown as a pot herb and in home gardens. Tulsi is cultivated in semi urban areas and the fresh herbage is sold to the temples and worship centres. The major source of tulsi is from wild habitat including uncultivated field and roadside. Large volumes of herbage is collected during seasons and traded throughout the country. However, commercial production has significance due to valuable aroma chemicals extracted from the essential oil of tulsi.
<p style="font-weight:bold;font-size:18px;">Uses:</p>
Thulsi ia an aromatic medicinal plant is often taken in combination with other herbs. The fragrant leaves and flowers, in the form of tincture, tea or decoction are considered to be stomachic and expectorant, used in treating coughs, bronchitis, skin diseases, and diarrhea. These preparations are considered to be prophylactic against epidemics including cholera, influenza and malaria. The tulsi seeds, taken mixed in water, juice or cow’s milk, are antioxidant, nourishing, mucilaginous and demulcent.
<br>They are used in treating low energy, ulcers, vomiting and diarrhea or as an overall tonic. The powder of the dried root, taken in milk, ghee or as a decoction, is recommended to treat malarial fever as an analgesic application to the bites and string of insects and also to increase sexual stamina and prevent premature ejaculation. The herb improves resistance to stress and has a normalizing influence on blood pressure and blood sugar imbalances. Tulsi is likely to prove prophylactic against the negative effects of environmental toxins, including cancer. The plant is also richly endowed with bioavailabel antioxidants, vitamins A and C and calcium. It has marked insecticidal activity against mosquitoes.
<p style="font-weight:bold;font-size:18px;">Types:</p>
Green type (Sri Tulsi) and<br>
Purple type (Krishna Tulsi)
<p style="font-weight:bold;font-size:18px;">Soil and climate:</p>
The plant is sufficiently hardy and it can be grown on any type of soil except the ones with highly saline, alkaline or water logged conditions. However, sandy loam soil with good organic matter is considered ideal. The crop has a wide adaptability and can be grown successfully in tropical and sub-tropical climates. Long days with high temperature have been found favorable for plant growth and oil production.
<p style="font-weight:bold;font-size:18px;">Propagation</p>
The crop can be propagated through seeds. For propagating through seeds, they are to be sown in the nursery beds. For sowing of one hectare about 300g of seeds are required. The nursery should be located preferably in partial shade with adequate irrigation facilities. Soil is worked upto a depth of about 30 cm. well rotten farm yard manure is applied to the soil and prepared to a fine tilth and seed beds of 4.5x1.0x0.2 m size are prepared. As the seeds are minute, the required quantity of seeds are mixed with sand in the ratio of 1:4 and sown in nursery bed, 2 months in advance of the onset of monsoon. They germinate in 8-12 days and seedlings are ready for transplanting in about 6 weeks time at 4-5 leaf stage.
<p style="font-weight:bold;font-size:18px;">Vegetative propagation:</p>
Tulsi can also be propagated by vegetative method using terminal cuttings with about 90-100 per cent success when planted during October-December months. For this purpose, cuttings with 8-10 nodes and 10-15 cm length are used. They are so prepared that except for the first 2-3 pair of leaves the rest are trimmed off. Later, they are planted in the well prepared nursery beds or polythene bags. In about 4-6 weeks time the rooting is complete and they are ready for transplanting into the main field. The plants are transplanted at a spacing of 40 cm between the row.
<p style="font-weight:bold;font-size:18px;">Manures and fertilizers:</p>
The plant requires about 15t/ha of FYM which is to be applied as basal dose at the time of land preparation. Regarding the inorganic fertilizers application of 120:60:60 kg/ha of NPK is recommended
<p style="font-weight:bold;font-size:18px;">Irrigation:</p>
Irrigation is provided twice a week till one month so that the plants establish themselves well. Later, it is given at weekly interval depending upon the rainfall and soil moisture status.
<p style="font-weight:bold;font-size:18px;">Interculture:</p>
Interspaces should be maintained weed free and the first weeding is done one month after planting and the second after another 30 days. Afterwards, no further weeding is required as the plants become bushy and cover the soil and thereby smother the weeds. However, after each harvest, weeding should be done so as to avoid weed growth in the interspaces, if any.
<p style="font-weight:bold;font-size:18px;">Plant protection:</p>
Tulsi is not prone to serious pest/disease except some minor pests like leaf rollers which can be controlled by spraying with 0.2% Malathion or 0.1% Methyl parathion whenever noticed.
<br>Medicinal plants like tulsi require production involving minimal or no usage of chemical pesticides. Organic practices include control measures using neem based formulations. Fish oil resin soap can be used to manage such sucking pests. Botanicals viz., extracts of garlic, Vitex negundo, Lantana camera, Clerodendron inerme, Calotropis gigantean are often combined and sprayed periodically for controlling the pests.
<br>Diseases like powdery mildew can be controlled by spraying with 0.3% wettable sulphur. Likewise seedling blight and root rot can be controlled by drenching the nursery beds with a 0.1 per cent solution of mercurial fungicide and adopting phytosanitory measures.
<p style="font-weight:bold;font-size:18px;">Harvesting and yield:</p>
The first harvest is done after 90 days of planting and subsequently it may be harvested at every 75 days interval. The crop is harvested at full bloom stage by cutting the plants at 15 cm from ground level to ensure good regeneration for further harvests. The yield and oil content is more in plants harvested during bring sunny days.
<br>On an average, tulsi gives about 10,000 kgs of fresh herbage per hectare per year. The herb contains about 0.1 to 0.23 per cent oil and it about 10-20 kg of essential oil per hectare. Irrigated tulsi gives higher herbage yield (upto 20 ton and oil yield (upto 40kg/ha)
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