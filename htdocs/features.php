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
  height:440%;
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
	 top:3050px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:41%"><p>GARDEN FEATURES</p></div></hr>
<p style="position:relative;top:10px">In order to break the monotony and to enhance the beauty, any garden should contain components of varying nature. Following are certain important features:</p>
<p style="font-weight:bold;font-size:18px;">Avenue</p>
An avenue is the row of trees grown on both sides of roads. Shade and beauty are the sole criteria to be considered while selecting avenue trees. The trees should also be selected according to the length and breadth of the road.<br>
<img src="fea1.png" style="height:220px;width:530px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Topiary</p>
It is the art of developing the plant or training the plant into different forms or shapes like animals, birds, arches, etc. The plant should be amenable for repeated pruning and also flexible with more vegetative growth.
<br>(eg) Hills – Cupressus macrocarpa, Pinus patula<br>
       Plains – Casuarina sp., Caesalphinia coriari, Bougainvillea sp., Jaminum sp.<br>
<img src="fea2.png" style="height:220px;width:530px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px"><br><br>
<p style="font-weight:bold;font-size:18px;">Lawn</p>
It enhances the beauty of a garden whether it is small or large. It finds the most important component of a garden giving a view of a green carpet.
<p style="font-weight:bold;font-size:18px;">Trophy</p>
It is the arrangement of colourful potted plants in differ­ent tiers around a central object which may be a tree trunk, lamp post or a pillar.
<p style="font-weight:bold;font-size:18px;">Carpet beds</p>
The art of growing ground cover plants closely and trimming them to a design or alphabetical letters is called a carpet bed. Colourful foliage as edge plants is found to be more suitable for this purpose. (eg.) Alternenthera.
<p style="font-weight:bold;font-size:18px;">Shrubs and Shrubbery</p>
Growing of shrubs in a group is called shrubbery. It is of two types (i) Pure shrubbery (ii) Mixed shrubbery. Pure shrubbery refers to planting of entire selected area with a single species and the opposite holds good for mixed shrubbery.
<br>Shrubs for showy or attractive flowers (e.g.) Hibiscus, Ixora, Mussanda, Night queen, Euphorbia etc., Shrubs for fragrance (e.g.) Jasmine, Rose, Nandiayavattai (Tabernaemontana), Pavalamalli (Nyctanthes) etc. Shrubs for foliage (e.g.) Crotons, Polycias, Eranthemum, graptophyllum, etc.
<p style="font-weight:bold;font-size:18px;">Arboretum</p>
Growing of different species of trees in one place is called ‘Arboretum'. The trees form the main frame work of the garden. Group of trees in one place will help to give depth to the garden. Trees are very fascinating because of their graceful appearance and the abundance of bloom. They are grown for their economic importance or aesthetic value or both.
<p style="font-weight:bold;font-size:18px;">Flower beds and Borders</p>
Annuals and herbaceous perennials are grown in flower beds to provide massing effect of different colours. Borders are continuous beds of more length than width containing plants of one kind only.
<p style="font-weight:bold;font-size:18px;">Ground cover</p>
When a dicot plant is of straggling nature is used to cover the ground surface is called ground cover (eg.) Wedalia, Verbena, Ipomea,  Acalypha, Portulaca
<p style="font-weight:bold;font-size:18px;">Climbers and creepers</p>
A group of ornamental plants used to grow over walls, trellis, arches, pergolas, arbours, pillars, bowers, etc. These are grouped as light or heavy according to the amount of wood it produces.
<p style="font-weight:bold;font-size:18px;">Trees</p>
One or two drawf trees such Plumeria sp. Callistemon lanceolatus and Gliricida maculata can be grown as specimen plants. Some large to medium trees such as Araucaria cookii, Mimusops elengi, Brassaia actinophylla, etc., can also be grown till they are young.
<p style="font-weight:bold;font-size:18px;">Hedges</p>
With the help of plants, live hedges can be formed and used as a fence or a green wall. It serves to screen a particular site or building or hiding of unwanted places. They help to partition the garden into several parts. It provides a natural background to a garden, like a frame to a picture. The characteristics of a good hedge are that it should be thick and dense; it should have foliage from the bottom to top; it should be trim and neat; if it is a flowering hedge its bloom should not clash with the general colour scheme.
<br>Some of the most common foliage hedges are Acalypha with its copper-red leaves, it is suitable for a medium hedge; Clerodendron inerme an evergreen drought-resistant plant used frequently by the roadside, is not eaten by cattle or goats, and is suitable for a low to medium hedge; Duranta is also an evergreen drought-resistant fast-growing plant with very neat habit and bright green foliage, suitable as a medium hedge; Dodonea viscose with its evergreen narrow shining leaves suitable as a medium hedge; Pithecalobium dulci (Inga dulce) with its thorough stems and small feathery leaves making an impregnable medium to tall hedge; Lawsonia alba (Maruthani) with its pretty small bright green leaves is suitable as a low to medium hedge; Murraya exotica with its small dark green leaves is suitable for any size of hedge. There is a large variety of flowering plants which can be used as hedges.  The most prominent of these is the Bougainvillea.  A variety like ‘Thimma’ or ‘Dr. Rao’, or ‘Louise Wathena variegated’ gives pretty blooms as well as beautiful variegated leaves.
<p style="font-weight:bold;font-size:18px;">Water garden</p>
It may have a water course, a water pond and a water foun­tain or any one or more of these features, harbouring water loving and marsh plants. Water gardens, no matter, how tiny, are extremely effective in beautifying the landscape. Water lilies (Nymphaea) are the most popular water plants.Another aspect to be considered is the depth of water.  The large tank is around 3-5 m deep at the deepest point.  A reflecting garden pool is preferably shallow with a depth of 25-30 cm. If hydrophytic plants are to be grown, varying depths have to be provided in the same pond, which may range from 15 to 90 cm, the deepest portion allotted to lotus and water lilies.  In shallow pockets and galleries, swamp plants such as Typha and Cyperus are accommodated.  Salvinia, Pista and other floating plants may be conveniently added to this grouping. Provision is necessary to prevent rain water and through it silt entering into the pool. A slightly raised rim to a height of 10 cm will be helpful in this regard. Provision to drain the pool by providing an outlet at its floor level will help to clean it, as often as is necessary.
<p style="font-weight:bold;font-size:18px;">Garden adornments</p>
There are several garden adornments and accessories such as fountains, statues, garden seats, ornamental posts and pillars, arches and pergolas, trellises, hanging baskets, tubs, vases and urns with plants which make the garden more enjoyable. Playing of a fountain is an interesting feature in a garden and the water in the cistern should be kept clean. Garden seats made up of stones, concrete or metal are placed under the tree. Handsome tubs, vessels and urns are utilized to display plants in conspicuous places. Arbours, arches, pergolas and trellises serve as support to several beautiful plants and to dispel monotony in garden. Arbours are usually open in all sides. Very often a long wall or the end of a pergola leads to an arbour. Arches are generally erected over walks, usually at the entrance and are usually two meters in height. Pergolas are series of arches connected over a walk.
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