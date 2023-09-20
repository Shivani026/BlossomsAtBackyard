<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
<style>
body, html {
  height: 100%;
}
.bg-img {
  /* The image used */
  background-image: url("1.jpeg");
  min-height:700px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
/* Add styles to the form container */
.container {
  padding: 16px;
  width:400px;
  height:100%;
  background: rgba(0, 0, 0, 0.6);
  font-color:white;
}
/* Set a style for the submit button */
.btn {
  background-color: #CE2222;
  margin-left:120px;
  color: white;
  padding: 16px 20px;
  border: none;
  border-radius:4px;
  cursor: pointer;
  opacity: 0.9;
  font-family:'Merienda One';
}
.btn:hover {
  opacity: 1;
}
/* Extra styles for the cancel button */
.cancelbtn {
  background-color: #F9307C;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius:20px;
  cursor: pointer;
  opacity: 0.9;
  float: left;
  width:50%;
}
.cancelbtn:hover {
  opacity:1;
}
.signupbtn {
  background-color: #f44336;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius:20px;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  float: left;
}
.signupbtn:hover {
  opacity:1;
}
/* Set a style for the submit button */
.butn {
  background-color: #CE2222;
  color: white;
  padding: 16px 20px;
  border: none;
  border-radius:4px;
  cursor: pointer;
  opacity: 0.9;
  font-family:'Merienda One';
}
.butn:hover {
  opacity: 1;
}
.loginbtn {
  background-color: #f44336;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius:20px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  float: left;
}
.loginbtn:hover {
  opacity:1;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  border:none;
  border-radius:20px;
  padding: 13px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color:5A5D5A;
  background-image:url("1.jpeg");
  padding-top: 50px;
}
.modall {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color:5A5D5A;
  background-image:url("1.jpeg");
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
   background-color: white;
   margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
   border: 1px solid #ccc;
   width: 30%; /* Could be more or less, depending on screen size */
 }

.modall-content {
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
   border: 1px solid #ccc;
   width: 30%; /* Could be more or less, depending on screen size */
 }
/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
.cloose {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
.cloose:hover,
.cloose:focus {
  color: #f44336;
  cursor: pointer;
}
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
/* Clear floats */
.clearfiix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {width: 100%;}
 .container {width:100%;}
}

</style>
</head>
<body>
<div class="bg-img">
  <form class="container" style="width: 620px; height:330px;background: rgba(0, 0, 0, 0.6);border-radius:4px;position: fixed;right:25%;top:25%;">
    <h1 style="font-family:Merienda One;font-size:40px;color:#F2F2F2;text-align:center;">Blossoms at Backyard</h1><p style="font-family:Merienda One;font-size:20px;color:#F2F2F2;text-align:center;">Welcome aboard! We, here at Blossom at Backyard, are here to help you explore the beauty of Horticulture that you can experience at your backyard. Click on the button below to begin your journey with us.</p>
         <button type="submit" class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:30%;">Sign Up</button>
          <button type="submit" class="butn" onclick="document.getElementById('log').style.display='block'" style="width:30%">Login</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="cloose" title="Close Modal">&times;</span>
  <form class="modal-content"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="container" style="font-family:Merienda One;font-size:15px;color:#F2F2F2;  border-radius:4px;margin-top:-25px;margin-left:450px;overflow:auto;">
         <div class="form-group style="margin-bottom: 15px;" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
		<h1 style="font-size:30px;">Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email"  name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password_1" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password_2" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <div class="clearfiix">
        <button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </div>
  </form>
</div>
<div id="log" class="modall">
  <span onclick="document.getElementById('log').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modall-content" action="i.php" >
    <div class="container" style="font-family:Merienda One;font-size:15px;color:#F2F2F2;height:70%;margin-left:-15px;border:none;border-radius:4px;">
    
      <h1>Login</h1>
      <p>Please fill in your details to login.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <div class="clearfix">
        <button type="submit" name="login_user" class="signupbtn">Login</button>
        <button type="button" onclick="document.getElementById('log').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </div>
  </form>
</div>
</form>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modall = document.getElementById('log');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modall) {
        modall.style.display = "none";
    }
}
</script>
</div>
</body>
</html>