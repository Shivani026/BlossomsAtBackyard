<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>
<style>
.parallax {
 background-image: url("images.jpg");
 min-height:500px; 
 /* Creates the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
 background-image: url("veggies.jpg");
 min-height:400px; 
 /* Creates the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallaxx {
 background-image: url("marygold.jpg");
 min-height:500px; 
 /* Creates the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  position: relative;
  font-family: Arial;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-family:Merienda One;
  font-size:60px;
  border: 5px solid #f1f1f1;
  position:absolute;
  top:40%;
  left:50%;
  transform: translate(-50%, -50%);
  z-index:1;
  width:300px;
  padding:20px;
  text-align: center;
}
</style>
</head>
<body>
<div class="parallax"></div>
<div class="bg-text">About Us</div>
<div style="height:300px;background-color:white;font-size:36px"></div>
<div class="parallax2"></div>
<div style="height:300px;background-color:white;font-size:36px"></div>
<div class="parallaxx"></div>
<div style="height:300px;background-color:white;font-size:36px"></div>
</body>
</html>
