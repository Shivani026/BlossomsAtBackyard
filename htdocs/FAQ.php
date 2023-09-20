<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Blossoms at Backyard : Home :FAQ</title>
</head>
<style>
body { 
margin:0; 
overflow-x:hidden;
overflow-y:auto;
} 
.bg-img {
  background-image: url("bg22.jpeg");
  background-repeat: repeat-y;
  background-size: cover;
  position: relative;
  height:1020px;
}
hr {
  display: block;
  margin:0;
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
  text-decoration: none;
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
</style>
<body>
<div class="bg-img">
<hr style="border-width:45px;border-style: solid;border-color:rgba(0,0,0,0);"> 
<div class="top-container" >
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
<hr style="border-width:20px; border-color:#53302D;border-style: solid;"><div class="hr-container" style="position:relative;left:300px;top:-35px"><a>Frequently asked questions</a></div></hr>
<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Fruit Crops</button>
<div class="panel">
  <ol>
  <li style="font-weight:bold">What are the mango varieties suitable for processing?</li>
  <p>Alphonso, Banganapalli, Totapuri  </p>
  <li style="font-weight:bold"> Name some mango varieties suited for export?</li>
  <p>Alphonso, Banganapalli, Sendura</p>
  <li style="font-weight:bold"> Can I use mango seedlings for commercial planting?</li>
  <p>No. Grafts should be used for commercial planting.</p>
  <li style="font-weight:bold">How can I induce flowering in mango?</li>
  <p>During February 0.5% Urea (5 g/lit.) or 1% Potassium Nitrate (10g/lit.) may be sprayed to induce flowering in mango.</p>
  <li style="font-weight:bold">Suggest some alternate methods for biennial bearing.</li>
  <p>i.Plant regular bearing varieties like Banglora, PKM 1, PKM 2.<br>
     ii.Follow regular cultural practices like manuring, pruning, watering and plant protection measures.</p>
  <li style="font-weight:bold">What are the culinary varieties in Banana?</li>
  <p>Monthan, Nendran, Vayal vazhai, Ash Monthan and Chakkia.</p>
  <li style="font-weight:bold">Name some banana varieties suitable for hilly areas.</li>
  <p>Virupakshi, Sirumalai and Namaran, Red Banana, Manoranjitham (Santhana vazhai) and Ladan.</p>
  <li style="font-weight:bold">What is meant by sucker treatment in banana?</li>
  <p align="justify">Select sword suckers of 1.5 to 2.0 kg weight, free from diseases and nematodes.
  Trim the roots and decayed portion of the corm, cut the pseudostem leaving 20 cm from the corm and grade the suckers to size. To avoid wilt disease, infected portions of the corn may be pared, dipped for 5 minutes in 0.1% Emisan solution (1 g in 1 lit of water) in Rasthali, Monthan, Neyvannan, Virupakshi and other wilt susceptible varieties.  
  Pralinage with 40 g of Carbofuran 3 G granules per sucker.  
  (Dip the corm in slurry solution of 4 parts clay plus 5 parts water and sprinkle Carbofuran to control nematodes). Alternatively, dip the corm with 0.75% Monocrotophos, shade dry for atleast 24 hours and plant.</p>
  <li style="font-weight:bold">What is the use of bunch covering in banana?</li>
  <p>Uniform bunch maturity, free from pest and disease infection, bruises and black spots.</p>
  <li style="font-weight:bold"> What is meant by kottavazhai in banana and which variety is more susceptible for that disease?</li>
  <p align="justify">Kottavazhai is seediness in banana especially in poovan varieties. This is can be controlled by spraying 2,4 – D at the rate of 25 ppm within 20 days after opening of last hand (1 g/40 lit/200 bunches) or 1.2 g of Sodium salt of 2,4 – D dissolved in 40 lit of water for 200 bunches.</p>
  <li style="font-weight:bold"> How can I get more yield in acid lime?</li>
  <p align="justify">Fruit set in acid lime can be increased by 2,4,D @ 20 ppm during flowering. Similarly the fruit retention can be achieved by spraying 2,4,D @ 20 ppm / NAA 30 ppm after fruit set (marble size).</p>
  <li style="font-weight:bold">What is the method of training adopted for growing grapes?</li>
  <p>Pandal system</p>
  <li style="font-weight:bold">Suggest some of the methods to increase grape yield and quality.</li>
  <p>Dip the clusters in solution containing Brassinosteroid 0.5 ppm and GA3 25 ppm at 10 -12 days after fruit set.</p>
  <li style="font-weight:bold"> How can I increase the berry size in grapes?</li>
  <p align="justify">Dip the clusters of Thomson seedless and other seedless varieties at calyptra fall with 25 ppm GA (25 mg/lit) and repeat again at pepper stage to increase the size of berries.</p>
  <li style="font-weight:bold">How to prepare Bordeaux mixture?</li>
  <p align="justify">A quantity of 400 g of Copper sulphate should be dissolved in 20 lit of water and 400 g of lime in another 20 lit of water separately. The copper sulphate solution should be added to the lime solution constantly stirring the mixture.  Earthern or wooden vessels and plastic containers alone should be used and metallic containers should not be used.  To find out whether the mixture is in correct proportion, a polished knife should be dipped in the mixture for one minute and taken out.  If there is reddish brown deposit of copper, additional quantity of lime should be added till there is no deposit in the knife.</p>
  <li style="font-weight:bold">How to control bronzing of leaves in guava?</li>
  <p align="justify">Combined spraying of ZnSO4, MgSO4, and MnSO4 @ 0.5 % and CuSO4 and FeSO4 @ 0.25 % + Teepol @ 1 ml per 5 lit. of solution on a new flush, one month of 1st spray, flowering and fruit set stage will control the bronzing of leaves in guava.</p>
  <li style="font-weight:bold"> What is meant by paired row planting in pineapple?</li>
  <p>The spacing between two trenches will be 90 cm. Row to row spacing in the same bed per trench will be 60 cm and plant spacing within the row is 30 cm.</p>
  <li style="font-weight:bold">How many ratoon crops can be practiced in pineapple and what is the most suitable variety amenable for ratoon crop in pineapple?</li>
  <p>Up to 5 ratoon crops can be practiced in pineapple. Mauritius is amenable for ratoon cropping.</p>
  <li style="font-weight:bold">What is the spacing adopted for high density planting in sapota?</li>
  <p>8 x 4 m</p>
  <li style="font-weight:bold">Name some rootstock materials suited for preparation of sapota grafts?</li>
  <p>Pala and Kirni</p>
  <li style="font-weight:bold"> I have only one well maintained sapota tree of PKM-2 variety. This is not at all or shows poor bearing phenomenon. Why?</li>
  <p>This is mainly due to pollination problem. Hence plant atleast 4-5 trees for better pollination and fruit set.</p>
  <li style="font-weight:bold"> How can I artificially ripe the sapota fruits?</li>
  <p>Artificial ripening can be done by keeping 5000 ppm Ethrel + 10 g of NaOH pellets in a beaker in air tight chamber. the fruits will be ripened with in 1 or 2 days.</p>
  <li style="font-weight:bold">What are the table purpose papaya varieties?</li>
  <p>CO 3 and CO 7</p>
  <li style="font-weight:bold">Name some dual purpose (papain + table purpose) varieties of papaya.</li>
  <p>CO 2, CO 5 and CO 6</p>
  <li style="font-weight:bold"> What is meant by papain?</li>
  <p>The latex obtained from immature (75 to 90 days old) fruits of papaya contains proteolytic enzymes. 
  This is called papain.</p>
  <li style="font-weight:bold"> What is the use of papain?</li>
  <p>Meat tenderization, tooty fruity preparations.</p>
  <li style="font-weight:bold">How much of papin can be obtained from 1 hectare?</li>
  <p>600 – 800 kg of crude papin</p>
  <li style="font-weight:bold">Whether the fruit can be selled in the market after papain extraction?</li>
  <p>Yes</p>
  <li style="font-weight:bold">How can I control fruit borer in pomegranate?</li>
  <p>i. Bag the fruits with polythene covers during flowering period to prevent egg-laying<br>
	ii. Spray 2 ml/lit of Endosulfon or Malathion<br>
	iii. Spray neem oil 3 % or NSKE 5 % at the time of butterfly activity<br></p>
  <li style="font-weight:bold">I am constantly / daily foraging my cows by tying over the trunks of Jack tree.  Is it a right practice?</li>
  <p>No. While doing so the fruiting buds are damaged and yield will be very lesser.</p>
  <li style="font-weight:bold">Can I use seedling material of ber plants for commercial / large scale planting?</li>
  <p>No. Budded plants can be used for early bearing period.</p>
  <li style="font-weight:bold"> Fruit fly is the big menace for me? How can I control them?</li>
  <p>i. Destroy the infested fruits<br>
	ii. Dig the soil under tree canopy to destroy pupae and incorporate Lindane 1.3 % dust @ 30 g/tree.<br>
	iii. Spray Malathion or Endosulfon or Quinolphos 2 ml/lit<br></p>
  <li style="font-weight:bold">What kind of fruit trees can I choose for dry land areas?</li>
  <p>Aonla, Sapota and Ber</p>
  <li style="font-weight:bold">What are the rootstocks suited for apple grafting?</li>
  <p>M 778 and M 779</p>
  <li style="font-weight:bold">How can I control wooly aphis problem in apple?</li>
  <p>Use resistant rootstocks viz., M 778, 779, MM 104, MM 110, MM 112, MM 113, MM 114. Spray Methyl dematon 25 EC at the rate of 4 ml/li.</p>
  <li style="font-weight:bold">How to control lichens problem in apple orchards?</li>
  <p>Spray quick lime 1 kg/20 lit of water after pruning to control lichens growth.</p>
  <li style="font-weight:bold">Name the suitable pollinator for plum.</li>
  <p>Hale</p>
  <li style="font-weight:bold"> What is the method suitable for growing passion fruits?</li>
  <p>Pandal system</p>
  <li style="font-weight:bold">Where I can get the recent technologies and planting materials of fruit crops?</li>
  <p>
  <table style="width:500px;height:100px">
  <tr>
    <td>
	<p>Professor and Head,<br>
	Department of Fruit Crops<br>
	Horticulture College and Research Institute<br>
	Tamil Nadu Agricultural University<br>
	Coimbatore – 641 003<br>
	Phone: 0422 – 6611270<br>
	Email: fruits@tnau.ac.in</p>
    </td>
	<td>
	<p>Professor and Head,<br>
	Department of Fruit Crops<br>
	Horticulture College and Research Institute<br>
	Tamil Nadu Agricultural University<br>
	Periyakulam – 625 604<br>
	Phone & Fax:  (04546) 231726<br>
	</p>
	</td>
  </tr>
  </p>
  </table>
  </ol>
</div>
<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Vegetable Crops</button>
	<div class="panel">
	<ol>
	<li style="font-weight:bold"> How can I control fruit borer in Tomato?</li>
	<p align="justify">Helicoverpa armigera and Spodoptera litura (common for both)
	i. Grow simultaneously 40 days old American tall marigold and 25 days old tomato seedlings @ 1:16 rows.<br>
	ii. Set up pheromone traps @ 12/ha.<br>
	iii. Collection and destruction of damaged fruits and grown up caterpillars.<br>
	iv. Spray endosulfan 35EC 2 ml/lit or carbaryl 50WP 2 g/lit or Bacillus thuringiensis 2g/lit or quinalphos 2.5 ml/lit.<br>
	v. Release Trichogramma chilonis @ 50000/ha/release coinciding with flowering time and based on ETL.<br>
	For Helicoverpa armigera<br>
	Helicoverpa armigera NPV 1.5 x 1012 POBs/ha<br>
	For Spodoptera litura<br>
	Spodoptera litura NPV 1.5 x 1012 POBs/ha<br>
	Provide poison bait with carbaryl 1.25 kg, rice bran 12.5 kg, jaggery 1.25 kg and water 7.5 lit/ha.</p>
	<li style="font-weight:bold">Suggest some ways to control spotted wilt virus in tomato.</li>
	<p align="justify">Carbofuran 3G 1kg. a.i./ha in nursery at sowing and second application at 1.25 kg a.i./ha 10 days after transplanting in mainfield and 3 sprays of Endosulphan 35 EC 1.5 ml/lit @ 25, 40, 55 days after transplanting.</p>
	<li style="font-weight:bold">What is the seed rate for hybrid tomato?</li>
	<p align="justify">150 g/ha</p>
	<li style="font-weight:bold">Is there any alternate to boost the yield in brinjal?</li>
	<p align="justify">Spray 2 ppm (1 ml in 500 lit) triacontanol + Sodium borate or Borax 35 mg/lit of water 15 days after transplanting and at the time of full bloom to increase the yield.</p>
	<li style="font-weight:bold"> In my Brinjal field one or two plants are having very small leaves. What is the problem and remedy for that?</li>
	<p align="justify">It is mainly due to virus disease problem called ‘little leaf of brinjal’. This can be controlled by removing the affected plants in the early stage and spray Methyl dematon 25 EC 2 ml/lit to control the vector.</p>
	<li style="font-weight:bold"> Certain plants in my bhendi field show yellow coloured leaves? What is the problem and how to rectify that?</li>
	<p align="justify">This is mainly due to the virus infection. The virus mainly transmitted through white flies. The vectors can be controlled by spraying 2 ml/lit of Monocrotophos.</p>
	<li style="font-weight:bold">How can I increase the quality of chilli fruits?</li>
	<p align="justify">Application of potassium in the form of Potassium Sulphate will increase the quality in chilli crop.</p>
	<li style="font-weight:bold">A severe flower drop was noticed in chilli. Howe to control that?</li>
	<p align="justify">Spray NAA 10 ppm (10 mg/lit of water) on 60 and 90 days after planting to increase the fruit set</p>
	<li style="font-weight:bold">Can I grow capsicum under commercial cultivation?</li>
	<p align="justify">Under shade nets the capsicum is grown on commercials scale.</p>
	<li style="font-weight:bold"> Can I grow paprika under open condition?</li>
	<p align="justify">Paprika cannot be grown under open condition high temperature conditions/ belts. Hence it is best grown under coconut shade/under shade net conditions.</p>
	<li style="font-weight:bold">Can I use copper fungicides to cucurbitaceous vegetables? If not, why?</li>
	<p align="justify">DDT, Lindane 1.3 % dust, copper and sulphur dust should not be recommended to cucurbitaceous vegetables, since they are phytotoxic in nature.</p>
	<li style="font-weight:bold">Guar gum is extracted from which plant?</li>
	<p align="justify">Cluster beans</p>
	<li style="font-weight:bold">Name some dolichous bean varieties suitable for growing in pandals.</li>
	<p align="justify">CO-1, CO-2, CO-3, CO-4,   CO-5 and Pusa Early Prolific</p>
	<li style="font-weight:bold">Name some varieties in annual moringa?</li>
	<p align="justify">PKM-1, PKM-2 and KM-1</p>
	<li style="font-weight:bold">What is the seed rate required for raising 1 ha of annual moringa</li>
	<p align="justify">500 grams</p>
	<li style="font-weight:bold">Hairy caterpillar is a big problem for me in moringa crop. How to control that?</li>
	<p align="justify">i. Use flame torch when the caterpillar settle at the trunk<br>
	ii. Spray Chloripyriphos or Quinalphos 2 ml/lit.</p>
	<li style="font-weight:bold"> How many number of fruits can be harvested in a tree in one year?</li>
	<p align="justify">220 – 225</p>
	<li style="font-weight:bold">How to control diamond back moth in cabbage?</li>
	<p align="justify">i. Grow mustard as intercrop as 20:1 ratio to attract diamond back moths for oviposition.<br>
	ii. Periodically spray the mustard crop with insecticide to avoid the dispersal of the larvae.<br>
	iii. Install pheromone traps at 12/ha.<br>
	iv. Spray cartap hydrochloride 1 g/lit or Bacillus thuringiensis 2 g/lit at primordial stage (ETL 2 larvae/plant)<br>
	v. Spray NSKE 5 % after primordial stage.<br>
	vi. Release parasite Diadegma semiclausum at 50,000/ha, 60 days after planting.</p>
	<li style="font-weight:bold">Certain plants roots are forming club shaped appearance? What is the reason and how to control that?</li>
	<p align="justify">Seed treatment at 10 g/ kg of seeds or soil application @ 2.5 kg/ha or seedling dip in solution of 5g/ litre with Pseudomonas fluorescens. Dip the seedlings in Carbendazim solution (1 – 2 g/lit) for 2 minutes.  Drench the soil around the seedlings in the main field with Carbendazim @ 1 g/lit of water.  Follow crop rotation.  Crucifers should be avoided for three years.</p>
	<li style="font-weight:bold">What is meant by whip tail of cauliflower?</li>
	<p align="justify">This is caused by Boron deficiency. It appears as water soaked areas and later changes into rusty brown. Spray one kg of Borax in 500 lit of water 30 days after planting.</p>
	<li style="font-weight:bold">Some plants show smaller curds. What is the problem?</li>
	<p align="justify">The term buttoning is applied to the development of small curds or buttons. The plants do not develop normally and leaves remain small and do not cover the developing curds. Deficiency of Nitrogen and planting the early varieties late may cause these symptoms. Avoid transplanting aged seedlings.</p>
	<li style="font-weight:bold">I can notice certain cauliflower plants without production of curds? Why?</li>
	<p align="justify">Blind-cauliflower plants are those without terminal buds. The leaves are large, thick, leathery and dark green. It is due to the prevalence of low temperature when the plants are young or due to damage to the terminal bud during handling the plants or due to injury by pests.</p>
	<li style="font-weight:bold"> Name some carrot varieties suited for plain region.</li>
	<p align="justify">India Gold, Pusa Kesar and Half Long</p>
	<li style="font-weight:bold">What is the ideal season for planting of carrot in plains?</li>
	<p align="justify">August</p>
	<li style="font-weight:bold">Suggest some of the radish varieties suited for growing in plain region.</li>
	<p align="justify">Co 1, Pusa Rashmi, Pusa Chetki, Pusa Desi, Japanese white and Arka Nishant</p>
	<li style="font-weight:bold"> When I cut the radish a pronounced spongy and pithy region is notices. Why?</li>
	<p align="justify">Harvesting should be done at proper time. The delay in harvest leads to pithyness in radish.</p>
	<li style="font-weight:bold">What is the compound responsible for pungent flavour in radish?</li>
	<p align="justify">Isothiocynate</p>
	<li style="font-weight:bold">What is the main intercultural operation to be followed in beet root?</li>
	<p align="justify">Thinning. One seed of beet root give 2 – 3 seedlings. This has to be thinned 10 – 15 days after planting to maintain the required plant population.</p>
	<li style="font-weight:bold">When I am cultivating potato, the cost of tuber itself occupies 2/3rd of cost of cultivation. Is there any alternative to reduce the cost of tubers?</li>
	<p align="justify">Potato can also be propagated through true potato seeds. To raise one hectare of land 100 – 150 g of seeds are sufficient. Thereby the costs of inputs are greatly reduced.</p>
	<li style="font-weight:bold">What is the plant population to be maintained in sweet potato?</li>
	<p align="justify">By adopting 20 cm spacing, in one hectare 80,000 plants can be planted</p>
	<li style="font-weight:bold"> Sweet potato harvested from my filed shows warts, punched / spots symptoms and market preference is less. What is the reason and suggest some ways for controlling them?</li>
	<p align="justify">This is mainly due to sweet potato weevil infestation. This can be controlled by adopting the following the control measure<br>
	i. Remove previous sweet potato crop residues and alternate host i.e., Ipomoea sp. and destroy them.<br>
	ii. Use pest free planting materials.<br>
	iii. Dip the planting material in fenthion 100 EC or fenitrothion 50 EC or monocrotophos 36 WSC @ 2 ml/lit.<br>
	iv. Rake up the soil and earth up at 50 days after planting.<br>
	v. Drench the soil with endosulfan 35 EC or fenthion 100 EC at 2 ml/lit.  Spray any one of the insecticides, if needed.<br>
	vi. Harvest the crop immediately after maturity and destroy the crop residues.</p>
	<li style="font-weight:bold"> I am having farmlands of clay soil type. Whether it is possible to cultivate tapioca in my land?</li>
	<p align="justify">No. Tapioca must be grown in red laterite or loamy soils for better tuber development.</p>
	<li style="font-weight:bold"> Can I use the foliage of tapioca as cattle feed?</li>
	<p align="justify">Yes. While using, the terminal portions or buds has to be nipped off or removed.</p>
	<li style="font-weight:bold">I am having sago industry. Can I use the peeled skin of tapioca tubers as cattle feed?</li>
	<p align="justify">It should be properly dried in sun and can be given to cattles. The raw or fresh skins of tubers are very toxic since it contains Hydrocyanic acid. This will be removed / denatured upon drying under open sunlight. After proper treatment it can be fed to cattles.</p>
	<li style="font-weight:bold">In my tapioca field most of the plants show crinkled leaves. Why?</li>
	<p align="justify">This is mainly due to cassava mosaic disease. The virus is mainly transmitted by white flies. The vectors can be controlled by spraying Methyl Dematon 3 ml/lit. While planting disease free cuttings can be selected.</p>
	<li style="font-weight:bold">How many setts are needed for planting one hectare of land?</li>
	<p align="justify">17,000</p>
	<li style="font-weight:bold">I want to plant tapioca under rainfed conditions. Is there any specialized treatment before planting of setts?</li>
	<p align="justify">For rainfed conditions, treat the setts with a mixture of potassium chloride @ 5 g/lit and micronutrients viz., ZnSo4 and FeSo4 @ 0.5 % for 20 minutes before planting.</p>
	<li style="font-weight:bold">Is there any biofertilizers treatment for tapioca setts?</li>
	<p align="justify">Dipping setts for 20 minutes in Azospirillum and Phosphobacteria each at 30 g/lit is recommended for commercial cultivation.</p>
	<li style="font-weight:bold">In my filed few patches of tapioca plants shows pale green / yellow coloured leaves. What is the corrective measure to be followed?</li>
	<p align="justify">This is mainly due to iron and micronutrient deficiency. This may be corrected by foliar spraying of 1.0 % FeSo4 + 0.5 % ZnSo4 at 60 and 90 DAP.</p>
	<li style="font-weight:bold">Due to heavy rain during cyclone season, the tapioca leaves are found to be drooping and drying. How to prevent this?</li>
	<p align="justify">i. Water stagnation due to heavy rain causes tuber rot and thereby wilting of plants. Hence provide good drainage facility.<br>
	ii. Spot drenching with copper oxychloride 2.5 g/lit can be done</p>
	<li style="font-weight:bold">How can I propagate amorphophallus / elephant foot yam?</li>
	<p align="justify">The tuber is cut into small bits in such a way that each bit has atleast a small portion of the ring around each bud.  There are also projections with tender buds called “Arumbu”. These are removed before planting as they do not give vigorous growth. An ordinary sized yam gives about 6 to 8 bits for planting. The cut pieces are dipped in cow dung solution to prevent evaporation of moisture from cut surface. In some places, the small round daughter corms are also planted. </p>
	<li style="font-weight:bold">I want to cultivate peruvalli kizhangu. Suggest some suitable varieties for villupuram conditions. </li>
	<p align="justify">Co 1, Sree Roopa, Sree Keerthi, Sree Shilpa</p>
	<li style="font-weight:bold">Name some varieties of siruvalli kizhangu for villupuram conditions.</li>
	<p align="justify">Sree Latha, Sree Kala</p>
	<li style="font-weight:bold">In my onion field I can notice few white patches along with slender black insect. What is the control measure to be adopted for that?</li>
	<p align="justify">It is mainly due to thrips infestation. It can be controlled by Methyl Dematon 25 EC 1 mil/lit of water along with 0.5 ml/lit of teepol (sticking agent).</p>
	<li style="font-weight:bold">In bellary onion, how many days old seedlings can be used for transplanting in the main field?</li>
	<p align="justify">45 days</p>
	<li style="font-weight:bold">Name the variety suited for clipping type of amaranthus.</li>
	<p align="justify">Co 3</p>
	<li style="font-weight:bold">What is the amaranthus variety suitable for grain extraction?</li>
	<p align="justify">Co 4</p>
	<li style="font-weight:bold">Amaranthus seeds are very smaller and how can I use this little quantity of seed (2.5 kg) for one hectare.</li>
	<p align="justify">Broadcast the seeds evenly on the bed after mixing with 10 parts of sand. After that apply Lindane 1.3 % dust @ 10 kg/ha around the beds to control ants, termites and other burrowing insects.</p>
	<li style="font-weight:bold"> I am cultivating Co 4 amaranthus variety in 1 hectare of land. What is the approximate yield of grains?</li>
	<p align="justify"></p>
	</ol>
	</div>
<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Spices & Plantation Crops</button>
	<div class="panel">
	<ol>
	<p align="center" style="font-weight:bold;font-size:20px">Spice Crops</p>
	<li style="font-weight:bold"> I am growing curry leaf and at present that plant height is more than 2 m but the yield is very low. Is there any important operation for boosting up the yield of crop?</li>
	<p align="justify">After attaining one meter height, the terminal bud is cut off to encourage basal branching. A total of 5 – 6 branches have to be maintained for good yield in curry leaf.</p>
	<li style="font-weight:bold">My land holdings are in lower pulneys hills and I would like to grow pepper. In that condition what kind of varieties can i select for commercial planting?</li>
	<p align="justify">Panniyur 1. This performs better in less shady and lower elevation areas.</p>
	<li style="font-weight:bold">What is the variety suitable for growing in areca nut plantations?</li>
	<p align="justify">Panniyur 5 is suitable</p>
	<li style="font-weight:bold"> What kind of standards or supports can I select for cultivating pepper on commercial scale?</li>
	<p align="justify">Silver oak and Dadap can be selected</p>
	<li style="font-weight:bold">Is there any specialized technique for increasing the berry size in pepper?</li>
	<p align="justify">Spray NAA @ 40 ppm to increase the berry size.</p>
	<li style="font-weight:bold">When I sow the fresh cardamom seeds it shows poor germination percentage. Suggest some alternative methods to boost up the germination.</li>
	<p align="justify">Treat the seeds with Sulphuric acid / Hydrochloric acid for 20 minutes. Sowing the seeds in beds after washing with water will increase the percentage of germination. </p>
	<li style="font-weight:bold"> In my cardamom estate I can notice streaks of yellow to pale green patches on the leaves. How to control that?</li>
	<p align="justify">This is mainly due to Katte disease. This disease is mainly transmitted by banana aphid which can be controlled by regular spraying of Methyl Dematon 25 EC or Phosphomidon 750 ml/ha.</p>
	<li style="font-weight:bold">Poor fruit set was observed in my cardamom estate. Suggest some ways to increase the fruit/capsule set.</li>
	<p align="justify">For one hectare, keep 7 – 10 bee hives to increase the pollination and fruit set.</p>
	<li style="font-weight:bold">What is the ideal stage of harvesting in clove?</li>
	<p align="justify">The flower buds should be harvested when they are fully mature but before opening.</p>
	<li style="font-weight:bold">I want to go for commercial cultivation of nutmeg. What kind of planting materials can I select for that?</li>
	<p align="justify">Select grafted nutmeg plants for planting. If you are going for seedling materials the yield will be commenced 6 -7 years after planting. Moreover it is dioecious in nature there may be chance of occurrence of male trees. Hence select suitable graft materials for commercial planting.</p>
	<li style="font-weight:bold">Most of my nutmeg plants are male plants and female plants are poor yielder. Is there any alternative method to convert all the plants into female plants and good yielder?</li>
	<p align="justify">Top working is recommended by selecting high yielding female scion materials. By adopting this technique all the male plants can be converted to female plants.</p>
	<li style="font-weight:bold">Suggest some ways for getting higher yield in Cinnamon.</li>
	<p align="justify">Young trees are cut close to the ground to produce side shoots. By heaping the soil around the stumps, more side shoots are produced from the base of the trees. This side shoots produce higher yield in cinnamon.</p>
	<li style="font-weight:bold">During the time of harvesting lot of leafy materials are dumped as waste. Can I make use those leaves in a profitable way?</li>
	<p align="justify">The leaves are removed or stripped off from the stem and can be used for the extraction of cinnamon oil by steam distillation.</p>
	<li style="font-weight:bold"> The harvested garlic from my field shows rubbery appearance. Is there any control measure for that?</li>
	<p align="justify">Avoid excessive application of N to minimise rubberisation. N should not be applied in the form of Urea.  Use Ammonium sulphate. Spray 1500 ppm of CCC or MH on 30th day of planting.  Reduce the frequency of irrigation to minimise rubberisation. Apply 0.2 % Boron 0.1 % Sodium molybdate on 30th, 60th and 90th days after planting.</p>
	<li style="font-weight:bold"> I am sending my processed turmeric to a factory where they are extracting curcumin on a large scale. Suggest one variety with high curcumin content.</li>
	<p align="justify">Allepy Finger Turmeric (AFT)</p>
	<li style="font-weight:bold">At the time of harvest most of the turmeric rhizomes become rotted resulting in fragile powdery mass of rhizome. How to control that?</li>
	<p align="justify">i. The seed rhizomes are dipped in Carbendazim 1 g/lit and Phosalone 35 EC 2ml/lit or Monocrotophos 1.5ml/lit for controlling rhizome rot.<br>
	ii. Drench with Bordeaux mixture 1 % or 0.25 % of Copper oxychloride.<br>
	iii. Treat the rhizomes with 0.3 % copper oxy chloride for 30 minutes before storage.</p>
	<li style="font-weight:bold">How can I store the seed rhizome after the harvest?</li>
	<p align="justify">The seed rhizomes are stored after heaping under shade of tree or in well ventilated shade and covered with turmeric leaves. Some times the heap is plastered with earth mixed cow dung. It can also be stored in pits with sawdust. The pits can be covered with wooden planks with one or two holes for aeration.</p>
	<li style="font-weight:bold">Suggest some best intercrops for turmeric cultivation.</li>
	<p align="justify">Onion, Coriander and Fenugreek</p>
	<li style="font-weight:bold">What are the ideal standards suitable for vanilla cultivation?</li>
	<p align="justify">Glyricidia, Erythrina indica, Jatropha curcus, Plumeria alba, Casuarina equisitifolia and as multitier crop in coconut plantations</p>
	<li style="font-weight:bold">Whether the artificial pollination is needed in vanilla cultivation? If so mention the method of pollination?</li>
	<p align="justify">Yes. Artificial pollination is needed for getting higher yield. 
	The artificial pollination is useful in vanilla and pollination must be done on the same day as flowers opening from 4.00 am to 1.00 pm. 
	About to 10 to 20 inflorescence may be pollinated in a vine.   
	Normally 5 to 6 flowers in the lower side of inflorescence pollinated. 
	Hand pollination using a needle or a piece of pointed wood or a tooth pick to lift the hood covering the anther cap. 
	The standards are brought it in to contact with stigma.  A skilled worker can pollinate 1000 – 1500 flowers in a day.</p>
	<li style="font-weight:bold">What is the ideal stage of harvesting in vanilla?</li>
	<p align="justify">The pods are ready for harvest 6 to 9 months after planting. The matured beans change colour from green to pale yellow. 
	The right picking stage is when the distal end of the pods turns yellow.</p>
	<li style="font-weight:bold">How long I can maintain the vines? Or what is the economic life of vanilla vines?</li>
	<p align="justify">It can be maintained economically upto 12 – 14 years.</p>
	<p align="center" style="font-weight:bold;font-size:20px">Plantation Crops</p>
	<li style="font-weight:bold">How many leaves should I harvest for the production of good quality tea?</li>
	<p align="justify">Two leaf and a bud.</p>
	<li style="font-weight:bold"> What is the harvesting interval for plucking?</li>
	<p align="justify">During rush period, the harvesting interval is 7 – 10 days and during lean period at 10 – 15 days intervals.</p>
	<li style="font-weight:bold">Most of the leaves in my tea plantations show blister appearance or punctured leaves. Why and what is the remedy?</li>
	<p align="justify">This is mainly due to blister blight of tea. This can be controlled by<br>
	i. Spray 210 g Copper oxychloride and Nickel chloride per ha at 5 days interval from June - September; 11 days intervals in October and November.<br>
	ii. Hexagonazole 200 ml + Copper oxychloride 210 g 5 days interval/ha.<br>
	iii. Copper oxychloride 210 g + 200 ml Propiconazole / ha 10 days interval.<br>
	iv. Spray Contaf 85 g / Tilt 80 g + 85 g COC at 7 days interval starting from the onset of monsoon</p>
	<li style="font-weight:bold">Name some shade trees suitable for planting in coffee estates?</li>
	<p align="justify">Dadap and Silver oak are best suited</p>
	<li style="font-weight:bold">During summer dadap trees shows scorching symptom? How to control / overcome that?</li>
	<p align="justify">During summer the stem of dadap are painted with dilute lime or wrapped in agave leaves or polythene sheets to prevent from sun scorching.</p>
	<li style="font-weight:bold">For the past two years I could not get any proper blossom showers during March – April. Is there any alternative method for producing the blossom showers?</li>
	<p align="justify">Sprinkler irrigation during March – April is the ideal alternative system for blossom showers. After doing this operation uniform coffee flowering will be notices in the estates.</p>
	<li style="font-weight:bold"> What is the ideal stage for tapping the rubber?</li>
	<p align="justify">Trees attain tappable stage in about 7 years. 
	First tapping in seedling trees will commence when the trunk attains a girth of 55 cm at 50 cm height from the ground. 
	In budded trees the girth should be 50 cm at 125 cm height from the bud union.</p>
	<li style="font-weight:bold">Is there any method to increase the latex flow in rubber?</li>
	<p align="justify">Ethrel is recommended to increase latex yield of trees tapped on panel D.  
	It is applied at 5% a.i. concentration with a brush below the tapping cut to a width of 5 cm after light scraping of the outer bark. 
	The first application may be done after a drought period preferably after a few pre-monsoon showers and subsequent applications may be done in September and November. 
	However, continuous application of Ethrel is not recommended for periods of more than 3 years at a stretch.</p>
	<li style="font-weight:bold"> During the onset of monsoon the rubber trees in the estates shows abnormal leaf fall.  Why and how to control that?</li>
	<p align="justify">This is mainly due to abnormal leaf disease. This can be controlled by<br>
	i. Prophylactic spraying of the foliage prior to the onset of South-West monsoon with, Bordeaux mixture 1% at 4000 - 5000 lit/ha using high volume sprayers.<br>
	ii. Oil based Copper oxychloride dispersed in diluent spray oil employing either low volume air blast sprayers (Micron 420 or Minimicron 77 or Shaw Duster Sprayer) from the ground or through aerial application.<br>
	iii. For micron spraying on the tree spread, foliage intensity, planting material used and age of plants, two rounds of spray using about 17 to 22 lit of fungicide oil mixture per ha per round (1:6 proportion) with gap of 10 to 15 days or a single round of spray with about 30 - 37 lit of fungicide oil mixture per ha (1:5 proportion) may be necessary.</p>
	<li style="font-weight:bold"> How long can I economically tapp / extract the rubber?</li>
	<p align="justify">Up to 12 -14 years of planting, after that trees are removed and can be used as timber.</p>
	<li style="font-weight:bold">Can I use the cashew seedlings for commercial planting?</li>
	<p align="justify">No. Graft materials are used for commercial planting.</p>
	<li style="font-weight:bold">What kind of intercrops can I select for cashew orchards?</li>
	<p align="justify">Ground nut or pulses or minor millets can be grown.</p>
	<li style="font-weight:bold"> Many cashew plantations are more than 15 years old and the yield of cashew nut is very low. Is there any alternative method to boost up the yield in cashew?</li>
	<p align="justify">Top working is the ideal method to rejuvenate the senile cashew plantations. 
	In this the main trunk is headed / cut back to the length of 1 m height from the ground level. 
	The new shoots emerging from the shoots are used for epicotyl grafting. 
	The scion materials collected from good yielding plants are grafted by means of epicotyl grafting method. 
	The newly grafted materials develop canopy within 1 – 2 years of planting and starts yielding from 3rd onwards. 
	This method can also be practiced for poor yielding plants.</p>
	<li style="font-weight:bold"> I am having poor source of water. Whether it is possible to grow arecanut?</li>
	<p align="justify">No. it is sensitive to moisture deficit and should be grown where adequate water facilities are available</p>
	<li style="font-weight:bold">What are the selection criteria for arecanut seedlings?</li>
	<p align="justify">Arecanut seeds should be collected from pre-marked, potent mother plant with outstanding performance are selected for propagation. Seedlings of 1 – 2 years old, dwarf and compact seedlings with more number of leaves should be selected for planting.</p>
	<li style="font-weight:bold">From my arecanut plantations, a lot of leaf sheaths are dumped as waste materials. As a scientist suggest some of the ways for economical use of such leafy wastes.</li>
	<p align="justify">i. The leaf sheaths can be employed in the preparation of food plates or cups and can be sold in the market.<br>
	ii. Another part is that waste leaf materials are chopped into pieces and used for compost preparations employing earth worms. This adds as a additional support or reduce the cost of organic manures requirement of plantation and the excess can be sold in t he market.</p>
	<li style="font-weight:bold">Suggest some ideal locations for growing cocoa.</li>
	<p align="justify">Cocoa can be grown as intercrop in coconut and areca nut plantations.</p>
	<li style="font-weight:bold">I am having farm holding near to seashore. Whether it is possible to grow betel vine?</li>
	<p align="justify">No. It cannot / does not tolerate saline and alkaline condition. Hence planting of betel vine is not recommended for sea shore areas.</p>
	<li style="font-weight:bold">What kind of support materials can be used for betel vine cultivation?</li>
	<p align="justify">Before the establishment of vines the side branches of Agathi trees upto a height of 2 m are removed for early creeping of the vines.</p>
	<li style="font-weight:bold">Most of my coconut plantations sheds more number of buttons and produce smaller grade nuts. Why and how it can be corrected?</li>
	<p align="justify">This is mainly due to micronutrient deficiency and can be corrected by root feeding of coconut tonic.</p>
	<li style="font-weight:bold">One of my coconut trees shows triangular cut leaves. Why it happens/ occurs like that?</li>
	<p align="justify">This is mainly due to Rhinocerous beetle infestation. This can be controlled by applying a hand full of sand to the growing tip. Keep coconut toddy mixed with Methyl dematon or Monocrotophos 2 ml/lit during the night time to trap the adult beetles. Manure pits near to the coconut plantations must be avoided. If it is so, mix or frequently turn the manures to collect the grubs of Rhinoccerous beetles and destroy them to control the insect population.</p>
	<li style="font-weight:bold">Suggest some coconut varieties suited for rainfed conditions.</li>
	<p align="justify">VPM 3 and ALR (CN) 1 are suited for rainfed conditions.</p>
	<li style="font-weight:bold"> Is there ant alternative ways to conserve the moisture in coconut plantations?</li>
	<p align="justify">Mulching the coconut trees with coconut husks/ coir pith and burial of coconut husk or coir pith near the tree basins retains more soil moisture.</p>
	<li style="font-weight:bold"> I want to practice multitier cropping in coconut plantations. Suggest me some useful and economical crops for that.</li>
	<p align="justify">Coconut + banana + sirukizhangu + bhendi is suitable system for the eastern region. Crops like banana, pepper, cocoa, nutmeg, vanilla can be tried under multiple cropping system in suitable areas in the western region. In all the systems, apply recommended quantity of water and manures and fertilizers to the intercrops separately.</p>
	<li style="font-weight:bold">What are the useful and economical intercrops suited for planting in coconut plantations.</li>
	<p align="justify">(i) Annuals: Groundnut, bhendi, turmeric, tapioca, sweet potato, sirukizhangu, elephant foot yam, ginger, pineapple.<br>
	(ii) Biennials: Banana.  Varieties Poovan and Monthan are suitable.<br>
	(iii) Perennials: Cocoa*, pepper* (Panniyur1 or Panniyur2 or Panniyur5 or Karimunda), nutmeg* and vanilla*  <br>
	*Suitable areas in Pollachi tract of western region and Kanyakumari district.  For vanilla, use disease free planting material and maintain high vigilance to maintain a disease free crop.</p>
	<li style="font-weight:bold">Few of my coconut trees shows webbed appearance in the under surface of leaf and shows patches of degreening after a few days. What is the reason and how to control that?</li>
	<p align="justify">This is mainly due to the infestation of Black headed caterpillar and can be controlled by adopting the following control measures.<br>
	<ul>
	<li>The incidence of the pest is noticed from the month of November to May and from August to November after rainfall. The coconut trees of all ages are attacked.</li>
	<li>Release the larval (Bethylid, Braconid and Ichneumonid) and pupal (Eulophid) on (chalcid) parasitoids and predators periodically from January, to check the build up of the pest during summer.</li>
	<li>Among the larval parasitoids, the bethylid Goniozus nephantidis is the most effective in controlling the pest. The optimum level of release is 1:8 of host-parasitoid ratio. The parasitoid should be released @3000/ha under the coconut trees when the pest is in the 2nd or 3rd instar larval stage. Parasitoid release trap may be used to release the parasitoid at the site of feeding. Parasitoids should not be released in the crown region since they will be killed by predators like spiders and reduviid bugs.</li>
	<li>Remove and burn all affected leaves/leaflets.</li>
	<li>Spray malathion 50 EC 0.05% (1mi/lit) to cover the undersurface of the leaves thoroughly in case of severe epidemic outbreak of the pest in young palms.</li>
	<li>Root feeding for the control of coconut Black headed caterpillar: Select a fresh and live root, cut sharply at an angle and insert the root in the insecticidal solution containing monocrotophos 36 WSC 10 ml + water 10 ml in a 7 x 10 cm polythene bag. Secure the bag tightly to the root with a cotton thread. Twenty four hours later, check whether there is absorption. If there is no absorption select another root. These methods should not be resorted to as a routine practice and it is suggested only for cases of severe epidemic outbreak of the pest and when the survival of the tree is threatened.</li>
	</ul></p>
	<li style="font-weight:bold"> I can notice gummy exudation on the main trunk of coconut. Some where in the middle I can find 1-2 holes with some sound. What is the reason and how to control that?</li>
	<p align="justify">This is mainly due to red palm weevil incidence. This can be controlled by adopting the following measures:<br>
	<ul>
	<li>Remove and burn all wilting or damaged palms in coconut gardens to prevent further perpetuation of the pest.</li>
	<li>Avoid injuries on stems of palms as the wounds may serve as oviposition sites for the weevil. Fill all holes in the stem with cement.</li>
	<li>Avoid the cutting of green leaves. If needed, they should be cut about 120 cm away from the stem.</li>
	<li>Fill the crown and the axils of top most three leaves with a mixture of fine sand and neem seed powder or neem seed kernel powder (2:1) or lindane 1.3 D (1:1 by volume) once in three months to prevent the attack of rhinoceros beetle damage in which the red palm weevil lays eggs.</li>
	<li>Plug all holes and inject pyrocone E or carbaryl 1% or 10 ml of monocrotophos into the stem by drilling a hole above the points of attack.</li>
	<li>Setting up of attractant traps (mud pots) containing sugarcane molasses 2½ kg or toddy 2½ litres + acetic acid 5 ml + yeast 5 g + longitudinally split tender coconut stem/logs of green petiole of leaves of 30 numbers in one acre to trap adult red palm weevils in large numbers.</li>
	<li>Install pheromone trap @1/2 ha</li>
	<li>Root feeding: Select a fresh and live root, cut sharply at an angle and insert the root in the insecticidal solution containing monocrotophos 36 WSC 10 ml + water 10 ml in a 7 x 10 cm polythene bag. Secure the bag tightly to the root with a cotton thread. Twenty four hours later, check whether there is absorption. If there is no absorption select another root. These methods should not be resorted to as a routine practice and it is suggested only for cases of severe epidemic outbreak of the pest and when the survival of the tree is threatened.</li>
	</ul></p>
	<li style="font-weight:bold">. There are some warts or fissures noticed on my harvested coconuts. These coconuts are smaller in size and fetches low market price. Why?</li>
	<p align="justify">This is mainly due to eriophyid mite infestation. The following measures can be adopted. Package of recommendations for the management of the coconut eriophyid mite
	<p style="font-weight:bold">Manurial and fertilizer recommendation (Soil application/tree/year)</p>
	Urea 1.3 kg<br>
	Super phosphate 2.0 kg<br>
	Muriate of potash* 3.5 kg<br>
	* Increased quantity is recommended to increase the plant resistance to the mite.<br>
	Neem cake application @ 5 kg<br>
	Organic manure (well rotten FYM) @ 50 kg<br>
	<p style="font-weight:bold">Micronutrients (Soil application / tree / year)</p>
	Borax 50 g<br>
	Gypsum 1.0 kg<br>
	Magnesium sulphate 500g<br>
	Grow sunnhemp as intercrop twice a year (Seed rate 30 kg/ha)<br>
	<p style="font-weight:bold">Spot application of ecofriendly Botanicals</p>
	<table style="width:500px;height:100px">
  <tr>
    <td>Round</td>
	<td>Eco-friendly Botanical</td>
	<td>Quantity / tree </td>
  </tr>
  <tr>
  <td>1.</td>
  <td>Azadirachtin 1%</td>
  <td>5 ml in one lit. of water</td>
  </tr>
  <tr>
  <td>2.</td>
  <td>Neem oil + Teepol</td>
  <td>30 ml in one lit. of water</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Azadirachtin 1%</td>
  <td>5 ml in one lit. of water</td>
  </tr>
  </table>
  <p style="font-weight:bold">Method of application</p>
  <ul>
  <li>The botanicals should be applied in the sequence indicated above at 45 days interval using a one litre hand sprayer.  Rocker or Pedal sprayer can be used for spraying small trees.</li>
  <li>The spray should be applied at the crown region by a climber covering only the top six bunches during non rainy season.</li>
  <li>The bunches must be covered well by the spray fluid and approximately one litre of spray fluid may be required per tree.</li>
  </ul>
   <p style="font-weight:bold">Precautions and safety measures</p>
  <ul>
  <li>Spraying should be avoided during windy season to prevent contamination.</li>
  <li>At the time of spraying, protective mask and clothing should be used.</li>
  <li>Wash face and hands cleanly with soap after spraying.</li>
  </ul>
	</p>
	<li style="font-weight:bold">I want to establish a coconut nursery? From what type of mother palms or what are characters must be considered while selecting the mother palms?</li>
	<p align="justify">
	<ol>
	<li>Select seed gardens, which contain large proportion of high yielding trees with uniformity in yielding ability.  Trees growing closer to households, cattle shed, compost pits and other favorable conditions should be avoided.</li>
	<li>High yielding mother palms giving not less than 100 nuts/palm/annum should be chosen for collecting seednuts. Alternate bearers should be avoided. The age of the palm chosen be middle age i.e., from 25 to 40 years. Even trees with 15 years age can be selected, if it is high yielding and has stabilized yield.</li>
	<li>The mother palm should have straight trunk, spherical or semi spherical crown, high rate of leaf and spathe production, short and stout petiole, more number of female flowers regular bearing habit, non – buckling bunches, high setting parentage, medium in nut size, high copra outturn and free from pest and diseases.  A good regular bearing mother palm produces on an average one leaf and an inflorescence in its axil every month. So, there will be twelve bunches of varying stages of maturity at any one time. Avoid trees producing habitually barren nuts.</li>
	<li>Harvest seednuts during the months of February - August to  get maximum germination and good   quality seedlings. Harvest the bunches intended for seednut by lowering them to the ground using a rope to avoid injury to seednuts</li>
	<li>The seednuts should be round in shape and when tapped by finger should produce metallic sound. Fully ripe nuts develop twelve months after fertilisation.</li>
	<li>To get more quality seedlings, the seednuts of tall and hybrid are to be air cured for one month followed by sand curing for two  months.  For dwarf varieties, the air curing should be lesser than one month followed by sand curing for two months.</li>
	</ol>
	</p>
	<li style="font-weight:bold">What are the basic criteria for the selection of coconut seedlings?</li>
	<p align="justify">Good quality seedlings should possess at least 6 leaves and the girth of collar region should be 10 cm.</p>
	<li style="font-weight:bold">My land holdings are located near coastal regions of Cuddalore. Whether I can plant oil palm on commercial basis?</li>
	<p align="justify">No. Gravelly and sandy soils, particularly the coastal sands are not ideal for oil palm cultivation.</p>
	<li style="font-weight:bold">During oil palm flowering I can find more male inflorescence than the female. Why it is occurring like that?</li>
	<p align="justify">Water deficiency adversely affects flower initiation, sex differentiation and these results in lower sex ratio due to production of more male inflorescence.</p>
	<li style="font-weight:bold">I have planted oil palm two years ago. Whether I can allow flowering and fruit set this year or I should postponed that one. If so, what is the benefit?</li>
	<p align="justify">The bunches produced initially will be very small and have low oil content. Removal of such inflorescences is called ablation or castration. Removal of all inflorescences during the initial three years is found to improve vegetative growth of young palms so that regular harvesting can commence after three and half years of planting. Ablation is done at monthly interval by pulling out the young inflorescence using gloves or with the help of devices such as narrow bladed chisels. Ablation improves drought resistance capacity of young palms by improving shoot and root growth especially in low production areas where dry condition exists.</p>
	<li style="font-weight:bold"> How to assess the ripening of oil palm?</li>
	<p align="justify">Ripeness of the fruit is determined by the degree of detachment of the fruit from bunches, change in colour and change in texture of the fruit. Ripening of fruits start from top downwards, nigrescens fruits turning reddish orange and the virescens (green) to reddish brown. Fruits also get detached from tip downward in 11 - 20 days time. Ripeness is faster in young palms than in older palms for the bunches of equal weight. The criteria used in determining the degree of ripeness based on the fruit detachment are as follows:<br>
	a)fallen fruits: 10 detached or easily removable fruits for young palms and 5 for adult palms.<br>
	b)number of fruits detached after the bunch is cut; 5 or more fruits/kg of bunch weight.<br>
	c)quantity of detachment per bunch; fruit detachment on 25% of visible surface of bunch.<br>
	These criteria could be applied with flexibility.</p>
	</ol>
	</div>
