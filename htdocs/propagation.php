<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Blossoms at Backyard : Home : Propagation</title>
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
	left:43%;
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
  height:50%;
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
<div class="text-container" style="  font-family: Merienda One;font-size:20px;">
<hr style="border-width:20px; border-color:#53302D"><div class="hr-container"><a>Propagation</a></div></hr>
<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Introduction</button>
<div class="panel">
  <ul>
  <li>Propagation is a natural phenomenon in all plants.</li>
  <li>It is the process of multiplication of a plant by sexual or asexual means to ensure the continuation of its progeny.</li>
  <li>This is achieved artificially on the field by adopting techniques suitable to the specific plant and its growth cycle.</li>
  </ul>
  <p style="font-weight:bold">Different methods of asexual propagation</p>
  <ul><li>Asexual methods of propagation are carried out usually by cuttings, grafting, budding, layering and planting of modified organs.</li></ul>
  <img src="propagating.jpg" style="height:200px;width:350px;position:relative;left:270px;border-radius:6px">
  <p style="font-weight:bold;position:relative;left:370px">fig. Propagation</p>
</div>
<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Propagation Methods</button>
<div class="panel">
   
  <button class="accordion" style="font-size:18px;position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Propagation through cutting.</button>
  <div class="panel">
  <p style="font-weight:bold;font-size:18px;position:relative;top:10px">Propagation through cuttings.</p> 
  <ul>
  <li>Propagation through cuttings is an easy and less expensive method of vegetative propagation.</li>
  <li>A cutting is usually a division of the stem, or root or leaf of a plant.</li>
  <li>Cutting is extracted from a plant part and planted in the soil.</li>
  <li>Based on the requirement, the cuttings are extracted from a mother plant of a definite age.</li>
  <li>The extracted cuttings are trimmed and planted in the soil either horizontally or vertically depending on the need.</li>
  <li>Among all the type of cuttings, stem cuttings are most widely used</li>
  </ul>
  <img src="propcut.png" style="height:350px;width:250px;position:relative;left:270px;border-radius:10px;padding:10px">
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p style="font-weight:bold;font-size:18px">A. Hardwood cuttings.</p> 
  <ul>
  <li>Cuttings taken from the branches of the current year's growth of a plant are usually considered to be Hardwood cuttings.</li>
  <li>These cuttings usually measure 25-30 centimetres with 4-5 nodes.</li>
  <li>Cuttings of pencil thickness with uniform internodal growth are preferred.</li>
  <li>Based on the requirement, the cuttings are extracted from a mother plant of a definite age.</li>
  <li>Some of the medicinal plants that are usually propagated by hardwood stem cuttings are, Hibiscus rosa-sinensis (Mandara), Pomegranate (Dalimba), Lawsonia inermis (Goranta or Krommi).</li>
  </ul>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p style="font-weight:bold;font-size:18px">B. Semi-Hardwood cuttings.</p>
  <ul>
  <li>These are cuttings prepared from tender shoots and branches of the current year's growth that are not too hard but show brown blotches on the green stem.</li>
  <li>They usually measure about 20 centimetres with a pair of leaves retained at the tip.</li>
  <li>Some of the medicinal plants that are usually propagated by Semi hardwood stem cuttings are, Adhatoda vasica (Adda sarap), Tinospora cordifolia (Jivantika, Tippatiga), Eclipta alba (Gunta-galijeru, Gunta-kalagara), Gymnema sylvestre (Poda patri, Putla podra), and Piper spp.</li>
  </ul>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p style="font-weight:bold;font-size:18px">C. Softwood-stem cuttings.</p>
  <ul>
  <li>Those cuttings prepared from the soft tender shoots that are still green are considered softwood cuttings.</li>
  <li>These cuttings usually measure 8-10 cms with a growing tip and the leaves are usually retained at the tip.</li>
  </ul>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p style="font-weight:bold;font-size:18px">Propagation through cuttings.</p>
  <ul>
  <li>Some of the medicinal plants that are usually propagated by semi hardwood stem cuttings are, Bacopa monnieri (Brahmi), Gymnema sylvestre (Poda patri, Putla podra).</li>
  </ul>
  </div>
  <button class="accordion" style="font-size:18px;position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbspPropagation through layering.</button>
  <div class="panel"><p style="font-weight:bold;position:relative;top:10px">Propagation through layering.</p>
  <ul>
  <li>In this technique a vegetative branch is made to root while it is still attached to the mother plant.</li>
  <li>The rooted branch will be later excised and planted as a new seedling.</li>
  <li>Different layering techniques such as air layering techniques such as air layering, mound layering and serpentine layering are commonly practiced.</li>
  </ul>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p style="font-weight:bold">Air layering.</p>
  <p>Air layering is carried out as follows: </p>
  <ul>
  <li>Pencil size shoot of the current years growth is to be selected.</li>
  <li>On the selected shoot, preferably on the basal portion, a ring of bark is removed and the exposed wood is scraped.</li>
  <li>The exposed portion is further wrapped with moist inert rooting medium like Sphagnum moss, moist coir etc.</li>
  <li>And covered with a polythene sheet making it air tight.</li>
  <li>This branch is left undisturbed on the mother plant for about 2-8 weeks depending on the species.</li>
  </ul>
  <img src="airlayer.png" style="height:250px;width:180px;position:relative;left:300px;border-radius:6px;padding:10px">
   <p style="position:relative;left:330px;">fig. Air Layering </p>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p>During the course several adventitious roots emerge from the base of the exposed bark, which is covered.</p>
  <ul>
  <li>The rooted branch will be later cut below the covered portion and planted as a separate seedling.</li>
  <p><img src="rooting.png" style="height:200px;width:300px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
     <img src="cover2.png" style="height:200px;width:300px;position:relative;left:100px;top:10px;bottom:10px;border-radius:6px"></p>
  <li>In the case of medicinal plants, air layering is frequently followed in Goose berry (Amla), Tamarind (Chinta) and Ficus spp.</li>
  </ul>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p style="font-weight:bold">Mound layering</p>
  <p>It is another technique of layering and carried out as follows:</p>
  <ul>
  <li>A long and supple branch is selected.</li>
  <li>Ring of bark is removed at the base and buried in the soil.</li>
  <li>In the due course, roots emerge from the buried portion.</li>
  <li>After sufficient emergence of the roots the branch will be separated from the mother plant and planted as an independent plant.</li>
  <p><img src="trenching.png" style="height:200px;width:300px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
     <img src="rootstock.png" style="height:200px;width:300px;position:relative;left:100px;top:10px;bottom:10px;border-radius:6px"></p>
 <li>A series of such layering done on a single long branch that is buried and exposed alternately makes serpentine layers.</li>
  <li>Serpentine layering can be tried for species, which have drooping long and supple branches.</li>
  <li>In the case of medicinal plants, serpentine layering is seen in very few species such as Tinospora cordifolia (Jivantika, Tippatiga), Celastrus paniculatus (Gundameda, Pallerutiva).</li>
  </ul>
  </div>
  <button class="accordion" style="font-size:18px;position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Propagation through Grafting.</button>
  <div class="panel"><p style="font-weight:bold;position:relative;top:10px">Propagation through grafting.</p>
  <ul>
  <li>Grafting is a propagation technique usually employed to improve the quality of the nursery stock or to produce seedlings that carry the plus qualities of a mother plant.</li>
  <li>It is carried out by bringing together two vegetative parts from two different plants of a same species and joining them together to grow as a single plant.</li>
  <li>Usually the stem branches are used for the purpose of grafting.</li>
  </ul>
  <p>
    <img src="graft.png" style="height:200px;width:350px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
    <img src="grafted.png" style="height:250px;width:200px;position:relative;left:120px;top:10px;bottom:10px;border-radius:6px">
	<p style="position:relative;left:180px;">fig. Graft union &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp fig. Grafted plant </p>
  </p>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <ul>
  <li>The plant part that receives another plant part is called the stock, while the plant part that serves as the graft is called the scion.</li>
  <li>When these two are joined together, graft union takes place.</li>
  </ul>
  <p>
    <img src="stock1.png" style="height:150px;width:200px;position:relative;left:80px;top:10px;bottom:10px;border-radius:6px">
	<img src="stock2.png" style="height:150px;width:200px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
    <img src="stock3.png" style="height:150px;width:200px;position:relative;left:220px;top:10px;bottom:10px;border-radius:6px">
	<p style="position:relative;left:100px;">Selection of stock &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Splitting of root stock &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Preparation of sicon </p>
  </p>  
    <p>
    <img src="stock4.png" style="height:150px;width:200px;position:relative;left:15px;top:10px;bottom:10px;border-radius:6px">
	<img src="stock5.png" style="height:150px;width:200px;position:relative;left:25px;top:10px;bottom:10px;border-radius:6px">
    <img src="stock6.png" style="height:150px;width:200px;position:relative;left:35px;top:10px;bottom:10px;border-radius:6px">
	<img src="stock7.png" style="height:150px;width:200px;position:relative;left:45px;top:10px;bottom:10px;border-radius:6px">
	<p style="position:relative;left:35px;font-size:15.5px">Tying of graft union &nbsp &nbsp &nbsp &nbsp &nbsp Sprouting of stock &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Removal of plastic cap &nbsp &nbsp &nbsp Ready for planting material</p>
  </p>  
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <ul>
  <li>The scion always carries the positive qualities of the mother plant while the stock serves as the root system for the seedling.</li>
  <li>After the graft union is taken place, scion becomes the upper part while the stock becomes the basal part of the new plant.</li>
  <li>The stock plant is usually a plant that is already established and growing.</li>
  <li>During the process of grafting, certain portion of the stem from the stock plant is removed.</li>
  <li>The selected scion is brought either as a whole plant or as a part and inserted on to the stock plant so that the cut portion of the stock and the scion remain in contact.</li>
  <li>The stock and scion are tied together with the help of a tape to ensure the union.</li>
  <li>The graft is maintained in that condition for a specified time period.</li>
  <li>After the graft union is ensured, the remaining portion of the stock plant above the graft union is removed and the scion is encouraged to grow After this, the graft is ready for planting.</li>
  </ul>
  <img src="peper.png" style="height:250px;width:250px;position:relative;left:300px;bottom:10px;border-radius:6px">
  <p style="position:relative;left:350px;font-size:18px">Pepper Grafting</p>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p>Different techniques of grafting are seen in use for propagating different plants. The commonly followed techniques are the following:</p>
  <p style="font-weight:bold;">Approach grafting</p>
  <ul>
  <li>The method involves causing the graft union between the two selected branches of Stock and Scion while the branches are still growing on the parent plants.</li>
  <p style="font-weight:bold;">Wedge grafting</p>
  <li>The method involves causing the graft union by inserting the scion, which is in the form of a wedge, on to an incision on the stock plant. The scion is usually a branch excised from the mother plant.</li>
  <p>
    <img src="wedge1.png" style="height:150px;width:200px;position:relative;left:50px;top:10px;bottom:10px;border-radius:6px">
	<img src="wedge2.png" style="height:150px;width:200px;position:relative;left:120px;top:10px;bottom:10px;border-radius:6px">
    <img src="wedge3.png" style="height:150px;width:200px;position:relative;left:190px;top:10px;bottom:10px;border-radius:6px">
  </p> 
  <p>
    <img src="wedge4.png" style="height:150px;width:200px;position:relative;left:50px;top:10px;bottom:10px;border-radius:6px">
	<img src="wedge5.png" style="height:150px;width:200px;position:relative;left:120px;top:10px;bottom:10px;border-radius:6px">
    <img src="wedge6.png" style="height:150px;width:200px;position:relative;left:190px;top:10px;bottom:10px;border-radius:6px">
  </p> 
  <p style="font-weight:bold;">Epicotyl grafting</p>
  <li>Grafting is done on the tender shoot of about 5-7 days old of a germinated seed with its epicotyl seeds still intact.</li>
  <p style="font-weight:bold;">Softwood grafting</p>
  <li>Grafting is done on the soft shoot of the stock plant which is a seedling of about 6 months.</li>
  </ul>
  <img src="softwood.png" style="height:250px;width:250px;position:relative;left:300px;bottom:10px;border-radius:6px">
  <hr style="border-width:2px;border-color:#53302D"></hr>
  <p>However in the case of medicinal plants grafting is seen only with selected species of the genera Artocarpus (Panasa), Syzygium (Neredu), Myristica, Garcinia (Tamalamu) etc.</p>
    <p>
    <img src="claft.png" style="height:200px;width:300px;position:relative;left:100px;top:10px;bottom:10px;border-radius:6px">
    <img src="tongue.png" style="height:200px;width:300px;position:relative;left:150px;top:10px;bottom:10px;border-radius:6px">
	<p style="position:relative;left:180px;">fig.Cleft Grafting &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp fig. Tongue Grafting </p>
  </p>
  <hr style="border-width:2px;border-color:#53302D"></hr> 
  </div>
  <button class="accordion" style="font-size:18px;position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Propagation through Budding.</button>
  <div class="panel"><p style="font-weight:bold;position:relative;top:10px">Propagation through budding</p>
  <p>It is yet another propagation technique where a vegetative bud is excised from a mother plant and used as the scion material. The technique involves.</p>
  <ul>
  <li>The removal of selected vegetative bud along with a patch of bark from the scion plant and inserting it on to the stock plant.</li>
  <li>The graft is further tied to keep the bud in place and maintained till the union takes place.</li>
  <li>After the union is ensured, the portion of the stock above the bud union is removed and the sprout from the scion bud is encouraged to grow further.</li>
  </ul>
  <img src="citrus.png" style="height:250px;width:350px;position:relative;left:300px;bottom:10px;border-radius:6px">
  <hr style="border-width:2px;border-color:#53302D"></hr> 
  <p>
    <img src="bud1.png" style="height:150px;width:200px;position:relative;left:250px;top:10px;bottom:10px;border-radius:6px">
	<img src="bud2.png" style="height:150px;width:200px;position:relative;left:270px;top:10px;bottom:10px;border-radius:6px">
	<p style="position:relative;left:120px;font-size:15.5px">Removal of bud, fixing in rootstock tying with polyethylene Strip and Sucessful graft</p>
  </p>
  <p>
	<img src="bud3.png" style="height:150px;width:200px;position:relative;left:250px;top:10px;bottom:10px;border-radius:6px">
	<img src="bud4.png" style="height:150px;width:200px;position:relative;left:270px;top:10px;bottom:10px;border-radius:6px">
    <p style="position:relative;left:350px;font-size:15.5px">Technique of batch budding</p>
  </p> 
  <hr style="border-width:2px;border-color:#53302D"></hr>  
  <ul>
  <li>Different budding techniques such as Shield budding, Patch budding, Ring budding are seen in use, in which the scion material (in the shape of a shield, a small rectangular patch, a ring respectively) is inserted on to the stock plant.</li>
  <li>However, in the case of medicinal plants, budding is very rarely practiced.</li>
  </ul>
  <hr style="border-width:2px;border-color:#53302D"></hr> 
  </div>
  <button class="accordion" style="font-size:18px;position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Propagation through modified organs.</button>
  <div class="panel"><p style="font-weight:bold;position:relative;top:10px">Propagation through modified organs</p>
  <p>Several species of plants ensure their propagation with the help of modified organs that serve as the propagules. Following are some such special organs.</p>
  <table style="width:100%">
  <tr>
    <td>
	<p style="font-weight:bold">Suker</p>
	<ul>
	<li>A sucker is a small plantlet that appears around a mother plant from its base. These plantlets remain attached to the mother plant and continue to grow</li>
	<li>They assume to grow as independent plants when they are separated from the mother plant and planted else where</li>
	<li>Suckers are the propagating material of medicinal plants such as Aloe vera (Kalabanda), Aegle mormelos (Maredu), Holorrahena antidysenterica etc.</li>
	</ul>
    </td>
	<td><img src="t1.jpg" style="height:150px;width:200px;border-radius:6px"></td>
  </tr>
    <tr>
    <td>
	<p style="font-weight:bold">Tuber</p>
	<ul>
	<li>Tuber is the swollen and fleshy underground stem or root. These are found attached at the base of the stem.</li>
	<li>On separation, tubers or pieces of a tuber will grow into independent plants.</li>
	<li>Tuber is the propagating material of many medicinal plants such as Asparagus racemosus (Challa gaddalu, Pillipichara), Dioscoria spp. (Chedupaddudumpa, Karrapendalamu), Adenia hondala, Gloriosa superba (Kalappa gadda), Ipomoea spp. (Nagaramukkatte, Thooti koora, Nelagummudu) etc.</li>
	</ul>
    </td>
	<td><img src="t2.jpg" style="height:150px;width:200px;border-radius:6px"></td>
  </tr>
  <tr>
    <td>
	<p style="font-weight:bold">Rhizome</p>
	<ul>
	<li>Rhizome is the swollen and compressed underground stem with short scaly leaves and vegetative buds.</li>
	<li>A piece of rhizome with a bud, if planted, will grow into an independent plant.</li>
	<li>Rhizome is the propagating material of medicinal plants such as Ginger (Allam), Turmeric (Pasupu), Costus speciosus (Chengalvakoshtu, Kushthamu) etc.</li>
	</ul>
    </td>
	<td><img src="t3.jpg" style="height:150px;width:200px;border-radius:6px"></td>
  </tr>
