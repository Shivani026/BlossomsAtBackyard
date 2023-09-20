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
  height:680%;
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
	 top:4700px;
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
<hr style="border-width:20px; border-color:#179D9F"><div class="hr-container" style="top:-15px;left:38%"><p>PLANT COMPONENTS</p></div></hr>
<p style="position:relative;top:20px">1. ANNUALS, BIENNIALS AND HERBACEOUS PERENNIALS<br>
2. SHRUBS<br>
3. TREES<br>
4. CLIMBERS AND CREEPERS<br>
5. CACTI AND SUCCULENTS<br>
6. INDOOR PLANTS<br>
7. ORNAMENTAL PALMS AND BULBOUS PLANTS</p>
<p style="font-weight:bold;font-size:18px;">1. ANNUALS, BIENNIALS AND HERBACEOUS PERENNIALS<br>Annuals</p>
Annuals are plants that complete their life cycle in one season or one year (eg.) Balsam and Cosmos. Annuals are a group of plants which attain their full growth from seed, flower and die in one year or one season. Mostly they complete their life history in 3 to 6 months. They comprise of several of the most beautiful and easily grown plants widely varying in form, habit of growth and colour.
Annuals are classified into rainy season annuals, cool season or winter annuals and warm weather annuals.
<br>Annuals can be used for multipurpose as hereunder.
1. Flower beds of simple design can be laid out on the outskirts of lawn, along the base of buildings, in the path leading to entrance of horses and on sides of foot steps<br>
2. Certain annuals are useful as edging (e.g. Dwarf marigold, Alyssum and Candytuft)<br>
3. Certain annuals are useful in hanging baskets (eg. Petunia, Verbena and Alyssum)<br>
4. Certain climbing annuals are useful to cover trellis work (e.g. Tall Nasturtium and Cobaea scandens)<br>
5. Some annuals are useful for massing in beds (e.g., Aster, Phlox, Salvia, Zinnia and Verbena)<br>
6. Few other annuals are useful for planting in shrubberies in vacant spaces; they are Sunflower, Hollyhock, tall growing species of Amaranthus, Tithonia etc.<br>
7. They serve as perennial sources of supply of cutflowers for indoor decorations.<br>
<p style="font-weight:bold;font-size:18px;">Hints for raising annuals</p>
1. The seeds are sown in seed pan or raised beds. Thin sowing is necessary to get good sized vigorous seedlings. In the seed pan, a pot mixture consisting of two parts of well sifted soil, two parts of leaf mould and one part of sand may used.<br>
2. Fine seeds may be mixed with 3 to 4 parts of sand before sowing.<br>
3. Annuals which do not stand transplanting like Calendula and Antirrhinum are sown broadcast in beds.<br>
4. Watering the nursery may be done with rosecan.<br>
5. After the seeds germinate completely, over crowded seedlings are thinned out.<br>
6. As transplanting often results in heavy casualities the seedlings are pricked before transplanting. Pricking is the practice of transplanting young seedlings into small pots individually or in the nursery beds with richer soil giving wider space (10 to 13 cm). Pricking is normally done when the seedlings have produced 2 to 4 leaves. This help to increase the fibrous root system and to develop vigorous plants.<br>
7. One month after planting when the seedlings have produced six to eight leaves, they can be transplanted into main beds.<br>
8. Generally a spacing of 30 X 30 cm may be given for most of the annuals.<br>
9. Tall growing annuals like Hollyhock may be provided with stakes.<br>
10. The terminal buds of seedlings are pinched-off after they establish and when they are about 25 to 30 cm high. This encourages lateral  growth and a more bushy shape.<br>
<p style="font-weight:bold;font-size:18px;">Biennials</p>
Biennials are plants which grow in one season, flower, fruit and die in the next season. Generally, the period of growth is 6 to 9 months. Biennials are grown in the same way as annual and can be used similarly. Examples of biennials are canterburry bulb, Gladiolus etc.
<p style="font-weight:bold;font-size:18px;">Herbaceous perennials</p>
Herbaceous perennials are those perennial plants with soft succulent stems (as compared to shrubs which have woody stems). They are propagated by seeds, cuttings, offset and slips. They are useful as her­baceous or mixed borders or for pot culture. The following .are the examples for herbaceous perennials
<p style="font-weight:bold;font-size:18px;">2. SHRUBS</p>
Shrubs are plants with woody stems which are smaller than trees but bigger than herbaceous plants. A typical shrub will have several stems arising from the main stem at ground level itself. They can be either evergreen or deciduous. Some are at­tractive in their foliage, some produce attractive flowers and some are grown for their attractive berries. A stretch of shrubs are established as borders on the sides of walks and paths. Shrubs are planted at the corners of lawn in a curving line. A shrub­bery is an area planted with different kinds of shrubs and a shrub border is one where only one kind of shrub is used.  Shrubs that stand frequent pruning and trimming can be used for topiary work. Tall growing shrubs can be used to screen the disagreeable object and backyard.  Handsome shrubs can make attractive pot plants for indoor and outdoor decoration.<br>
Shrubs can prevent architectural features like glass doors and windows from conducting heat thereby keeping the overall temperature of the interiors down. On an average a landscaped house can save at least 40% on energy bills as compared to a house that lacks this feature.
<p style="font-weight:bold;font-size:18px;">Importance of shrubs in garden</p>
1. Being permanent, they form part of the frame work of the garden.<br>
2. They form the chief features of landscape gardenings placed in front of tall trees and joining the spacious lawn etc.<br>
3. Shrubs which are amenable for frequent training are chosen for topiary work<br>
4. Tall growing shrubs often serve as screen<br>
5. They are useful as a single specimen in the lawn<br>
6. They can be trained to form standards i.e., trained to single stem and allowed to branch out and form a handsome head only above a particular height e.g. Bougainvillea, Ixora, Murrya exotica.<br>
<p style="font-weight:bold;font-size:18px;">Hedges</p>
For several reasons a garden should be enclosed by a good hedge or fence. It provides protection from cattle, shelter from wind and privacy. The best plant material for forming such a hedge would be a quick growing hardy shrub with attractive foliage and or handsome flowers, drought resistant and should stand trimming to shape and capable of being quickly and easily raised from seed or from cuttings to fill up the gaps promptly.
Decorative internal hedges are formed of small-growing shrubs or under shrubs which have handsome foliage and bear in some cases handsome flowers as well. The usual height for an ornamental internal hedge varies from 30 to 65 cm. Its objective is to seemingly divide the garden into a number of parts, each part containing the distinctive feature of it sown as a rosary or flower bed or collections of bulbs etc. As the boundary or the screen or the ornamental hedges are meant to be permanent features of a garden, proper care should be exercised in planting them. Trenches of 30 to 40cm wide and 40 to 45 cm deep should be dug and refilled with top soil, farmyard manure and red earth. Hedges are planted either with the seed or cuttings in the rainy season. Shoots should be tipped as they grow to induce them to branch out and side shoots should be cut back to the desired dimensions. A compact and a thick hedge is possible if its is trimmed as often as necessary, cutting back the overgrowing shoots strictly to the desired dimensions.
<p style="font-weight:bold;font-size:18px;">3. TREES</p>
Trees form the main framework of the garden. Some  trees produce attractive and beautiful flowers including fragrant flowers, few trees are noted for their attractive foliage and few more trees are  known  for their peculiar shape or form which  are  used  as specimen trees. Shady trees are planted in chosen spots of large public garden which provides place for picnic and relaxation. Such trees are also planted along the borders of roads as avenue for giving shade. In selecting ornamental trees, the pur­pose should be decided first and then the place of its culture should be finalized.
Tree is a perennial plant having distinct trunk crown at the top. Trees have immense beauty from aesthetic view point. They bring the change in sky line on account of variation in their height, shapes, foliage texture and flower color. They are used in landscape plan for aesthetic and functional purposes. Trees are used in garden as specimen, avenue plantation, wind breaks and screening<br>
Landscaping the backyard with trees and other plants can help to minimize the bad effects of pollution. In addition to purifying the air, plants can help disperse fog, reduce wind speeds, reduce noise effects, control erosion and influence snow deposition.
<br>A judicious planting of trees enhances the beauty of surroundings. Deciduous trees used in landscaping help in cooling down your property in summer. They also help in warming it up during winter months by allowing the sun to shine through.As the trees are the frame work of the garden they should be easy growing, hardy and requiring little attention.
<br>Woody plants like trees are the backbone of a landscape. Trees provide skyline to the landscape, background for highlighting architecture, screening of less pleasing sights, as roadside avenues, as screens for privacy from roads and flats opposite. One of the places wherein trees can be extensively planted is on the roadside which is known as avenue planting. This has two aspects namely beauty and utility and both these aspects can be combined by careful planning and judicious selection of the right tree species.<br>
Roadside plantations help in noise abatement. To reduce the noise generated by high speed traffic on national highways to tolerable limits, about 20 to 30m wide belts of trees and shrubs may be necessary. To reduce the noise generated by moderate speed traffic in the cities, 7 to 15m wide belts of trees and shrubs may be required. Evergreen trees are better for noise abatement than deciduous trees which do not afford a barrier to sound when leafless. Recently, planting in strips along railway lines are also becoming popular. The main objectives are stabilization of railway track and protection of railway track against erosion and checking of the shifting sand in desert areas getting on to the railway track. From the point of view of the safety of the railway traffic, the first row of trees should not be planted very close to the railway track. The first row of trees is accordingly recommended to be planted at a distance of about 7.5m from the centre of the track.
<p style="font-weight:bold;font-size:18px;">4. CLIMBERS AND CREEPERS</p>
Botanically, plants which have the special structure to climb on supports are defined as climbers. Climbers are very important ornamental plants and are com­monly used on walls, arches and pergolas but in cities their utility is increased for the purpose of screening the premises from adjacent houses and maintaining privacy.  Bare walls can be most effectively decorated by growing colorful climbers.
<br>Climbers are defined as a plant which possesses special structures to climb over a support.  These special structures may be hook-hike thorns. Creepers are those plants which are unable to climb vertically on their own because of their weak stems. Climbers and Creepers are important group of plants which add beauty, color in striking way of fragrance in gardens and artificial structures like wall, arches, pergola, pillars; Cascades, Topiary, etc. are well decorated with the help of climbers. They attach themselves to supports by their rootlets, hooks, tendrils or by the stem and leaves. Trees are also used to train the climbers and this enhances the beauty of garden many folds.
<br>Most climbers are perennials but there are a few annuals which can be grown in pots or in hanging baskets or in low trellises e.g. Ipomoea, Thunbergia and Clitoria. Climbers are propagated by layers and cuttings. Proper training is essential for climbers to be at their best. Climbers which are to be trained over screens and trellises should be induced from the base of the plant to cover them completely. This is achieved by pinching off the terminal bud to induce lateral branching when they are about 30-40 cm high. In the case of climbers over arches, pergolas and trees one or two leader shoots may be trained to the top to branch out.
<p style="font-weight:bold;font-size:18px;">5. CACTI AND SUCCULENTS</p>
<br>These are group of plants which have special structures to store water in thick fleshy leaves or stems.  Their leaves are fleshy with plenty of water-holding tissues, often reduced in size, covered with a thick epidermis with only a few stomata and are often coated with a whitish or blue wax or wooly hairs.
<br>They thrive best in sunny situations and are light loving.  They need little care except when actively growing.  All the cacti are succulents on account of storing water but all the succulents are not cacti.  There is a clear cut distinction between both.  Cactus is characterized by the presence of areoles sp., which often looks like woolly cushions carrying spines, hairs and the flowers arise from or near the areoles.  The spines in cactus are modified leaves which provide shade against scorching sun and help in conservation of moisture besides protecting against birds and beasts.
<br>All the cacti are succulents on account of slowing water but all the succulents are not cacti. The cacti are one type of succulents which are exclusively belonging to the family ‘Cactaceae’. They are perennials, bearing spine cushions called ‘aeroles’. Most of the cacti do not have leaves but the succulents have leaves. The cacti usually bloom annually and are beautiful and large.
<br>Like any other plant, cacti can be raised from seeds but the process is very slow. Hence, the common practice is to grow them through vegetative buds. The container for cacti are filled with about 10 cm of gravel and above that a thin layer of sand is spread to provide drainage. The best soil mixture consists of sandy loam, little cowdung manure and some broken bricks. Watering by sprinkling should be done once or twice in a week. Repotting is necessary with fresh soil once in two or three years, usually in the same containers, since the plants grow very slowly.
<br>Cactus and succulents are very popular amongst gardeners, amateurs and hobbyists who are used to adorn sunny situations of gardens, houses, window sides and rock gardens. 
<p style="font-weight:bold;font-size:18px;">6. INDOOR PLANTS</p>
The House Plants, or Indoor Plants, have become a necessity in the homes of the affluent West, but even in some affluent Indian homes these types of plant are also now finding a prominent place. Indoor plants are used to beautify the areas inside the house. It is less costly to decorate the interior of a room with live plants compared to flowers, which are becoming costlier day by day and besides they are to be replaced frequently. On the other hand, with little care, a well-chosen house plant will continue to decorate a room for a period of time. The initial investment may be comparatively high but it proves economical in the long run.
<br>Though the fashion of growing house plants became universally popular during the past three or four decades, definitely it is not a new art. In the ancient civilizations of Egypt, India, and Rome it was not unusual to bring pot-grown or tub-grown plants inside a room for the purpose of decoration. In Europe, particularly in Britain, during the seventeenth, eighteenth, and nineteenth centuries it was a common practice for the well-to-do people to grow exotic house plants for interior decoration.
<br>The indoor plants can be placed in the following areas.
<br>1. Open zone: This is available in roof terraces. This zone is very warm especially during  summer in inland plains. Plants like Agave and cacti, which can tolerate reflected heat, can be selected for the above purpose.
<br>2. Shade of a tree in front of a house: Such places near the eastern side of the building may be considered for growing certain house plants which can easily come up under shade. Most of the foliage plants like Crotons, Eranthemum, Dracaena, Asparagus are preferred as potted plants in the area.
<br>3. Varandah of a house: This area normally gets only diffused light and the air environment is also good. The plants best suited for growing in verandahs are palms such as Livistonia, Areca lutescens, ferns and Begonias etc.
<br>4. Living room, drawing room etc: In these places, we can keep the plants either near the window or away from it. Near a window plants with brighter foliage and occasionally herbaceous flowering plants are preferred, while plants with drooping foliage like Zebrina, Sedum, Mesembranthemum are preferred in the former cases.
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