<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Floriculture & Landscaping </button>
	<div class="panel">
	<ol>
	<p style="font-weight:bold;font-size:20px;position:relative;left:40%">Floriculture</p>
	<li style="font-weight:bold">How can I control white ant infestation in roses?</li>
	<p align="justify">Lindane 1.3% 20g per pit is added to prevent attack by white ants.</p>
	<li style="font-weight:bold">What is the best time for pruning rose?</li>
	<p align="justify">The best time of pruning is the period when the activity of rose plant is atleast and the plant is dormant to near dormant stage. Pruning time will depend on climatic conditions of the particular region. Cutting back the  vigorous past season shoots to half the length. All the weak, diseased, criss-crossing and unproductive shoots are removed. The cut ends should be protected with Bordeaux or Copper oxychloride + Carboryl 50 WP</p>
	<li style="font-weight:bold"> When will the flowers initiate after pruning in rose?</li>
	<p align="justify">The flowering will commence 45 days after pruning.</p>
	<li style="font-weight:bold">. When the hybrid roses should be pruned?</li>
	<p align="justify">The pruning should be done during March and October.</p>
	<li style="font-weight:bold">At what height, the malligai plants should be pruned?</li>
	<p align="justify">The bushes should be pruned to 50 cm height from the ground level during last week of Novembe</p>
	<li style="font-weight:bold">Why do the malligai leaves become yellow and how to rectify this?</li>
	<p align="justify">It is caused by three factors viz., iron deficiency, nematode infection and root rot disease. i) Iron deficiency: Spray Ferrous sulphates 5 g/l at monthly intervals until the chlorotic symptoms disappear. ii) Nematode: Test the soil for nematode infection. Apply 10 g of Phorate granules near root zone and irrigate. iii) Root rot: Drench the soil around the plant with Copper oxychloride at 2.5 g/lit.</p>
	<li style="font-weight:bold">What is the fertilizer requirement of mullai?</li>
	<p align="justify">120 : 240 : 120 g NPK/plant is applied in six split doses at bimonthly intervals, the first dose being given immediately after pruning.</p>
	<li style="font-weight:bold"> At which time mullai plants must be pruned?</li>
	<p align="justify">The bushes are pruned to 45 cm height from ground level during the last week of January</p>
	<li style="font-weight:bold">When do the pitch plants should be pruned?</li>
	<p align="justify">Pruning is done during the last week of December o 45 cm height from ground level.</p>
	<li style="font-weight:bold">. What should be done to get higher yield in crossandra?</li>
	<p align="justify">Spray ascorbic acid 1000 ppm for high yield (ig/lit of water).</p>
	<li style="font-weight:bold"> How to control nematode problem in crossandra?</li>
	<p align="justify">Avoid planting crossandra in nematode infested fields. To control nematodes application of phorate or carbofuran 3 G at 1 kg a.i./ha a week after planting and to be repeated six months after application with any one of the above chemicals at 3 and 9 gm respectively per metre length.</p>
	<li style="font-weight:bold"> In my crossandra field, some plants are found dry and got easily uprooted on pulling. What is the problem and hoe to control this?</li>
	<p align="justify">It is due to the wilt infection. To control this, drench the soil around the plants with Methoxyethyl mercury chloride (Emisan) at 2 g/lit or carbendazim 0.5 ml/lit to manage this problem.</p>
	<li style="font-weight:bold">How to manage wilt in chrysanthemum?</li>
	<p align="justify">Before planting, dip the roots of the suckers in carbendazim 1 gm in 1 lit to protect against wilt</p>
	<li style="font-weight:bold">What should be done to get more branches in chrysanthemum?</li>
	<p align="justify">Pinching should be done once in 4 weeks after planting to induce more branching in chrysanthemum.</p>
	<li style="font-weight:bold">What is the duration and yield of ratoon crop in chrysanthemum?</li>
	<p align="justify">The ratoon crop duration is 4 months from which we can get 10 t/ha yield.</p>
	<li style="font-weight:bold"> How to improve the seedling vigour in marigold?</li>
	<p align="justify">For good quality seedlings, the seeds must be treated with Azospirillum (200 g in 50 ml of rice gruel)</p>
	<li style="font-weight:bold">Explain the propagation and planting techniques in tuberose?</li>
	<p align="justify">Corms (25 to 30g) are planted (1,12,000 cors/ha) on the sides of ridges at 45 x 20 cm spacing at 2.5 cm depth during June – July. Corms are planted after 30 days of harvest. Dip the corms in 5000 ppm CCC (5g/lit) before planting to increase the yield.</p>
	<li style="font-weight:bold"> Does the nerium plant require any inorganic nutrient application?</li>
	<p align="justify">Application of 10 t FYM/ha during January and again in August is sufficient for nerium. No chemical fertilizers are normally applied</p>
	<li style="font-weight:bold"> Is there any variety released in marikolundu?</li>
	<p align="justify">No, only the local variety is being used for cultivation</p>
	<li style="font-weight:bold">. Which plant part is used as planting material in maruvu?</li>
	<p align="justify">Cuttings from the previous crop are used as planting material</p>
	<li style="font-weight:bold">How to prepare planting material in carnation?</li>
	<p align="justify">5 to 10 cm terminal cuttings are treated with NAA at 500 ppm for 5 minutes. Cuttings are then dipped in Carbendazim 2 g/lit solution and planted in raised beds.</p>
	<li style="font-weight:bold"> What is the ideal growing condition for carnation?</li>
	<p align="justify">Day temperature – 20 – 25°C<br>
	Night temperature – 10 -15°C<br>
	Critical photoperiod – 13 hours<br>
	RH –  50-60%</p>
	<li style="font-weight:bold"> How to control pest and diseases in carnation?</li>
	<p align="justify">Red spider mite :	Plant varieties having straight and flat leaves. Spray dicofol 18.5 EC @ 2ml/lit or wettable sulphur 50 WP 3g/lit<br>
