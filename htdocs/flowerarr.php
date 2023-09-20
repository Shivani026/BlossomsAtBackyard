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
  height:560%;
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
	 top:3850px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:36%"><p>FLOWER ARRANGEMENT</p></div></hr>
<p style="font-weight:bold;font-size:18px;">1.FRESH FLOWER ARRANGEMENT</p>
Flower arrangement is a tribute to nature and her profound creation – an attempt to establish a communion with nature, by capturing some of splendor and framing it in an individually conceived design. As such, it may also be considered an art, as it invokes the aesthetic faculties of the mind. But most of all, it is pastime that is rewarding and involving.
<p>One of the greatest advantages of flower arranging is that you can produce as attractive effects with the humblest of materials, like a twisted branch picked up during your morning walk, and just a few blooms gathered from your garden as you can with a luxurious variety of flowers. Conventionally, there have been two different approaches to floral designs: western styles, employing a ‘mass’ concept  of arranging flowers in an even symmetry, and the eastern or Japanese or Ikebana styles, which are based on specific rules and angles, using less material.</p>
<p>Some of the basic differences between eastern and western arrangements are:</p>
<ul>
<li>Primarily western style is symmetrical arrangement, but eastern style is asymmetrical one.</li>
<li>Western arrangements employ more flowers to create mass effect, but eastern styles impress more by the beauty of individual material.</li>
<li>Contrary to western arrangements the materials in Japanese never touch the rim of the vase.</li>
<li>Accessories are never used in western arrangements. But in Ikebana interesting branches, drift wood, pieces of bark, shells etc., are used to imitate the nature. Here the more emphasis is given on western arrangements.</li>
</ul>
<p style="font-weight:bold;font-size:18px;">Western styles of flower arrangement</p>
Western style flower arrangements are associated with ‘mass’ or a number of flowers and foliage arranged together in a graceful manner.
In England and Europe, this style was first used to decorate palaces, mansions and churches. Traditionally, triangular, round or oval shapes were created, but after the Second World War, more designs like the L-Shape, Crescent and S-Shape were introduced.  These are said to be more American in their influence.
Western designs may be scaled to large proportions and with their symmetrical patterns; they can give a touch of grandeur to a formal occasion.  Small compositions look equally pretty, but whatever the size may be, it is better to go in for these styles when there is a generous availability of material. A few typical nuances of such styles can be mentioned as guidelines.  These are:
The outline of the design is normally created first with finer, lighter ‘lines’ so that the shape of the style is defined.
There is not much emphasis on individual plant material due to the mass effect, but in the more recent western styles, ‘points’ are woven through the ‘fillers’ so that a certain planning is evident within the mass effect and the design looks more attractive.  Colours are also used in the same manner.
The arrangement gives a flowing, radiating effect originating as it were, from the rim of the vase, where the focus has been created with heavier points.
<p style="font-weight:bold;font-size:18px;">Different models</p>
<ul>
<li>The triangular model</li>
<li>The Round bowl model</li>
<li>The Oval bowl model</li>
<li>The L-Shape model</li>
<li>The S-Shape model</li>
<li>The Crescent shape model</li>
</ul>
<img src="flo1.png" style="height:150px;width:150px;position:relative;left:250px;top:20px;bottom:10px;border-radius:6px"><br><br>
<img src="flo2.png" style="height:150px;width:150px;position:relative;left:420px;top:-150px;bottom:10px;border-radius:6px"><br><br>
<img src="flo3.png" style="height:150px;width:150px;position:relative;left:250px;top:-120px;bottom:10px;border-radius:6px"><br><br>
<img src="flo4.png" style="height:150px;width:150px;position:relative;left:420px;top:-290px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">2.DRY FLOWER TECHNOLOGY<br>Indian Dry Flower Market :</p>
<p style="position:relative;top:-240px">The most promising area in floriculture is the dry flower industry. Dried flowers and plants have been exported for the last 40 years and today, India is one of the leading countries in the field. Export of dried flowers and plants from India is more than Rs 150 crores per year. The industry exports 500 varieties of flowers to 20 countries and dry flowers are highly in demand in USA and UK markets. The potpourri variety of dried flowers is a purely export oriented and has specialized processing units.  India, with its vast resources, varied products and experience in the field of dried flowers and plants enjoy a distinct advantage. Tamil Nadu is the leader in dry flower industry.  
Dried flower products are in very high demand and add an enriched value to the flourishing industry. Various types of dry flower products are handmade paper, lampshades, wall quilt, decorations, books, candle holders, etc. The flower arrangements using dried samples of cone, foliage, flowers like rose buds, lilies and other such plant material enhances the beauty of dry flowers, adding more export value to this industry.</p>
<br><img src="flo5.png" style="height:250px;width:250px;position:relative;left:300px;top:-240px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">Harvesting flowers :</p>
<p style="position:relative;top:-240px">Flowers and other plant materials for drying should be picked close to their prime. Flowers or leaves for drying may be collected at any time during the growing season. The best time of day to cut is midmorning, after the dew has dried but well before any flowers wilt. Dampness can lead to mould and slows drying. During rainy weather, plants should be harvested when they are dry even if it means cutting them a little early. Damp or over matured plants should not be harvested. If harvesting flowers when wet is unavoidable, the excess moisture should be gently blotted off with a soft paper towel or tissue. Only the most perfect forms should be used. Poor shapes dry as poor shapes. Plants and flowers free of damage due to pest and disease incidence should be selected. This is because any such damage becomes only more obvious after drying. It is sometimes difficult to develop graceful lines when making dried flower arrangements. Therefore, while collecting material for dry flowers, branches and stems with sweeping curves or lines that will add distinctiveness to the arrangement should be selected. If none can be found, curves or other lines can be made by shaping the branches or stems into the desired positions while they dry.
Natural stems do not give the flower enough support when dry and may be difficult to manipulate and position. So, most of the stem is cut, leaving only about an inch. Stems can be replaced with florist's wire after drying. Flowers should be wired before drying them because drying may cause shattering in some cases</p>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">Harvesting foliage :</p>
<p style="position:relative;top:-240px"> Harvesting foliage in their active phase is preferable because at this stage, the leaves will be at peak maturity. Foliage is dried by preserving in a solution of water and glycerin. However, certain important points have to be borne in mind while harvesting foliage for preserving with glycerin. Young green leaves and leaves in dormant stage should not be harvested because young green leaves will not absorb the glycerin solution and the leaves in dormant stage would have stopped drinking water. So, both are unsuitable for absorbing glycerin</p>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">3.DRY FLOWER ARRANGEMENT</p>
<p style="position:relative;top:-240px">The art of making arrangements with dried flowers and leaves was a flourishing craft as early as the seventeenth century in England and America. But now it has passed from the hobby stage to big business in many countries. In recent years, there has developed a trend to fragrance a mixture of flowers for keeping in rooms, kitchens, toilets etc. This is known as ‘Potpourri’, wherein our living environment is made fragrant with natural items</p>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">Advantages of dried arrangement over fresh flowers</p>
<p style="position:relative;top:-240px">It is not dependent on season or weather if once good materials are collected.
It lasts almost indefinitely.
It helps the individuals to improve their skill in design by affording time to study composition and to correct mistakes.
Dried arrangements are certainly time savers as they can be made by conveniently in advance and then enjoyed as needed.</p>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">Materials for dried arrangement</p>
<p style="position:relative;top:-240px">The materials usually employed for dried arrangement can be grouped into three categories as follows.
<br>Cultivated flowers and vegetable including seed, pods, vines and grains.
<br>Naturally available materials like flowers, seed pods, fern leaves, certain weeds and grasses.
<br>Pods, cones, capsules, fruits, branches, leaves, berries and flowers of broadleaved evergreen trees and shrubs</p>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">Preservation of plant materials</p>
<p style="position:relative;top:-240px">There are a few methods of preserving flowers and foliage.</p>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">Hanging upside-down:</p>
<p style="position:relative;top:-240px">Many flowers dry best by this method. It is the easiest method and is preferable to those materials which keep their shape and do not fall apart while drying. Materials intended for drying are tied and allowed to hang upside down from string without touching each other.</p>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">Burying in sand or borax</p>
<p style="position:relative;top:-240px">Fine and dry sand are poured to a depth of 10 cm into a box or pan. The flowers which should be dry are stripped of all foliage and may be kept upside down on the sand and then covered with a layer of sand over them. After two weeks of time, the sand may be poured off carefully and the flowers may be taken out after gently wiping them free of sand with a soft brush. They are then ready for arrangement. Borax may be used in almost the same way as sand and is a good medium for preserving materials when space is limited. Alum and silica gel are also used in the place of borax. The form of flowers are also well preserved in borax method. Candytuft, daisies, marigold, narcissus, chrysanthemum, snapdragons, sunflowers, tithonia, all roses and coleus leaves dry well in sand or borax.</p>
<p style="font-weight:bold;font-size:18px;position:relative;top:-240px">Glycerin method:</p>
<p style="position:relative;top:-240px">This method is used for foliage only. The clean foliage materials are kept inside a jar containing a solution made up of 2/3 of water and 1/3 glycerin. The material has to be kept there till full absorption has taken place. It takes atleast two weeks for most materials to do so. Materials so preserved keep well for 5 to 10 years</p>
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