</table> 
  </div>
  <button class="accordion" style="font-size:18px;position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Micropropagtion</button>
  <div class="panel"><p style="font-weight:bold;position:relative;top:10px">Micropropagtion</p><p>Apart from conventional methods of propagation micropropagation has been standardized and it has also been commercialized in few crops. Some research leads in this direction are listed here under.</p>
  <ul>
  <li>Commercial production of tissue cultured plants in banana, strawberry and pine-apple successful.</li>
  <li>Production of virus-free planting material and shoot tip grafting in citrus a commercial.</li>
  <li>Cutting is extracted from a plant part and planted in the soil.</li>
  <li>Protocols proposition for mass multiplication of apple, grape and citrus rootstocks available.</li>
  <li>The extracted cuttings are trimmed and planted in the soil either horizontally or vertically depending on the need.</li>
  <img src="microprop.jpg" style="height:250px;width:350px;position:relative;left:250px;border-radius:10px;padding:20px">
  <li>In vitro multiplication of superior potato clones for chip and finger making commercialized.</li>
  <li>Micro-tuber and True Potato Seed techniques also standardized for commercial exploitation.</li>
  <li>Production of virus-free planting material and shoot tip grafting in citrus a commercial.</li>
  <li>Virus elimination through meristem culture has been standardized in potato and taro.</li>
  <li>High frequency reproducible protocols for rapid propagation of rose, carnation, gerbera, orchids, chrysanthemum and gladiolus developed.</li>
  <li>In vitro propagation protocols available for different MAPs like Rauvolfia serpentine (Sarpgandha), Dioscorea floribunda, Rosmarinus officinalis (rosemary), Azadirachta indica, Stevia sp., Celastrus paniculatus Willd.</li>
  <li>Aloe vera, geraniums, neem, Pathouli, Stevia sp. etc. Protocols developed are not commercially successful but need refinement in coconut, areca nut and cashew.</li>
  <li>Protocols standardized for micro-propagation of superior tea, coffee and rubber clones.</li>
  </ul>
    <hr style="border-width:2px;border-color:#53302D"></hr>  
  </div>