Thrips :Spray dimethoate 30 EC 1 ml/lit or malathion 50 EC 2 ml/lit or fenitrothion 50 EC ml/lit<br>
Nematode:Carbofuran 7-8 kg/ha is applied at the time of planting<br>
Leaf spot :	Spray Carbendazim or Mancozeb 2 g/lit<br>
Blight, wilt, root rot:	Spray Mancozeb @ 2.5g/lit</p>
	<li style="font-weight:bold"> How to improve the vase life of carnation?</li>
	<p align="justify">Citric acid is added to water to make the pH 4.5 to 5 and 5 mg of Sodium hypochloride is added to 1 litre of water. Cut flower stalk is soaked in this solution for 4-5 hrs to improve vase life.</p>
	<li style="font-weight:bold">How to control nematode and fungal disease in gladiolus?</li>
	<p align="justify">The corms are dipped in hot water at 40 - 45°C + fungicide (captan or thiram 2g/lit) to control nematode and fungal disease</p>
	<li style="font-weight:bold">What is the correct stage of gladiolus spikes for harvest?</li>
	<p align="justify">The flower spikes are harvested when the first bud shows the colour of the variety</p>
	<li style="font-weight:bold">. What should be done to improve the vase life of gerbera?</li>
	<p align="justify">When flowers completely open harvesting is done and the flower stalk is soaked in sodium hypochloride solution (5-7ml/lit of water) for 4-5 hours to improve vase life.</p>
	<li style="font-weight:bold">How much yield can we get from a hectare of goldenrod plants?</li>
	<p align="justify">The plant yields about 3 lakh stems/crop/ha.</p>
	<li style="font-weight:bold"> What is the seed rate for aster?</li>
	<p align="justify">The seed rate required for aster is 10-12kg/ha.</p>
	<li style="font-weight:bold">am having 0.5 acre jathimalli plants under flowering stage. Will it be possible to use the flowers for perfume production?</li>
	<p align="justify">Among the three species of jasmine, jathimalli (Jasminum grandiflorum) is found suitable for perfume extraction. The foreign perfumery houses have a preference for the concrete and absolute prepared from the flowers of this variety compared to the products prepared from the flowers of the other varieties.</p>
	<li style="font-weight:bold"> How much concrete can we get from a hectare of jathimalli plantations?</li>
	<p align="justify">From a hectare, we can get 29 kg/ha of jasmine concrete</p>
	<li style="font-weight:bold"> I am interested in growing anthurium plants. What is the ideal growing media?</li>
	<p align="justify">The ideal growing media for anthurium is leaf mould + cocopeat (1:1) mixture.</p>
	<li style="font-weight:bold">In my anthurium plants, many old leaves are found? What can we do?</li>
	<p align="justify">The old leaves must be removed leaving 3-5 healthy leaves/plant to induce new growth.</p>
	<li style="font-weight:bold"> What is the ideal harvesting stage of anthurium flowers?</li>
	<p align="justify">The flowers must be harvested when the spathes are fully openend and spadix shows about 1/3 female phase maturity (7-10 days after spathe opening)</p>
	<li style="font-weight:bold">I came to know that orchid is propagated by keikis. What is keikis?</li>
	<p align="justify">It is nothing but the off-shoot developing from the base of the stem.  For propagation, the keikis is separated from the mother plant and planted in a separate pot.</p>
	<li style="font-weight:bold"> Can we harvest the orchid spikes when the flowers are in bud stage?</li>
	<p align="justify">No, the spikes must be harvested only after the flower bloom. The ideal stage for marketing is when the last one or two buds are yet to open or at the nearest about 20 per cent of flowers are in bud condition in the spike.</p>
	<p style="font-weight:bold;font-size:20px;position:relative;left:40%">Landscaping</p>
	<li style="font-weight:bold">.  I have planned to establish a garden in two cent land infront of my home. How to initiate the gardening and what are the things should considered before the initiation?</li>
	<p align="justify">Initially, a paper plan should be made considering the taste and judgement of the owner, position of the house, size of the house, the extent of ground, availability of water, topography of the land, patio for outdoor living, space for drying clothes, place of pet etc. the total area can be divided into three functional units i.e. approach or public area, service area and private garden area and then execute the plan carefully and systematically.</p>
	<li style="font-weight:bold"> I want to establish a home garden. But I have only limited space on the ground. Is it possible to establish a garden?</li>
	<p align="justify">Yes, you can establish a terrace garden. This type of gardening is the only solution for the houses having limited spaces on the ground. Before laying a roof garden, the drainage aspect of the roof and the load which the roof can withstand are to be considered.</p>
	<li style="font-weight:bold"> What is the cheapest and easiest method of lawn making?</li>
	<p align="justify">Establishing lawn by dibbling the roots is the cheapest but slowest method of lawn making. In this method, small roots should be dibbled about 15 cm apart into the prepared ground when it is wet after rain. The roots spread and grow underground in the course of six months, making a fairly compact lawn by frequent mowing, rolling and watering.</p>
	<li style="font-weight:bold">Establishing lawn by dibbling the roots is the cheapest but slowest method of lawn making. In this method, small roots should be dibbled about 15 cm apart into the prepared ground when it is wet after rain. The roots spread and grow underground in the course of six months, making a fairly compact lawn by frequent mowing, rolling and watering.</li>
	<p align="justify">Establishing lawn by dibbling the roots is the cheapest but slowest method of lawn making. In this method, small roots should be dibbled about 15 cm apart into the prepared ground when it is wet after rain. The roots spread and grow underground in the course of six months, making a fairly compact lawn by frequent mowing, rolling and watering.</p>
	<li style="font-weight:bold">How to cut the overgrown grasses in the lawn?</li>
	<p align="justify">The grasses must be cut to uniform height with the use of mower. But the newly planted lawn should not be mowed till it has established well and formed a green sword. In the beginning, the grass should be trimmed with the help of scythe. Interval of mowing of an established lawn depends upon season. The height of lawn can be maintained by adjusting the height of shears of lawn mower but it should not be more than 5-6cm.</p>
	<li style="font-weight:bold"> I own a beautiful lawn, but seem to be monotonous. Can I plant few shrubs inside the lawn?</li>
	<p align="justify">A spatious lawn through beautiful will often be monotonous. But planting many shrubs or trees in the lawn will become unlikely. So, to break the monotony, beautiful tree of shrub is recommended as single specimen in the lawn. The trees like Amherstia nobilis, Callistemon lanceolatus, Thuja orientalis, Araucaria excelsa and shrubs like Agave Americana, Furcraea gigantean, Bougainvillea spectabilis, Cestrum nocturnum, Hibiscus species etc. are found suitable.</p>
	<li style="font-weight:bold"> I have sandy textured soil. Can I use blue grass for lawn making?</li>
	<p align="justify">Blue grass is suitable only for acid soil and performs better in higher elevations. For sandy soil, you can use Japan grass which performs better even under open sunny situation.</p>
	<li style="font-weight:bold"> The leaves of some pot plants are found droopy and dusty. How to recover these plants?</li>
	<p align="justify">When the leaves of the pot plants droop, it is a sign that the plant is either in need of water or suffering from water stagnation at the root. Spraying the plant surfaces through a fine syringe nose cleans the leaves, creates a moist atmosphere and thus assist in promoting their functions</p>
	<li style="font-weight:bold">. What is the irrigation interval for lawn?</li>
	<p align="justify">During autumn and winter months, watering is done at an interval of 10 days whereas during spring and summer months, it should be done at an interval of 7 days. Above all, irrigation should be done compulsorily after every fertilizer application.</p>
	<li style="font-weight:bold"> In my garden, the lawn became too hard and compact. How to overcome this?</li>
	<p align="justify">The lawn can be scraped to overcome this problem. It is done to renovate the old lawn when it becomes old and grass becomes compact. After 3-4 years, during June month, lawn should be scraped completely with the help of garden raker and raking should be done both ways. Otherwise, by using the digging fork, the soil is digged without lifting the soil and uprooting the grass, aeration is provided to the soil thereby making the soil loose and enabling the new growth.</p>
	<li style="font-weight:bold"> How to maintain a lawn in a definite shape?</li>
	<p align="justify">The excess side growth found beyond the boundary line must be trimmed then and there to maintain the definite shape.</p>
	<li style="font-weight:bold"> What is the cost of square feet of lawn?</li>
	<p align="justify">A square feet of lawn costs about 20-25 square feet.</p>
	<li style="font-weight:bold"> The shrubs in my garden are found to have some weak branches and old branches. At what height, these should be cut back?</li>
	<p align="justify">The shrubs need careful pruning. Those which flower during winter months should be pruned at the end of summer season whereas others at the end of winter season. Depending upon the form and age cutting back the growth of the shrub leads to better performance of the plant. All the superfluous growth, ole or weak branches are best cut at ground level or as low as possible without leaving the stub.</p>
	<li style="font-weight:bold">The shrubs need careful pruning. Those which flower during winter months should be pruned at the end of summer season whereas others at the end of winter season. Depending upon the form and age cutting back the growth of the shrub leads to better performance of the plant. All the superfluous growth, ole or weak branches are best cut at ground level or as low as possible without leaving the stub.</li>
	<p align="justify">The shrubs need careful pruning. Those which flower during winter months should be pruned at the end of summer season whereas others at the end of winter season. Depending upon the form and age cutting back the growth of the shrub leads to better performance of the plant. All the superfluous growth, ole or weak branches are best cut at ground level or as low as possible without leaving the stub.</p>
	<li style="font-weight:bold">. The young growing trees are found to have a shapeless growth. What kind of practice must be followed for obtaining the trees with preferable shape and size?</li>
	<p align="justify">All dead wood, misshapen or dangerous branches hanging over roads, buildings, etc. should be cut. Damaged or decayed branches should be cut away. All cuts more than 5 cm should be painted with Bordeaux mixture against the attack of pathogens.
	</p>
	</ol>
	</div>
