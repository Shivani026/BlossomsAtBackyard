<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Blossoms at Backyard : Home</title>
</head>
<style>
html{scroll-behavior: smooth;}
body { 
margin:0; 
background-color: white;
overflow-x:hidden;
} 
.header {
	 height:450px;
}
.footer {
	 position:absolute;
	 top:2150px;
	 bottom:0px;
	 width:100%;
	 height:230px;
	 background-color:White; 
}
/* footer-links */
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}

/* background image */
.bg-img {
  background-image: url("bg28.jpg");
  height:450px;
  background-position:center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
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
  transition: 0.5s;
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

/* top navigation */
.top-container {
  position: absolute;
  top: 40px;
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
  background-color: rgba(221, 221, 221,0.6);
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

/* Search Box */
.search-container {
  width:31%;
  position:relative;
  top:40%;
  left:35%;
}

button{
  background-color:white;
  position:relative;
  top:-70px;
  left:360px;
  color: #0A8334;
  padding: 14px 20px;
  border: none;
  border-radius:0px;
  opacity: 0.8;
  font-family:'Merienda One';
  font-size:20px;
}

/* Full-width input fields */
.search-container input[type=text] {
  width:100%;
  bottom:10px;
  font-size:20px;
  border:none;
  border-radius:10px;
  padding: 13px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  font-color:white;
  background:white;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus:focus {
  background-color:#F2F2F2;
  outline: none;
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
  width:95%;
  height:0;
  overflow:auto;
  border-radius :2px;
  position:relative;
  top:-70px;
  left:10px;
  transition: 0.4s;
  display:block;
}
#myUL li a {
  top:-2px;
  background-color: #f6f6f6; /* Grey background color */
  padding: 10px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
   /* Make it into a block element to fill the whole list */
  display: block;
  overflow: auto;
  transition: 0.4s;
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}

/* text container */
.container{
  position: relative;
  top:30px;
  left:280px;
  width:60%;
}
/* horticulture categories*/
.category-container {
  position:relative;
  top:0px;
  left:250px;
  padding:14px;
  width:870px;
  height:80%;
  border-radius:10px;
  background-color: white;
}
/* images and its container*/
.img-container {
  position: relative;
  top:50px;
  left:180px;
  width:60%;
}

.image {
  border:none;
  border-radius:10px;
  display: block;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0;
  transition: .5s ease;
  background-color:#FFF5DA;
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
/* Slide show */
.mySlides {display: none;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
/* scroll to top button */
#myBtn {
  display: none; 
  position: fixed; 
  top: 580px; 
  height:50px;
  width:50px;
  left:1230px;
  right:40px;
  z-index: 100;
  background-color: #0A8334; 
  color: white; 
  cursor: pointer; 
  padding:10px; 
  border-radius:50px; 
  font-size: 28px; 
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
<div class="bg-img">
<div class="header">
 <div class="top-container">
  <div class="topnav">
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
<span style="font-family:Dancing Script;font-weight:bold;font-size:43px;cursor:pointer;position:relative;top:25;left:40;color:#ffffff;" onclick="openNav()">&#9776;</span><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;cursor:pointer;position:absolute;top:-15px;left:90;color:#ffffff;"><a href="home.php" style="text-decoration:none;color:#ffffff"> Blossoms at Backyard</a></p>
  <div class="search-container">
      <input type="text" name="search" placeholder="Search.." id="myInput" onkeyup="myFunction();showSuggestions()" onmouseleave="hideSuggestions()"> <button type="submit" class="button" onmouseenter="showSuggestions()" onmouseleave="hideSuggestions()" style="cursor:pointer"><i class="fa fa-angle-down"></i></button>
    <ul id="myUL" onmouseenter="showSuggestions()" onmouseleave="hideSuggestions()">
	  <li><a href="anthurium.php">Anthurium</a></li>
	  <li><a href="applegourd.php">Apple gourd</a></li>
      <li><a href="arecanut.php">Arecanut</a></li>
      <li><a href="aromacrop.php">Aromatic Crops</a></li>
	  <li><a href="bananas.php">Banana</a></li>
	  <li><a href="ber.php">Thai apple(Ber)</a></li>
	  <li><a href="betel.php">Betelvine</a></li>
	  <li><a href="bittergourd.php">Bitter gourd</a></li>
	  <li><a href="blacknight.php">Blacknight Shade</a></li>
	  <li><a href="blackpep.php">Black Pepper</a></li>
	  <li><a href="bonsai.php">Bonsai</a></li>
	  <li><a href="bottlegourd.php">Bottle gourd</a></li>
	  <li><a href="brahmi.php">Brahmi</a></li>
	  <li><a href="brinjal.php">Eggplant(Brinjal)</a></li>
	  <li><a href="capcicum.php">Capcicum</a></li>
	  <li><a href="cardamom.php">Cardamom</a></li>
	  <li><a href="carnation.php">Carnation</a></li>
      <li><a href="cashew.php">Cashew</a></li>      
	  <li><a href="chilli.php">Chilli</a></li>
	  <li><a href="chrysantheum.php">Chrysantheum</a></li>
      <li><a href="citronella.php">Citronella</a></li>
	  <li><a href="cocoa.php">Cocoa</a></li>
	  <li><a href="coffee.php">Coffee</a></li>
      <li><a href="coriander.php">Coriander</a></li>
	  <li><a href="crossandra.php">Crossandra</a></li>
	  <li><a href="cucumber.php">Cucumber</a></li>
	  <li><a href="cutchrysantheum.php">Cut Chrysantheum</a></li>
	  <li><a href="cutrose.php">Cut Rose</a></li>
      <li><a href="dendrobium.php">Dendrobium Orchids</a></li>
	  <li><a href="digitalis.php">Digitalis</a></li>
	  <li><a href="features.php">Garden Features</a></li>
	  <li><a href="fenugreek.php">Fenugreek</a></li>
	  <li><a href="flowerarr.php">Flower Arrangement</a></li>
	  <li><a href="flowercrop.php">Flower Crops</a></li>
	  <li><a href="fruitcrop.php">Fruit Crops</a></li>
	  <li><a href="gardenwaste.php">Garden Waste</a></li>
	  <li><a href="ginger.php">Ginger</a></li>
      <li><a href="grapes.php">Grapes</a></li>
	  <li><a href="guava.php">Guava</a></li>
	  <li><a href="gymnema.php">Gymnema</a></li>
      <li><a href="hangcon.php">Hanging Containers</a></li>
	  <li><a href="jackfruit.php">Jack Fruit</a></li>
	  <li><a href="kitchengar.php">Kitchen Garden</a></li>
	  <li><a href="ladyfinger.php">Lady Finger</a></li>
	  <li><a href="landscape.php">Landscaping and Decor</a></li>
	  <li><a href="lawnmak.php">Lawn Making</a></li>
	  <li><a href="lemongrass.php">Lemongrass</a></li>
      <li><a href="lilium.php">Lilium</a></li>      
	  <li><a href="lime.php">Lime</a></li>
	  <li><a href="mango.php">Mango</a></li>
	  <li><a href="marigold.php">Marigold</a></li>
      <li><a href="medcrop.php">Medicinal Crops</a></li>
	  <li><a href="mint.php">Mint</a></li>
      <li><a href="nerium.php">Nerium</a></li>      
      <li><a href="noni.php">Noni</a></li>
	  <li><a href="nurseryman.php">Nursery Management</a></li>
	  <li><a href="oilpalm.php">Oil Palm</a></li>
	  <li><a href="paparika.php">Paprika</a></li>
	  <li><a href="papaya.php">Papaya</a></li>
      <li><a href="patchouli.php">Patchouli</a></li>      
      <li><a href="pineapple.php">Pineapple</a></li>      
	  <li><a href="plantcomp.php">Plant Components</a></li>
      <li><a href="plantncrop.php">Plantation Crops</a></li>      
	  <li><a href="pomegranate.php">Pomegranate</a></li>
	  <li><a href="principles.php">Garden Principles</a></li>
      <li><a href="pumpkin.php">Pumpkin</a></li>
      <li><a href="pyrethrum.php">Pyrethrum</a></li>      
      <li><a href="ribbedgourd.php">Ribbed gourd</a></li>      
	  <li><a href="roofgarden.php">Roof Garden</a></li>
	  <li><a href="rose.php">Rose</a></li>
	  <li><a href="rosemary.php">Rosemary</a></li>
      <li><a href="rubber.php">Rubber</a></li>
	  <li><a href="sapota.php">Sapota</a></li>
	  <li><a href="sappanwood.php">Sappan Wood</a></li>
	  <li><a href="spicecrop.php">Spice Crops</a></li>
	  <li><a href="sweetorange.php">Sweet Orange</a></li>
	  <li><a href="tea.php">Tea</a></li>
      <li><a href="terrarium.php">Terrarium</a></li>      
	  <li><a href="tomato.php">Tomato</a></li>
      <li><a href="tuberrose.php">Tubberrose</a></li>
      <li><a href="turmeric.php">Turmeric</a></li>      
	  <li><a href="types.php">Types of Garden</a></li>
      <li><a href="vallarai.php">Vallarai</a></li>
	  <li><a href="vegcrop.php">Vegetable Crops</a></li>
	  <li><a href="vergarden.php">Verticle Garden</a></li>
	  <li><a href="vetiver.php">Vetiver</a></li>        
    </ul>
  </div>
  </div>
</div>
<div class="slideshow-container">
<a href="https://www.amazon.in/Go-Garden-Fertilizer-Gardening-Purpose/dp/B07S8LRGDS/ref=sr_1_5?keywords=go+garden+fertilizer&qid=1580640478&sr=8-5">
  <img src="fer1.png" style="width:20%;position:absolute;left:930px;top:50px">
</a>
<div class="mySlides">
<a href="https://www.amazon.in/Go-Garden-Fertilizer-Gardening-Purpose/dp/B07S8LRGDS/ref=sr_1_5?keywords=go+garden+fertilizer&qid=1580640478&sr=8-5">
  <img src="fer3.png" style="width:20%;position:absolute;left:930px;top:50px">
</a>
</div>
<a href="https://www.amazon.in/TrustBasket-Organic-Vermicompost-Fertilizer-Manure/dp/B07PRXV7MJ/ref=sr_1_1_sspa?keywords=vermicompost&qid=1581736542&sr=8-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEzVjE5WFNXMEIxUTI4JmVuY3J5cHRlZElkPUEwMDU5NDI4MVRRTzc3MUoxUkZSViZlbmNyeXB0ZWRBZElkPUEwNTE5MTYyM0M2WU82UUdYT1pZMSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=">
  <img src="ad11.png" style="width:20%;position:absolute;right:930px;top:50px">
</a>
<div class="mySlides">
<a href="https://www.amazon.in/TrustBasket-Organic-Vermicompost-Fertilizer-Manure/dp/B07PRXV7MJ/ref=sr_1_1_sspa?keywords=vermicompost&qid=1581736542&sr=8-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEzVjE5WFNXMEIxUTI4JmVuY3J5cHRlZElkPUEwMDU5NDI4MVRRTzc3MUoxUkZSViZlbmNyeXB0ZWRBZElkPUEwNTE5MTYyM0M2WU82UUdYT1pZMSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=">
  <img src="ad2.png" style="width:20%;position:absolute;right:930px;top:50px">
</a>
</div>
<a href="https://www.amazon.in/BLOOMBUDDY-Organic-Growth-Booster-3kg/dp/B07WS5BVQG/ref=pd_rhf_se_s_sspa_dk_rhf_search_pt_sub_0_3/258-7562406-9600757?_encoding=UTF8&pd_rd_i=B07WS5BVQG&pd_rd_r=5371ed8e-c048-45ce-ab12-1adc478b98b9&pd_rd_w=dI1lM&pd_rd_wg=nHt35&pf_rd_p=aa112f2c-249f-4b81-9da3-bb82bdbadc17&pf_rd_r=JYCFVFX0W6PZRTEGWVHK&psc=1&refRID=JYCFVFX0W6PZRTEGWVHK&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFYVDRQRzlGMEdTRDImZW5jcnlwdGVkSWQ9QTA3NDYzMjYxQlQ3MzcyNVZDUFlEJmVuY3J5cHRlZEFkSWQ9QTAyODcyNDIyOVdYTjNHMEVXQjFNJndpZGdldE5hbWU9c3BfcmhmX3NlYXJjaCZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=">
  <img src="ad12.png" style="width:20%;position:absolute;left:950px;top:650px">
</a>
<div class="mySlides">
<a href="https://www.amazon.in/BLOOMBUDDY-Organic-Growth-Booster-3kg/dp/B07WS5BVQG/ref=pd_rhf_se_s_sspa_dk_rhf_search_pt_sub_0_3/258-7562406-9600757?_encoding=UTF8&pd_rd_i=B07WS5BVQG&pd_rd_r=5371ed8e-c048-45ce-ab12-1adc478b98b9&pd_rd_w=dI1lM&pd_rd_wg=nHt35&pf_rd_p=aa112f2c-249f-4b81-9da3-bb82bdbadc17&pf_rd_r=JYCFVFX0W6PZRTEGWVHK&psc=1&refRID=JYCFVFX0W6PZRTEGWVHK&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFYVDRQRzlGMEdTRDImZW5jcnlwdGVkSWQ9QTA3NDYzMjYxQlQ3MzcyNVZDUFlEJmVuY3J5cHRlZEFkSWQ9QTAyODcyNDIyOVdYTjNHMEVXQjFNJndpZGdldE5hbWU9c3BfcmhmX3NlYXJjaCZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=">
  <img src="ad3.png" style="width:20%;position:absolute;left:950px;top:650px">
</a>
</div>
<a href="https://www.amazon.in/Trust-Enriched-Organic-Potting-Fertilizer/dp/B07L68TK8D/ref=sr_1_1_sspa?crid=17V0LFO1HBFUT&keywords=earth+magic+potting+soil+5kg&qid=1582540980&sprefix=earth+magic%2Caps%2C346&sr=8-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExRVYzMEE2N1RLU0hXJmVuY3J5cHRlZElkPUEwMzQ5MDIzM1ZZVDNSU082QzFDNSZlbmNyeXB0ZWRBZElkPUEwMDQ0ODMzMlBaS0tLRTBMU0QxRCZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=">
  <img src="ad4.png" style="width:22%;position:absolute;right:930px;top:500px">
</a>
<div class="mySlides">
<a href="https://www.amazon.in/Trust-Enriched-Organic-Potting-Fertilizer/dp/B07L68TK8D/ref=sr_1_1_sspa?crid=17V0LFO1HBFUT&keywords=earth+magic+potting+soil+5kg&qid=1582540980&sprefix=earth+magic%2Caps%2C346&sr=8-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExRVYzMEE2N1RLU0hXJmVuY3J5cHRlZElkPUEwMzQ5MDIzM1ZZVDNSU082QzFDNSZlbmNyeXB0ZWRBZElkPUEwMDQ0ODMzMlBaS0tLRTBMU0QxRCZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=">
  <img src="ad5.png" style="width:22%;position:absolute;right:930px;top:500px">
</a>
</div>
</div>
<div class="container" style="left:280px">
<H1 style="font-family:Merienda One;font-size:30px;left:280px">Who are we?</H1>
<p style="font-family:Merienda One;" align="justify">We here at Blossoms at Backyard are here to help you explore the beauty of horticulture.We are here to help you get familier with your garden. We believe in everything organic and hence we believe in growing it in the backyard.
We are here to unveil the fun side of the horticulture. Our only motive with this platform is to share our knowledge
about gardening and to bring together the ones who are seeking the same.</p>
<H1 style="font-family:Merienda One;font-size:30px;left:280px">What is Horticulture?</H1>
<p style="font-family:Merienda One;" align="justify">Horticulture has been defined as the agriculture of plants, mainly for food, materials, comfort and beauty for decoration.
It is the growing of flowers, fruits and vegetables, and of plants for ornament and fancy.It also includes plant conservation,
 landscape restoration, soil management, landscape and garden design, construction and maintenance, and arboriculture.
 In contrast to agriculture, horticulture does not include large-scale crop production or animal husbandry.</p>
<p style="font-family:Merienda One;" align="justify">Horticulture includes wide range of crops namely, fruits, vegetables, tuber crops, flowers, medicinal and aromatic plants, 
mushrooms,plantation crops and spices etc. These crops are grown in varied agro-climatic conditions of temperate, sub
tropical and arid zones.</p>
<p style="font-family:Merienda One;" align="justify">Horticulture includes a wide range of tools and technologies. It is a scientific methodology of cultivation, to make high
crops yeild the desired quality. These scientific methods could be as simple as using tractors for cultivation to deriving
fertilizer mixing complex chemicals.</p>
<H1 style="font-family:Merienda One;font-size:30px;left:280px">Why is Horticulture important?</H1>
<ul style="font-family:Merienda One;">
  <li>As compared to field crops, horticulture crops will give more returns per unit area.</li>
  <li>Horticulture crops are very important as their nutritional status is high.<br> Particularly fruits and vegetables give a high amount of vitamins and minerals to us.</li>
  <li>Horticulture is very important as it beautifies the surrounding.</li>
  <li>Horticulture crops are more suitable for small and marginal farmers.</li>
  <li>Horticulture plants improve the environment by reducing pollution,conserves soil and water<br>
        and develop the socio-economic status of the farmer.</li>
</ul>  
</div>
<H1 style="font-family:Merienda One;font-size:30px;left:280px;position:relative;top:20px;">Horticulture Crops.</H1>
<p style="font-family:Merienda One;position:relative;left:280px;top:10px">Below are some horticulture crops.</p>
<div class="category-container">
<div class="img-container" style="top:20px;left:20px;height:180px;width:260">
   <a  href="flowercrop.php">
 <img src="fl.jpeg" alt="flower" class="image" style="height:165px;width:250px">
  <div class="overlay" style="height:165px;width:250px">
    <div class="text" style="cursor:pointer">Flower crop</div>
  </div></a>
</div>
<div class="img-container" style="position:relative;top:-160px;left:310px;height:180px;width:260">
   <a  href="vegcrop.php">
 <img src="4.jpg" alt="flower" class="image" style="height:165px;width:250px" >
  <div class="overlay" style="height:165px;width:250px">
    <div class="text" style="cursor:pointer">Vegetable crop</div>
  </div></a>
</div>
<div class="img-container" style="top:-340px;left:600px;height:180px;width:260">
   <a  href="fruitcrop.php">
 <img src="fr.jpeg" alt="flower" class="image" style="height:165px;width:250px">
  <div class="overlay" style="height:165px;width:250px">
    <div class="text" style="cursor:pointer">Fruit crop</div>
  </div></a>
</div>
<div class="img-container" style="top:-310px;left:20px;height:180px;width:260">
   <a  href="plantncrop.php">
 <img src="coffee.jpeg" alt="flower" class="image" style="height:165px;width:250px" >
  <div class="overlay" style="height:165px;width:250px">
    <div class="text" style="cursor:pointer">Plantation crop</div>
  </div></a>
</div>
<div class="img-container" style="top:-490px;left:310px;height:180px;width:260">
   <a  href="spicecrop.php">
 <img src="dalchinii.jpeg" alt="flower" class="image" style="height:165px;width:250px">
  <div class="overlay" style="height:165px;width:250px">
    <div class="text" style="cursor:pointer">Spice crop</div>
  </div></a>
</div>
<div class="img-container" style="top:-670px;left:600px;height:180px;width:260">
   <a  href="medcrop.php">
 <img src="tulsi.jpg" alt="flower" class="image" style="height:165px;width:250px">
  <div class="overlay" style="height:165px;width:250px">
    <div class="text" style="cursor:pointer">Medicinal crop</div>
  </div></a>
</div>
<div class="img-container" style="top:-640px;left:190px;height:180px;width:260">
   <a  href="aromacrop.php">
 <img src="mint.jpg" alt="flower" class="image" style="height:165px;width:250px">
  <div class="overlay" style="height:165px;width:250px">
    <div class="text" style="cursor:pointer">Aromatic crop</div>
  </div></a>
</div>
<div class="img-container" style="top:-820px;left:460px;height:180px;width:260">
   <a  href="landscape.php">
 <img src="landscape.jpg" alt="flower" class="image" style="height:165px;width:250px">
  <div class="overlay" style="height:165px;width:250px">
    <div class="text" style="cursor:pointer">Lanscaping and Decor</div>
  </div></a>
</div>
</div>
</div>
<div class="footer">
<div class="container" style="width:1000px;height:120px;font-family:Merienda One;font-size:48px;background-color:white;position:relative;top:-100px;left:40px"><img src="logo.jpeg" style="width:10%"><p style="font-family:Dancing Script;font-weight:bold;font-size:43px;position:relative;top:-120;left:90px;color:Black;">Blossoms at Backyard</p><a href="https://www.facebook.com/blossomsatbackyard" style="background-color:white;position:relative;left:480px;top:-205"><i class="fa fa-facebook-square" style="font-size:35px;color:#0F19B6"></i></a><a href="https://www.instagram.com/blossomsatbackyard/" style="background-color:white;position:relative;left:500px;top:-205"><i class="fa fa-instagram" style="font-size:35px;color:#9E0562"></i></a></div>
<div><hr style="width:1200px;position:relative;top:-140px;left:0px"></hr></div>
<div class="container" style="width:500px;height:20px;font-family:Candara Light;font-size:16px;background-color:white;position:relative;top:-145px;left:880px"><a href="Terms.php" style="color:#0A8334">Terms of service</a>&nbsp &nbsp &nbsp <a href="directory.php" style="color:#0A8334">Directory</a>&nbsp &nbsp &nbsp <a href="FAQ.php" style="color:#0A8334">FAQ</a>&nbsp &nbsp &nbsp <a href="events.php" style="color:#0A8334">Events</a>
<div class="container" style="width:350px;height:200px;font-family:Candara Light;font-size:16px;background-color:white;position:relative;top:-30px;left:-750px"><p style="font-weight:bold;font-size:20px">Get in touch with us<br>Contact us at:</p><p>Shivani Awatade<br>Sushmita Paunikar<br>G.S.College of Commerce and Economics, Nagpur<br>Phone No. +07172258700<br>Email us at: blossomsatbackyrd@gmail.com<br>©Blossoms at Backyard 2020</p></div>
</div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
function showSuggestions() {
	document.getElementById("myUL").style.height="120px";
}
function hideSuggestions() {
	document.getElementById("myUL").style.height="0";
}
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
//slide show
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
 
  slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides, 300); 
}
// scroll to top 
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
}
</script>
</body>
</html>