</div>
<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Propagation techniques crop wise</button>
<div class="panel">
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Fruits</button>
	<div class="panel">
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Mango</button>
	<div class="panel">
	<p style="font-weight:bold">Mango</p>
	<p style="font-weight:bold">Propagation</p>
	<ul>
	<li>Mango can be raised from seed or propagated vegetatively.</li>
	<li>Several methods of vegetative propagation have been tried with varying degrees of success.</li>
	<li>Propagation from seed, though easy and cheap, is unable to perpetuate characters of the parent tree because most commercial varieties in India are cross-pollinated and monoembryonic.</li>
	<li>Plants also take more time to bear fruit. However, it is essential to raise seedlings to be used as rootstocks.</li>
	</ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>  
	<p style="font-weight:bold">Methods of propagation</p>
	<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Softwood grafting</button>
	<div class="panel">
	<p style="font-weight:bold">Softwood Grafting</p>
	<ul>
	<li>This method of grafting is done when the rootstock is overgrown and thus not suitable for stone grafting.</li>
	<li>Normally in this method, seedlings of 8-10 months old are selected.</li>
	<li>The grafting is done on newly emerged flush. The scion wood to be used is defoliated 10 days prior to the grafting and has same thickness as that of terminal shoot.</li>
	<li>The method of grafting is similar to stone grafting. July and August are the best months for soft-wood grafting.</li>
	</ul>
  <p>
    <img src="sfg1.png" style="height:150px;width:200px;position:relative;left:50px;top:10px;bottom:10px;border-radius:6px">
	<img src="sfg2.png" style="height:150px;width:200px;position:relative;left:120px;top:10px;bottom:10px;border-radius:6px">
    <img src="sfg3.png" style="height:150px;width:200px;position:relative;left:190px;top:10px;bottom:10px;border-radius:6px">
  </p> 
  <hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Inarching</button>
	<div class="panel">
	<p style="font-weight:bold">Inarching</p>
  <ul>
  <li>The method of inarching or approach grafting is quite cumbersome and time consuming, but it is still the leading method for commercial propagation of mango plants.</li>
  <li>The method consists of uniting the selected shoot (scion) of a desired parent tree (mother plant) with the potted or transplanted seedling (rootstock) by approach grafting.</li>
  <li>For this purpose, about one-year-old seedlings are most suitable when they attain a height of about 30-45 cm and thickness ranging from 0.75 to 1.5 cm.</li>
  <li>These seedlings are either grown in pots or under the mother plant from which the grafts are to be prepared.</li>
  <li>Generally, one-year-old twigs of the scion tree about 60 cm in length and nearly of the same thickness as that of the stock is chosen for grafting.</li>
  <img src="inarching.png" style="height:325px;width:250px;position:relative;left:250px;border-radius:10px;padding:5px">
  <p style="font-weight:bold;position:relative;left:280px">Inarching of mango</p>
  <li>Young and non-bearing trees should not be selected as mother plants.</li>
  <li>A thin slice of bark and wood, about 5 cm in length, 7.5 mm width and 2 mm deep, is removed by means of a sharp grafting knife from the stem of the stock as well as from the scion branch.</li>
  <li>The cuts thus made should be absolutely flat, clean, boat shaped, even and smooth.</li>
  <li>The cut surfaces of both, i.e., stock and scion are made to coincide facing each other so that there remains no hollow space between the two.</li>
  <li>Polythene/alkathene strips of about 1.5 cm in width are tied around the union.</li>
  <li>After about one month of operation, the scion below the graft union and stock above the graft union should be given light "V" shape cuts at weekly interval in such a way that the grafts can finally be detached while giving the fourth cut.</li>
  <li>In the last stage, the top of the stock above graft union should also be removed completely.</li>
  <li>Inarching should be done during the active growth period.</li>
  <li>The end of the monsoon in heavy rainfall areas and early monsoons in the light rainfall areas is the best period for inarching.</li>
  </ul>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Veeneer Grafting</button>
	<div class="panel">
	<p style="font-weight:bold">Veeneer Grafting</p>
  <ul>
  <li>This method of propagation possesses promise for mass scale commercial propagation.</li>
  <li>The method is simple and can be adopted with success.</li>
  <li>The rootstocks as mentioned for inarching are suitable for this method also.</li>
  <li>For conducting this grafting operation, a downward and inward 30-40 mm long cut is made in the smooth area of the stock at a height of about 20 cm.</li>
  <li>At the base of cut, a small shorter cut is given to intersect the first so as to remove the piece of wood and bark.</li>
  <img src="veeneer.png" style="height:325px;width:380px;position:relative;left:200px;border-radius:10px;padding:10px">
  <li>The scion stick is given a long slanting cut on one side and a small short cut on the other so as to match the cuts of the stock.</li>
  <li>The scion is inserted in the stock so that the cambium layers comes on the longer side.</li>
  <li>The graft union is then tied with polythene strip as recommended for inarching.</li>
  <li>After the scion remains green for more than 10 days, the rootstock should be clipped in stages.</li>
  <li>The scion wood to be used for veneer grafting requires proper preparation.</li>
  <li>The desired shoots should be defoliated at least one week prior to grafting so that the dormant buds in the axil of leaves become swollen.</li>
  </ul>
  <hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Stone Grafting</button>
	<div class="panel">
	<p style="font-weight:bold">Stone Grafting</p>
	<ul>
    <li>Stone/epicotyl grafting is a simple, cheap and quick method of mango propagation with a success rate of 75-80%.</li>
	<li>For this purpose, stones should be sown in June-July on raised beds of size 1x3 m.</li>
	<li>The beds should e prepared by mixing soil and FYM in the proportion of 2:1.</li>
	<li>After germination, seedlings with tender stems having coppery leaves are lifted with stones still attached.</li>
	<li>The roots and stones are dipped in O.1 per cent Carbendazirn solution for 5 minutes after washing the soil.</li>
    <img src="stone1.png" style="height:200px;width:200px;position:relative;left:140px;top:10px;bottom:10px;border-radius:6px;padding:10px">
    <img src="stone2.png" style="height:200px;width:220px;position:relative;left:160px;top:10px;bottom:10px;border-radius:6px;padding:10px">
    <li>The seedling stems are headed back leaving 6-8 cm long stem.</li>
	<li>A 4-6 cm longitudinal cut is made running down through the middle of the stem.</li>
	<li>A wedge shaped cut starting on both sides is made on the lower part of scion stick.</li>
	<li>The scion stick should be 4-5 months old and 10-15 cm long containing plumpy terminal buds.</li>
	<li>The scion stick is then inserted in the cleft of the seedlings and tied with polythene strips.</li>
	<li>The grafts are then planted in polyethylene bags containing potting mixture.</li>
	<li>The bags are then kept in the shade protecting from heavy rain.</li>
	<li>The scion stars sprouting 15-20 days after grafting.</li>
	<li>Care should be taken to remove the sprouts on the rootstocks below the graft union during this period.</li>
	<li>July is the most suitable month for stone grafting.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Banana</button>
	<div class="panel">
	<p style="font-weight:bold">Stone Grafting</p>
	<ul>
    <li>Commercial bananas are seedless and propagated exclusively by vegetative means.</li>
	<li>The banana has a reduced underground stem, called the rhizome, which bears several buds.</li>
	<li>Each of these buds sprouts and forms its own pseudostem and a new bulbous rhizome.</li>
	<li>These daughter plants are called suckers.</li>
	<li>Banana is mostly propagated by rhizomes and suckers viz. sword suckers and water suckers.</li>
    <img src="ban1.png" style="height:325px;width:200px;position:relative;left:250px;top:10px;bottom:10px;border-radius:6px;padding:20px">
    <li>Sword suckers have a well developed base with narrow sword-shaped leaf blades at the early stages.</li>
	<li>Water sucker posses broad leaves, which do not produce healthy banana clumps. Suckers of 2-4 months age are selected.</li>
	<li>Other planting materials are whole or bits of rhizomes.</li>
	<li>Basrai variety in Jalgaon (Maharashtra) is as a rule propagated by dormant rhizomes.</li>
	<li>After cutting the parent plant, the rhizomes are removed from the soil, stored in cool, dry place for about 2 months.</li>
	<li>During the resting period the remaining part of pseudostem at the bottom falls of, leaving prominent heart bud.</li>
	<li>Conical rhizome should be selected while flat rhizomes to be rejected.</li>
	<li>It should be 3-4 months age at planting. Very small rhizomes will give bigger size fruits with late flowering while bigger size rhizomes flower early but bear small size fruit/bunches.</li>
	<li>Since banana is highly unstable in genetic constitution, the suckers/rhizomes should be  selected from plants, which are healthy, having all the desirable bunch qualities and high yielding ability possessing atleast 10 hands in a bunch.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Tissue culture propagation</p>
	<ul>
	<li>Now-a-days banana plants are also propagated through tissue culture.</li>
	<li>Varieties like Shrimanti, Gross Michael and Grand Naine are commonly produced using tissue culture technique.</li>
	<li>Normally disease free plantlets with 3 - 4 leaves are generally supplied in pots for raising secondary nursery.</li>
	<img src="ban2.png" style="height:200px;width:350px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px;padding:20px">
	<li>Plants are initially kept in shade [50%] and as they harden, shade is reduced gradually.</li>
	<li>After 6 weeks, plants do not require any shade. Normally two months of secondary nursery is good enough before the plants to be planted in the field pits.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Guava</button>
	<div class="panel">
	<p style="font-weight:bold">Propagation</p>
	<p style="font-weight:bold">Seed propagation</p>
	<ul>
	<li>Guava propagated from seeds germinates in about three weeks.</li>
	<li>Freshly extracted seeds of fully matured fruits should be used for this purpose.</li>
	<li>Seedlings can be raised in nursery or in polyethylene bags.</li>
	<img src="guva.png" style="height:200px;width:400px;position:relative;left:200px;top:10px;bottom:10px;border-radius:6px;padding:20px">
	<li>Seed viability declines very quickly after extraction from fruits.</li>
	<li>Considering the hard coat of the seeds it is necessary to pour boiling water on the seeds and allowing it to soak in water for two weeks prior to sowing or treating them with strong sulphuric acid for five minutes facilitates their germination.</li>
	<li>However the raising of the guava plants form seed is not desirable, since the seedling trees differ greatly from their mother plants.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Vegetative Propagation</p>
	<p style="font-weight:bold">Air Layering</p>
	<ul>
	<li>Air-layering is the commercial method in practice for propagation of guava.</li>
	<li>The most ideal time for airlayering in guava is between April and June in the warm and humid climate, when the average temperature varies between 29.3 and 30.5°C and relative humidity between 69.0 and 80.0 per cent.</li>
	<li>A shoot from previous year's growth of 1cm in diameter is selected for air-layering. A ring of bark about 3cm long is removed.</li>
	<li>This area is covered with wet sphagnum moss and tied with polyethylene film.</li>
	<li>The rooting takes place in about 30-40 days. Veneer grafting, T-budding, Forkert budding are some of the other methods of propogating guava.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Papaya</button>
	<div class="panel">
	<p style="font-weight:bold">Propagation</p>
	<ul>
	<li>Propagation of papaya is mostly through seeds.</li>
	<li>However freshly extracted seeds show low germination due to presence of sarco testa.</li>
	<li>Storage of seeds at 100C was found to be the best for retention of seed viability.</li>
	<li>Viability of papaya seed can be maintained for 9 months at room temperature when stored in air-tight containers</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<img src="papya.png" style="height:200px;width:400px;position:relative;left:200px;top:0px;bottom:10px;border-radius:6px;padding:20px">
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Raising Seedlings in Nursery</p>
	<ul>
	<li>Seedlings are grown in nursery on raised beds of size 1 x 2 m.</li>
	<li>Seeds are sown at a depth of 1 cm in rows spaced at 15 cm with 2.5 cm spacing within the row.</li>
	<li>Seedlings can also be raised in polythene bags of size 5x7cm.</li>
	<li>Before sowing seeds are treated with Thiourea (100-200 ppm) and Gibberellic acid (GA at 200 ppm) for better germination.</li>
	<li>The beds/bags are immediately watered after sowing. 3 Seeds germinate in 2-3 weeks after sowing.</li>
	<li>Seedlings are ready for transplanting within 45-60 days when they reach a height of 20-25cm.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Apple</button>
	<div class="panel">
	<p style="font-weight:bold">Propagation</p>
	<p style="font-weight:bold">Grafting</p>
	<ul>
	<li>Apples are propagated by several methods viz.; whip, tongue, cleft and roots grafting.</li>
	<li>Tongue and cleft grafting at 10-15 cm above the collar during February-March gives the best results.</li>
	<li>Usually grafting is done at the end of winter.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<img src="apple1.png" style="height:350px;width:200px;position:relative;left:160px;top:10px;bottom:10px;border-radius:6px;padding:20px">
    <img src="apple2.png" style="height:350px;width:200px;position:relative;left:180px;top:10px;bottom:10px;border-radius:6px;padding:20px">
  	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Budding</p>
	<ul>
	<li>Apples are mostly propagated by shield budding, which gives a high percentage of success.</li>
	<li>In shield budding a single bud along with a shield piece of stem is cut along with the scion and inserted beneath the rind of the rootstock through a 'T' shaped incision during active growth period.</li>
	<li>Budding is done when the buds are fully formed during summer.</li>
	<li>The optimum time of budding is September in Kashmir Valley, Kumaon hills of Uttaranchal, high hills of Himachal Pradesh and June in mid hills of Himachal Pradesh.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Rootstock</p>
	<ul>
	<li>Most of the apple plants are grafted or budded on seedling of wild crab apple.</li>
	<li>The seedling rootstocks obtained from the seeds of diploid cultivars like Golden Delicious, Yellow Newton, Wealthy, Macintosh and Granny Smith also can be used.</li>
	<li>High density planting is done using dwarfing rootstocks (M9, M4, M7and M106).</li>
    </ul>
	<img src="apple3.png" style="height:200px;width:200px;position:relative;left:270px;top:0px;bottom:10px;border-radius:6px;padding:10px">
	<hr style="border-width:2px;border-color:#53302D"></hr>
	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Citrus</button>
	<div class="panel">
	<p style="font-weight:bold">Propagation</p>
	<ul>
	<li>In India citrus trees are propagated both by seeds and vegetative means.</li>
	<li>Seed propagation is still practiced in the case of acid limes and to produce rootstocks for budding purposes.</li>
	<li>Shield or T budding is the most commonly used method of vegetative propagation.</li>
	<li>Budding is generally done either in spring or in September.</li>
    </ul>
	<img src="citrus1.png" style="height:200px;width:200px;position:relative;left:270px;top:0px;bottom:10px;border-radius:6px;padding:10px">
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Sheild or T Budding</p>
	<ul>
	<li>In this method of propagation, a bud from desired variety (scion) is transferred on the rootstock with an objective of utilising the vigorous root system of the rootstock and combining the best characters of both.</li>
	<li>A plump, but not too elongated bud is selected from the middle section of the scion shoot. It is removed by making an incision around the bud with the help of sharp budding knife.</li>
	<li>On the selected rootstock T-shaped incision is made just enough to accommodate the bud. The bud is inserted in the incision and tied with a strip of plastic film in such a way that the tip of the eye remains open.</li>
	<li>Budding should be preferably done as low as possible on the rootstock.</li>
	<li>It takes three to four weeks for the bud to unite when the new shoot from the grafted bud is about 10 cm long the top portion of the stalk above the union is cut off and the plastic film is removed.</li>
	<li>For budding, proper selection of the rootstock is very important as it contributes to the vigour, productivity and quality of fruits.</li>
	<li>It also influences resistance and tolerance to certain diseases and pests and plays a major role on agro climatic adaptation.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Grapes</button>
	<div class="panel">
	<p style="font-weight:bold">Propagation</p>
	<p style="font-weight:bold">Hardwood Cutting</p>
	<ul>
    <li>For obtaining hardwood cuttings, 3-4 year old disease free vigorously growing mature vines, which has produced a good crop in the previous year should be selected after October pruning.</li>
	<li>Cuttings from very young and very old vines or those subjected to heavy fruiting during the previous year should be avoided.</li>
	<li>Medium-size canes having internodal length of 8-10 cm are desirable. 30-45 cm long cuttings of pencil size thickness with atleast 3-4 nodes are cut from the middle portion of the selected canes.</li>
	<li>A cut should be made straight across 1cm below the node at the lower end of the cuttings, while slanted cut at the top is taken 2-3 cm above the bud.</li>
	<li>The cuttings are then immediately planted in bed or in polythene bags in the nursery.</li>
    <li>In case of delay in planting, the cuttings are stored by burying in moist sand or sawdust at 5 -7.50 C.</li>
	<li>In nursery, the cuttings are planted in well-prepared flat beds of 1.2m width of convenient length.</li>
	<li>A mixture of Leaf mould, FYM, Sand and Super phosphate is thoroughly mixed in the soil before forming the bed. Cuttings are planted 20 cm apart in lines.</li>
	<li>While planting the cuttings at least two nodes should be inside the soil with one bud above the soil.</li>
	<li>Care should be taken to maintain the polarity while planting the cuttings, since grape cuttings planted upside down do not grow.</li>
	<li>Soil is pushed back into the furrows and pressed firmly around each cutting.</li>
	<li>Cuttings can also be planted in polythene bags. Polybags (25x15 cm and150-200 gauge) are filled with a mixture of soil, sand and FYM in equal proportion along with Superphosphate.</li>
	<li>One or two cuttings may be planted in each bag. Preventive sprays to control common diseases are given during the growing period.</li>
    </ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<img src="grape1.png" style="height:200px;width:350px;position:relative;left:250px;top:10px;bottom:10px;border-radius:6px;padding:20px">
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Hardwood Cutting</p>
	<ul>
    <li>Chip budding is the best method for propagating vines on rootstocks.</li>
	<li>In this method a wedge-shaped piece containing the bud (chip) along with a portion of wood is removed from the desired variety.</li>
	<li>The scion buds should be plump and taken from well-mature healthy canes, equal in maturity level and thickness to that of the rootstock.</li>
	<li>A notch, sufficient to accommodate the chip, is made on the rootstock 10-15cm above the ground.</li>
	<li>The chip is places in this notch and wrapped with a polythene strip exposing the bud. Normally two budding are done on every mature stem 15 cm apart.</li>
    <li>When these buds sprout and grows to about 15 cm, the rootstock portion above it is cut off.</li>
	<li>The sprouts on the rootstock below the bud joint are removed regularly.</li>
	</ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Pomegranate</button>
	<div class="panel">
	<p style="font-weight:bold">Propagation</p>
	<p style="font-weight:bold">Air layering</p>
	<ul>
    <li>Air layering is carried out in the month of May/June.</li>
	<li>In this method a 1-2 year old, healthy, vigorous, mature shoot of 45-60 cm in length and pencil thickness is selected.</li>
	<li>A circular strip of bark about 3 cm wide just below a bud is completely removed from the selected shoot.</li>
	<li>Rooting hormones like IBA & NAA 50mg each in Lanoline paste are applied over this portion.</li>
	<li>Moist sphagnum moss is packed around this portion and tied with polyethylene sheet to prevent the loss of moisture.</li>
    <li>Application of such hormones promotes early rooting.</li>
	<li>Light brown roots are visible through the polythene wrap in the month of July-August.</li>
	<li>The rooted shoot is slowly detached by giving 2-3 successive cuts over a period of week before finally detaching from the parent plant.</li>
	<li>The polythene sheet is removed before planting them in pots.</li>
	<li>They are planted in pots and kept in nursery under shade.</li>
    <li>Top of the shoot is cut back to maintain a proper ratio of leaves:roots.</li>
	<li>The grafts can be transplanted in the field in the month of September/October.</li>
	</ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Spices and plantation crops</button>
	<div class="panel">
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Turmeric</button>
	<div class="panel">
	<p style="font-weight:bold">Turmeric: Curcuma longa Val</p>
	<p style="font-weight:bold">Propagation: Mother rhizome & finger rhizomes</p>
	<p style="font-weight:bold">Nutmeg: Myristica fragrans Houtt:</p>
	<p style="font-weight:bold">Propagation: Seeds /grafts/ budded plants</p>
	<p style="font-weight:bold">Seed Propagation</p>
	<ul>
    <li>Seeds are collected from regular bearing and high yielding trees (more than 10,000 fruits per tree per year) and having 30 g weight/fruit, 1 g wet mace /fruit and 10 g wet weight of nuts / fruit.</li>
	<li>Seeds are harvested during June – July. Sown immediately after extraction in beds at a spacing of 30 cm and 2.5 – 5.0 cm deep.</li>
	<li>Germination commences from 40 days and extends up to 90 days after sowing. Transplanted to poly bags (35 x 15 cm) one year old seedlings are transplanted to bigger poly bags (35 x 20 cm).</li>
	<li>Seedlings transplanted to main field from 18-24 months.</li>
	</ul>
	<p style="font-weight:bold">Vegetative propagation:</p>
	<ul>
    <li>Grafting (approach method) or budding (Patch method) is recommended to perpetuate high yielding nutmeg types.</li>
	<li>Best season is from October to January. Use only orthotropic shoots as scion materials.</li>
	</ul>
	<p style="font-weight:bold">Propagation from suckers:</p>
	<ul>
    <li>Suckers from high yielding plants are planted in clonal gardens.</li>
	<li>Spacing 1.8 m x 0.6 m (6800 plants/ha of clonal nursery).</li>
	<li>Shade and Irrigation is provided, 32 – 42 suckers obtained from each planting unit in 12 months.</li>
	</ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Cinnamon</button>
	<div class="panel">
	<p style="font-weight:bold">Spices and Plantation Crops</p>
	<p style="font-weight:bold">Cardamom: Elettaria cardamomum (Maton.)</p>
	<p style="font-weight:bold">Propagation from seeds:</p>
	<ul>
    <li>Collect seeds from healthy and high yielding plants. Seed rate – 600g/ha (fresh seeds). </li>
	<li>Treat with commercial grade Sulphuric acid or Hydrochloric acid for 20 minutes. </li>
	<li>Wash with water. Prepare the beds with equal quantity of well rotten cattle manure, wood ash and jungle soil. </li>
	<li>Sow the seeds in beds and cover with a thin layer of fine sand. Mulching and shading may be provided to seed beds. </li>
	<li>The beds should be kept moist but not too wet. </li>
	<li>Germination starts usually a month after sowing and continues upto three months. </li>
	<li>One year old seedlings are transplanted to secondary nursery. </li>
	</ul>
	<p style="font-weight:bold">Secondary nursery:</p>
	<ul>
    <li>Prepare the beds. As that of primary nursery, shade is provided by erecting overhead pandal</li>
	<li>Seedlings planted at a distance of 20 x 20 cm. 18-22 months old seedlings are used for transplanting. Polybags of 20 x 20 cm size can be used.</li>
	</ul>
	<p style="font-weight:bold">Propagation from suckers:</p>
	<ul>
    <li>Suckers from high yielding plants are planted in clonal gardens.</li>
	<li>Spacing 1.8 m x 0.6 m (6800 plants/ha of clonal nursery).</li>
	<li>Shade and Irrigation is provided, 32 – 42 suckers obtained from each planting unit in 12 months.</li>
	</ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp All Spice</button>
	<div class="panel">
	<p style="font-weight:bold">Allspice (Pimenta dioica Lindl.)</p>
	<p style="font-weight:bold">Propagation</p>
	<p style="font-weight:bold">Seeds</p>
	<ul>
    <li>Seeds are collected from high yielding and regular bearing trees.</li>
	<li>Seeds are extracted after soaking the fruits overnight in water and rubbing them in a sieve and washing with clean water.</li>
	<li>The seeds are ready for sowing after drying them in shade. Nursery beds of 1.2 m width are prepared with light soil incorporated with organic matter or a mixture of sand and coir dust or coir dust alone.</li>
	<li>After sowing the beds are mulched to hasten germination.</li>
	<li>Dried leaves, paper and damp sacks are used as mulches.</li>
	<li>Germination takes place 15 days after sowing.</li>
	</ul>
	<p style="font-weight:bold">vegetative propagation</p>
	<ul>
    <li>Air layering in the month of January.</li>
	</ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Cardamon</button>
	<div class="panel">
	<p style="font-weight:bold">Spices and Plantation Crops</p>
	<p style="font-weight:bold">Cardamom: Elettaria cardamomum (Maton.)</p>
	<p style="font-weight:bold">Propagation from seeds:</p>
	<ul>
    <li>Collect seeds from healthy and high yielding plants. Seed rate – 600g/ha (fresh seeds).</li>
	<li>Treat with commercial grade Sulphuric acid or Hydrochloric acid for 20 minutes.</li>
	<li>Wash with water. Prepare the beds with equal quantity of well rotten cattle manure, wood ash and jungle soil.</li>
	<li>Sow the seeds in beds and cover with a thin layer of fine sand. Mulching and shading may be provided to seed beds.</li>
	<li>The beds should be kept moist but not too wet.</li>
	<li>Germination starts usually a month after sowing and continues upto three months.</li>
	<li>One year old seedlings are transplanted to secondary nursery.</li>
	</ul>
	<p style="font-weight:bold">Secondary nursery</p>
	<ul>
    <li>Prepare the beds. As that of primary nursery, shade is provided by erecting overhead pandal.</li>
	<li>Seedlings planted at a distance of 20 x 20 cm. 18-22 months old seedlings are used for transplanting. Polybags of 20 x 20 cm size can be used.</li>
	</ul>
	<p style="font-weight:bold">Propagation from suckers:</p>
	<ul>
    <li>Suckers from high yielding plants are planted in clonal gardens.</li>
	<li>Spacing 1.8 m x 0.6 m (6800 plants/ha of clonal nursery).</li>
	<li>Shade and Irrigation is provided, 32 – 42 suckers obtained from each planting unit in 12 months.</li>
	</ul>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Vanilla</button>
	<div class="panel">
	<p style="font-weight:bold">Vanilla: Vanilla planifolia</p>
	<p style="font-weight:bold">Propagation:Stem cuttings of 60 - 120 cm</p>
	<p style="font-weight:bold">Coffee: Coffea arabica L.;Coffea canephora Pierre ex Frechna</p>
	<p style="font-weight:bold">Propagation: by seeds</p>
	<ul>
    <li>Preparation of seeds: Healthy and well-developed fully ripe berries are harvested from specially identified plants for use as seed bearers.</li>
	<li>After discarding the floats, the sound fruits are depulped, sieved and mixed with sieved wood ash and dried in shade.</li>
	<li>The seed is then graded to remove all cut, triangular and elephant beans.</li>
	<li>Prior to planting, the are treated with Agrosan or any Organomercurial compound to prevent fungal infection.</li>
	</ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Cashew:Anacardium occidentale L.</p>
	<p style="font-weight:bold">Propagation: Soft wood grafting, air layer and epicotyl grafting.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Rubber: Hevea brasiliensis Muell-Arg.</p>
	<p style="font-weight:bold">Propagation: Propagated by green budding and brown budding.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Palmyrah: Borassus flabellifer.</p>
	<p>Propagation: Seed. Germination of 63.25 % are achieved 6 weeks after sowing.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Medicinal plants</button>
	<div class="panel">
	<p style="font-weight:bold">Medicinal plants</p>
	<p style="font-weight:bold">Glory lily (Gloriosa superba)</p>
	<p style="font-weight:bold">Planting material</p>
	<ul>
    <li>Propagation through tubers. Select tubers weighing 40-60g.Sprouting is observed during July to August</li>
	</ul>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Coleus (Coleus forskohlii)</p>
	<p>Propagation : Terminal three to four nodal cuttings measuring 10 cm length is used.</p>
	<p style="font-weight:bold">Geranium: Pelargonium graveolens (L) Hervitt.</p>
	<p>Propagation: Geranium is propagated by stem cuttings.</p>
	<p>Cuttings of about 10 cm taken from current season growth with a well formed crown of leaves with 3 - 4 nodes and terminal bud and raised in polythene bags of 10 x 10 cm size.</p>
	<p>Thorough field preparation leading to fine tilth condition is essential.</p>
	<p>Pits of 30 x 30 cm size are dug and cattle manure at 250 g/pit is applied and rooted cuttings of 2 months age are planted at a spacing of 45 x 45 cm during April - May</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Patchouli; Pogostemon patchouli Hook.</p>
	<p>Propagation: Rooted stem cutting of 15-20 cm are used.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Mint: Mentha sp</p>
	<p>Propagation and planting: Rooted stem cuttings.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Flower crops</button>
	<div class="panel">
	<p style="font-weight:bold">Flower Crops</p>
	<p style="font-weight:bold">Rose: Rosa sp</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Cuttings with 2-3 buds are dipped in IBA or IAA @ 500 - 1000 ppm</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Malligai (Gundumalli): Jasminum sambac Ait)</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Semi hard wood cuttings (15 - 20 cm long)</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Mullai: Jasminum auriculatum (Vahle.)</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Semi hard wood cuttings (15 - 20 cm long)</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Jathi Malli (PITCHI): Jasminum grandiflorum L</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Terminal cuttings (12.5 - 15 cm long).</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Crossandra: Crossandra infundibuliformis L</p>
	<p style="font-weight:bold">Propagation</p>
	<p style="font-weight:bold">Tetraploids:</p>
	<p>Propagated through seeds. Seed rate is 5kg/ha. 60 day old seedlings are transplanted in the main field.</p>
	<p style="font-weight:bold">Triploids</p>
	<p>Propagated through terminal cuttings of 10 - 15 cm length (41,700 cuttings/ha).</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Chrysanthemum: Dendranthema grandiflora Tzeuleu</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Commercial propagation is through terminal cuttings (5-7 cm long) or suckers.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Marigold (African marigold): Tagetes erecta L</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Propagated through seeds.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Tuberose: Polianthes tuberosa L</p>
	<p style="font-weight:bold">Propagation and Planting</p>
	<p>Bulbs are used for commercial propagation</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Nerium: Nerium indicum Mill</p>
	<p style="font-weight:bold">Propagation and Planting</p>
	<p>Hard or semi hard wood cuttings of 60 cm length are used for propagation.</p>
	<p>Rooted cuttings are planted during June - July in 30 x 30 x 30 cm pits dug at 2 x 2 m spacing and filled with FYM, red earth and top soil.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Golden Rod: Solidago spp</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Commercially propagated through division of clumps or suckers.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
	<button class="accordion" style="position:relative;top:20px"><i class="fas fa-angle-down"></i>&nbsp Cut flowers</button>
	<div class="panel">
	<p style="font-weight:bold">Cut Flowes</p>
	<p style="font-weight:bold">Cut Rose: Rosa sp</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Cut roses are commercially propagated by �T� budding on Briar rootstock.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Cut Chrysanthemum: Dendranthema grandiflora)</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Terminal cuttings and tissue culture plants are used</p>
	<p>Terminal cuttings are widely used for commercial cultivation</p>
	<p>Cuttings of 5-7 cm length are taken from healthy stock plants and are induced to root by treating with IBA (1000 ppm).</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Carnation: Dianthus caryophyllus</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Division of clumps, keikis, back bulbs and tissue culture plants</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Lilium: Lilium sp</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Liliums are commercially propagated through bulbs.</p>
	<p>A six week cold storage period at 2oC to 5oC is needed to break dormancy. Bulbs can be stored at - 20C up to one year</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Gladiolus: Gladiolus spp</p>
	<p style="font-weight:bold">Propagation</p>
	<p style="font-weight:bold">Tetraploids</p>
	<p>Commercial propagation is through corms.</p>
	<p>Cold storage of corms at 3 to 7�C for 3 months or treatment with Ethrel (1000ppm) or GA3 (100ppm) or Thiourea (500 ppm) is adopted for breaking corm dormancy.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Triploids</p>
	<p>Propagated through terminal cuttings of 10 - 15 cm length (41,700 cuttings/ha)</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">Gerbera: Gerbera jamesonii</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Commercially propagated through division of suckers and tissue culture plants</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
	<p style="font-weight:bold">China Aster: Callistephus chinensis</p>
	<p style="font-weight:bold">Propagation</p>
	<p>Propagated through seeds.</p>
	<hr style="border-width:2px;border-color:#53302D"></hr>
  	</div>
</div>
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