<button class="accordion" style="position:relative;top:0px"><i class="fas fa-angle-down"></i>&nbsp Medicinal & Aromatic Crops</button>
	<div class="panel">
	<ol>
	<p style="font-weight:bold;font-size:20px;position:relative;left:40%">Medicinal crops</p>
	<li style="font-weight:bold"> I want to cultivate senna at Tuticorin. Is there any released variety in senna?</li>
	<p align="justify">There are two varieties in senna namely KKM Se 1 and ALF-T2. KKM Se 1 is suitable for cultivation in TamilNadu condition.</p>
	<li style="font-weight:bold">How much seed of senna is required for a hectare of land?</li>
	<p align="justify">About 15 -20k g of seed is required for cultivating a hectare of senna.</p>
	<li style="font-weight:bold">What is the optimum season for cultivating senna?</li>
	<p align="justify">Senna can be cultivated in February – March and June – July.</p>
	<li style="font-weight:bold"> What is the manural requirement of senna and is there any need for inorganic fertilizers?</li>
	<p align="justify">The crop requires 10-15 t/ha of FYM and NPK at 25, 25 and 40 kg/ha respectively. 25 kg of N is applied in two splits at 40 and 80 days after sowing. Senna proves better performance with the combined application of organic and inorganic manures.</p>
	<li style="font-weight:bold"> In my senna field in some plants, a tiny insect is found sticking to the leaves? How to control these insects?</li>
	<p align="justify">They are the aphids occasionally infesting the crop. This pest can be controlled by spraying dimethoate 30 EC or methyl demeton 25 EC at 1 ml/lit of water.</p>
	<li style="font-weight:bold">What is the correct stage of harvesting senna?</li>
	<p align="justify">The first harvest of leaves and pods are done 2 months after sowing and subsequent harvests at 30 days interval.I am having only rainfed land. Can I grow senna in my land?</p>
	<li style="font-weight:bold">I am having only rainfed land. Can I grow senna in my land?</li>
	<p align="justify">Yes, the crop readily performs well under rainfed conditions also. Under such condition, 1 t/ha of dried leaves and 75-100 kg/ha of dried pods can be obtained.</p>
	<li style="font-weight:bold">At which season pyrethrum can be cultivated?</li>
	<p align="justify">It can be cultivated during April –May and October – November.</p>
	<li style="font-weight:bold"> Which part of pyrethrum plant is used for medicinal purpose?</li>
	<p align="justify">Flowers are the economic part in pyrethrum.</p>
	<li style="font-weight:bold"> Is it possible to grow digitalis in plains?</li>
	<p align="justify">No, it comes up well only in hill slopes with slightly acidic soil having cool and mild climate.</p>
	<li style="font-weight:bold"> What is the economic part in digitalis?</li>
	<p align="justify">Dried leaves.</p>
	<li style="font-weight:bold"> Mention the propagation method of periwinkle.</li>
	<p align="justify">Periwinkle can be propagated through seeds either by direct sowing or through transplanting.</p>
	<li style="font-weight:bold">What is the seed rate of periwinkle required for cultivation a hectare of land?</li>
	<p align="justify">Under direct sowing method the seed rate required is 2.5 kg/ha and through nursery technique only 0.5 kg/ha is required.</p>
	<li style="font-weight:bold">I have six months old periwinkle crop. Can I harvest the crop by uprooting?</li>
	<p align="justify">Once over harvest is not advisable in periwinkle. The crop becomes ready for harvest of roots after one year only. Before that, two leaf strippings can be taken, the first one after 6 months and the second after 9 months of sowing. Aerial parts are cut and the soil is ploughed for harvest of roots. Fruits are collected without damage.</p>
	<li style="font-weight:bold"> How much yield can we expect from a hectare of periwinkle?</li>
	<p align="justify">
	<table style="width:500px;height:100px">
  <tr>
    <td></td>
	<td style="font-weight:bold">Irrigated</td>
	<td style="font-weight:bold">Rainfed </td>
  </tr>
  <tr>
  <td style="font-weight:bold">Roots</td>
  <td> 1500 kg/ha </td>
  <td> 750 kg/ha</td>
  </tr>
  <tr>
  <td style="font-weight:bold">Leaves</td>
  <td>1500 kg/ha    </td>
  <td>1000 kg/ha    </td>
  </tr>
  <tr>
  <td style="font-weight:bold">Stem</td>
  <td>  3000 kg/ha  </td>
  <td>  2000 kg/ha  </td>
  </tr>
  </table>
	</p>
	<li style="font-weight:bold">How to propagate dioscorea?</li>
	<p align="justify">It can be propagated through single node leaf cuttings or tuber pieces</p>
	<li style="font-weight:bold"> Is there any special structure required for growing dioscorea?</li>
	<p align="justify">The vines need support for optimum growth and for that a pandal may be provided. Bamboo poles or gunny twines may be used to lead the vines to the pandal.</p>
	<li style="font-weight:bold"> How can we control aphid and red spider mite infestation in dioscorea?</li>
	<p align="justify">Spraying the crop with 25 ml Dicofol in 10 lit of water to control aphids and red spider mites.</p>
	<li style="font-weight:bold">When will the dioscorea vines become ready for harvest and how much yield can we obtain from a hectare?</li>
	<p align="justify">The harvest of tubers is made at two years of age and the yield ranges between 50 to 60 t/ha.</p>
	<li style="font-weight:bold"> Two months before I had sown medicinal solanum seeds. But the seeds didn’t germinate until now. What is the reason?</li>
	<p align="justify">There are two reasons for the failure of germination. You might have sown the seeds immediately after their harvest or the seeds which are stored more than one month. These both factors might be the reason. Actually the seeds require a resting period of one month and the sowing should not be delayed further.</p>
	<li style="font-weight:bold"> In medicinal solanum nursery, seedlings are found dried in patches. How to overcome this?</li>
	<p align="justify"> In medicinal solanum nursery, seedlings are found dried in patches. How to overcome this?</p>
	<li style="font-weight:bold"> In medicinal solanum nursery, seedlings are found dried in patches. How to overcome this?</li>
	<p align="justify"> In medicinal solanum nursery, seedlings are found dried in patches. How to overcome this?</p>
	<li style="font-weight:bold"> In medicinal solanum nursery, seedlings are found dried in patches. How to overcome this?</li>
	<p align="justify">Aloe vera is propagated through suckers. The suckers are dipped in 0.1% carbendazim for five minutes and planted in the field. For one hectare of land 10,000 suckers are required.</p>
	<li style="font-weight:bold">How to overcome nematode problem in Coleus forskohlii?</li>
	<p align="justify">i. Crop rotation with sorghum and maize can be adopted<br>
	ii. Planting of marigold along the sides of channels controls nematode population<br>
	iii. Apply 200 kg/ha of neem cake before planting<br>
	iv. Apply 15-20 kg/ha of carbofuran.</p>
	<li style="font-weight:bold"> How to control root rot and wilt problem in coleus?</li>
	<p align="justify">Apply Trichoderma viridii @ 5kg/ha and mixed with well rottened FYM and applied twice at 20 days interval to control rootrot.
