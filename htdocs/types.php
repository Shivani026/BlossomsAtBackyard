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
  height:530%;
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
	 top:3700px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:38%"><p>TYPES OF GARDEN</p></div></hr>
<p style="position:relative;top:20px">1. LANDSCAPING OF HOME<br>
2. LANDSCAPING OF INSTITUTE<br>
3. LANDSCAPING OF INDUSTRY<br>
4. ROOF GARDEN<br></p>
<p style="font-weight:bold;font-size:18px;">1. LANDSCAPING OF HOME</p>
There are many people who think that landscape gardening relates to only gardening in large public parks or palaces of the rich. Landscaping as it is done for larger estates or public parks can also be implemented in a tasteful and artistic way for a small home ground, though on a smaller scale. The term "small" is a misleading 'one so far as it relates to gardens. The simplest definitive or "small", as suggested by some authors quite appropriately, is an area which can be effectively managed and maintained physically as well as financially by the owner and his family with occasional hired labour for such hard work as digging, mowing, and shearing of hedges. Here, ways will be suggested for landscaping only small residential houses. For larger estates, a combination of landscaping effects suggested for parks and home landscaping may be followed.
<br>There are some basic guidelines for a home landscape. But personal preference plays a considerable role in developing a home garden. The home including its surroundings should be an outward expression of the inner personality and individuality of the owner. Often a common mistake is made by many to copy a successful competitor of a garden competition or a neighbour. This may not suit your own home for various reasons. For example, location aspect of your own garden may be quite different compared to the one which you want to copy. It is advisable to think a lot before even a single digging work starts. It is a matter of great regret that in our country sometimes we spend a fortune in decorating the interior of the house to make it attractive but ignore the outside compound.
<p style="font-weight:bold;font-size:18px;">Making a Plan</p>
Before any actual garden work is undertaken a master plan has to be prepared according to a scale (1: 15 or 1: 20) in which all the features such as house wall, drive-way, paths, flower beds, shrubbery, etc., are plotted. The shaded areas due to large tree canopy or the building itself has to be marked on the plan. A plan prepared on a printed graph paper is of great help. The plan thus prepared should be studied again and again keeping in view what shape a plant will take in the long run. It is frequently observed that people attracted by the graceful form of a young Araucaria cookii, plant this in the centre of a lawn or near the house possess the gigantic form and height it will attain after some years.
<br>Per­haps the owner of the house will cut this tree when overgrown or it may be retained to the detriment of other plants growing below it. Either way, this is not a good planning. Perhaps, one way of satisfying the urge of a garden lover to grow such beautiful trees in a small compound, is to grow them large concrete tubs and bury the tub growing the tree in the appropriate place, thus giving the impression that the plant has actually been grown on the ground. When this attains a considerable height, say 3-6 m, the tree along with the pot should be lifted and given to someone who can afford to use such a grown-up tree. But it is better not to include such controversial items. If the garden area is sufficiently large, this can be divided into three areas.
<br>(1) Approach or Public Area
<br>(2) Work or Service Area
<br>(3) Private Garden Area or Living Area
<p style="font-weight:bold;font-size:18px;">2. LANDSCAPING OF INSTITUTE</p>
A planned and properly landscaped school building will be different in appearance and beauty than unplanned one. Moreover a good garden in the campus inculcated aesthetic sense to our younger generation.
The general recommendations is to plant large trees in the school compound in the periphery of the school campus, along the rear and wings, a thick belt of large shady trees should be planted to bring down noise and cut down dust and storms. This plantation will also help keep down severe heat and cold. The front should be planted with medium-sized flowering trees for beauty. The trees should not completely obstruct the view of the building from outside. For enhancing the scenic beauty it is also suggested to plant a row of flowering trees, with different blooming seasons, in front of the large trees along the periphery. It is difficult to give any general recommendation regarding the types of such trees, as this will vary according to the architectural design, situation and climate. The object is to provide beauty and comfort depending on convenience.
<br>The roads and paths are to be formally planted with medium to tall flowering plants. Before planting provision should be made for overhead wiring and sewerage so that these do not interface with the avenue planting. Where the electric wires limit the choice of avenue trees, small flowering trees such as Cochlospermum gossypium, Callistemon lanceolatus, Bauhinia variegata, and Tecoma argentea can be planted. The trees should be planted in pure avenues. A lawn looks nice in an educational institution, but is very difficult to maintain. The playground can be planted with lawn, if this can be maintained or should be left bare.
<br>A thickly planted belt of eucalyptus for peripheral planting is considered ideal. Silver oak, Polyalthia and Samanea saman are also suitable for this purpose. Cassia fistula, Tecoma argentea, Erythrina indica, Lagerstroemia flos-reginae and Bauhinia variegata are suitable for planting in the front and in the front row of the border planting.
<br>The roads and paths are to be formally planted with medium to tall flowering plants. Before planting provision should be make for overhead wiring and sewage so that these do not interfere with the avenue planting. Shrubs play an important part in the school landscaping. Shrub borders round parks or playgrounds is very effective and can replace hedges as the maintenance is minimum. A lawn look nice in an educational institution but it is very difficult to maintain. A bougainvillea creeper trained over the wall of the building can change the whole look. Similarly, a Bignonia venusta supported against a wall also looks beautiful. A creeper climbing with their rootlets such as Ficus repens, Tecoma radicans can also be trained over some stone or brick wall. Besides an ornamental or a landscape garden, universities and colleges can also maintain a botanical garden or a student garden, where the plants are arranged in groups, family wise so that such gardens become educative.
<p style="font-weight:bold;font-size:18px;">3. LANDSCAPING OF INDUSTRY</p>
In modern times, a factory should not become a place of only machinery, dust, pollution and noise, but should also be provided with nicely laid-out parks and gardens. This is not only needed from the point of beautification, but also to fight pollution and dust. The factories may be broadly categorized into two groups. The first group comprises comparatively neat factories such as a plywood factory or a fruit processing plant which emit less dust and other polluting materials. The second group consists of factories such as cement, steel, fertilizer, etc. which emit a lot of dust, smoke, and harmful chemicals. The primary aim in a factory garden will be to plant trees to arrest the drifting dust and smoke and to cut down noise.
<br>Another important aim is to provide ample shade and coolness so that the workers get a respite under the coolness of trees from the hostile hot interior of the factory. Moreover the trees bend down the temperature in the factory premises to a considerable extent. The places where garden can be laid in the factory area are canteen, rest-shed, hospital, administrative building etc.
<br>It is interesting to note that well landscaped offices tend to have lower cases of absenteeism and job shifting. It has also been found that employees serving in offices featuring colorful landscaped entrances show better productivity. The reason for this can be attributed to the basic fact that humans have a fundamental desire to keep contact with nature. Our perception and moods are highly influenced by the colors we see in and around us
<br>Tall and hardy trees such as Casurarina equisetifloia, Eucalyptus, Polyalthia logifolia and Silver oak should be planted all around or in the direction of the winds to stop the spread rows of plants planted in a staggering manner bring down the noise from the factory to the surroundings outside this barrier.
<br>Moreover, in a well-planted factory, the trees bring down the zone may be created by afforestation between the factory and its residential colony. Afforestation can be done with hardy ornamentals such as Acacia auriculiformis, Casuarina equisetifolia, Dalbergia sisso, and some other shade trees. Besides planting of trees, a factory area can also be beautified with rockeries, statues water pools or lakes, fountains, etc. Bougainvillea should be used freely to beautify a factory area.
<br>Root zone process is a German Technology to treat industrial and domestic waste water economically, efficiently and naturally. Three integrated compounds are essential to this system. They are the reeds, the reed bed and the microbial organisms.
<br>Run the contaminated water under the root zone and the reed beds treat the water.  The out coming water is clear, odourless and free from contamination which can be used for gardening and farming.
<br>Landscaping can hugely enhance the sales appeal of a property thereby increasing the overall property value. The factors that seem to contribute in increasing the property values include greenery, walkways, arches, patios, decks and ponds.
<br>Thus there is vast scope for the development of industrial and institutional landscapes. Such landscapes should aim to improve the aesthetic beauty of the place and reduce the pollution
<p style="font-weight:bold;font-size:18px;">4. ROOF GARDENING</p>
Garden is an embellished area with plants. The importance of gardening has been well understood by every individual. The gardens not only serve as a place of recreation, it also serves as a place for education by the way of establishing a home garden or botanical gardens.
<br>The art of creating the greenery and maintaining the greenery is known as “Roof Gardening”. This is also known as Terrace gardening. The existing roof top can be effectively utilized for growing fruit plants, vegetables, spices, homestead medicinal plants, flower plants and ornamental plants. The population explosion occurs every day resulted in the migration of peoples from rural areas to urban areas for income generation. Due to migration of peoples most of the agriculture lands are converted into residential areas, resulted with decreased production of fruits and vegetables. This can be circumvented by kitchen gardening and roof gardening.
<br>In urban areas, due to escalating population, more land area is brought under the construction of houses; therefore there is hardly any space for growing vegetables. Especially in multistoried buildings, roof gardening is the only way to grow fruits and vegetables by using the pots and containers. This practice is known as container gardening. Psychiatrist recommends that working in garden refresh the body and mind by reliving harsh stresses. Gardens become the integral part of the family life benefited by the supply of toxic free fresh fruits and vegetables.
<br>Dietitians recommend 85 grams of fruits/day, 300 grams of vegetables/day, whereas the present day consumption of fruit is only 30 grams/day and vegetables is 120 grams/day. The consequences of nutritional and vitamin deficiency are given as follows
<p style="font-weight:bold;font-size:18px;">Aims of roof gardening</p>
<ul>
<li>Year round supply of fresh fruits and vegetables</li>
<li>Reduces expenditure on purchase of fruits and vegetables</li>
<li>Effective utilization of space available at the roof top</li>
<li>Supply of toxic free fruits and vegetables</li>
<li>To grow our own favourite vegetables</li>
<li>Rare and unavailable vegetables can be grown in roof garden</li>
<li>Apart from the above, working in a roof garden will relieve stress and strains.</li>
<li>Maintaining the greenery through roof garden reduces the pollution</li>
<li>Increases the monetary value of land / apartment</li>
</ul>
<p style="font-weight:bold;font-size:18px;">Location of garden</p>
1.Roof top/ verandah / window sills<br>
2.Preferably open areas with plenty of sunlight and water supply<br>
Roof gardening can be established in a best manner with the availability of sun light and water. Plants produce quality fruits and vegetables by using sunlight and water. Since there is not enough place in the flats these days, this garden can be laid on roof tops, there by effectively utilizing the available space on the roof tops. In multistoried buildings, not all the apartments have a roof.  Thus the pots can be placed in the verandah and window sills.
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