To control wilt, drench 300 ppm of streptocycline. Also apply Pseudomonas fluorescence mixed in 5kg/ha of well rotten FYM.</p>
	<li style="font-weight:bold">Explain the postharvest handling in coleus.</li>
	<p align="justify">Harvested tubers are cut into small pieces and dried under shade until it reaches 8% moisture level.</p>
	<li style="font-weight:bold">What type of supporting materials can we employ for gloriosa vines?</li>
	<p align="justify">The supporting plants like Commiphora beryii, Dodonea viscose can be used. The permanent structures with G.I wires can also be formed for growing the vines.</p>
	<li style="font-weight:bold">Is there any special practice followed to increase the seed yield in gloriosa?</li>
	<p align="justify">Hand pollination must be done between 8 -11 am for getting higher yield in gloriosa</p>
	<li style="font-weight:bold">What are the varieties available in tippili for commercial cultivation?</li>
	<p align="justify">Vellanikara -1 (Visvum Tippili) and Yercaud (Pl) - 9</p>
	<p style="font-weight:bold;font-size:20px;position:relative;left:40%">Aromatic crops</p>
	<li style="font-weight:bold"> Does the lemon grass needs any inorganic manure application?</li>
	<p align="justify">In addition to 20 – 25 t/ha of FYM or compost as basal , apply 50 kg N/ha annually, half at planting and half one month after planting. From the second year onwards, first dose of fertilizer should be applied after cutting and again one month after the first dose.</p>
	<li style="font-weight:bold"> I have 2 month old lemon grass plants. When can I start harvesting?</li>
	<p align="justify">The lemon grass leaves can be harvested at 90 days after planting and thereafter 75 – 90 days interval. Cut the bush by leaving 10 – 15 cm above the ground level.</p>
	<li style="font-weight:bold">How drying of citronella leaves can be controlled?</li>
	<p align="justify">It is due to the leaf blight incidence. It may be controlled by spraying any one of the Dithiocarbamates namely Mancozeb or Zineb at an interval of 15 -20 days.</p>
	<li style="font-weight:bold">What are the activities that should be carried out after the planting of geranium?</li>
	<p align="justify">Weeding, uprooting and burning the diseased plants throughout the life cycle of the plant. From the second year onwards give a deep soil forking around the plants to improve the growth of more suckers. Pruning of the bushes is necessary when the bush shows signs of decline. The branches are cut back leaving 15 -20 cm once in 4 -5 years.</p>
	<li style="font-weight:bold">Can use the whole plant of geranium for oil extraction?</li>
	<p align="justify">No, the tender tip portion with 6 to 12 nodes can be used economically.</p>
	<li style="font-weight:bold">Which material is used for propagation in palmarosa?</li>
	<p align="justify">Seeds and slips are used for propagating palmarosa. But the establishment of slips will be poor as compared to seedlings.</p>
	<li style="font-weight:bold"> I am having half an acre of coconut plantation. Can I grow patchouli as intercrop in this field?</li>
	<p align="justify">Yes, patchouli can be cultivated as intercrop. It thrives best in hot and humid conditions under shade of rubber, coconut, coffee etc.</p>
	<li style="font-weight:bold">. How many years will the mint crop yield economically?</li>
	<p align="justify">Under good management conditions, the crop will give economic yield for about four years.</p>
	</ol>
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