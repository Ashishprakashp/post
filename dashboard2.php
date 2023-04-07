<?php
session_start();
try{
/*$mail=$_SESSION['mailid'];
$ut=$_SESSION['user'];*/
$profilepic=$_SESSION['profilepic'];
if (!$_SESSION['mailid']) {
  throw new Exception('Division by zero.');
}
}
catch(Exception $e){
    header("Location: http://localhost/project/login.php");
}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    margin: 0px 0px 0px 0px;
   /* background-image:url("resources/dashboard2.jpg");*/
    margin: 0px 0px 0px 0px;
    background-repeat: no-repeat;
    background-size:cover;
    backdrop-filter: blur(3px);
}
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
  font-size:20px;
}

.dropdown ,.dropdowngd{
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 30px 16px;
  background-color: inherit;
  font-family: inherit;
  font-size:20px;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content,.gddropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a,.gddropdown-content a{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover,.gddropdown-content a  {
  background-color: #ddd;
}

.show {
  display: block;
}
#two{
    margin-left:1170px;
    
}
#logo{
    float:left;
    margin-left:70px;
    padding:15px 0px 15px 0px;
}
#pic{
    border-radius:50px;
    margin-left:0px;
    margin-top:18px;
}
#head{
    background-color: rgba(0,0,0,.7);
    padding: 0px 0px 10px 0px;
    margin-top: 0px;
    height: 65px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
li {
  float: left;
  
}
.lia {
  display:block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  color: white;
}
.li{
    padding-top: 5px;

}

a:hover{
    background-color: gray;
}
a:active{
    transform: translateY(4px);
}
#logotxt{
    font-weight: bold;
    font-size: 35px;
    margin-left: 70px;
}

#home{
    margin-left: 800px;
}
#first{
    margin-left: 62%;
}
#user{
    width: 200px;
}
#newjob{
    background-image: url("resources/create_job2.png");
    width: 524px;
    height: 453px;
    background-repeat: no-repeat;
    
    margin-left: 0px;
    padding-top: 170px;
    padding-left: 0px;
    
}
#newbtn{
    background-color: rgb(45,66,171);
    padding: 10px 15px 10px 15px;
    border-radius: 5px;
    margin-right: 100px;
    color: white;
    margin-left: 100px;
    font-size: 20px;

}

#createbtn{
    background-color: rgb(45,66,171);
    padding: 20px 25px 20px 25px;
    border-radius: 20px;
    color: white;
    margin-left: 120px;
    font-size: 20px;
    margin-top: 20px;
    
}
#createbtn:hover{
    background-color: rgb(36, 53, 136);
    transform: scale(1.05); 
}
#createbtn:active{
    background-color: rgb(45,66,171);
    transform: scale(1.05); 
}
#plus{
    width: 20px;
    margin-left: 20px;
    padding-top: 5px;     
    padding-bottom: 5px;
}
#editbtn{
    background-color: rgb(45,66,171);
    padding: 20px 25px 20px 25px;
    border-radius: 20px;
    color: white;
    margin-top: 35px;
    margin-left: 60px;
    font-size: 20px;
    
}
#editbtn:hover{
    background-color: rgb(36, 53, 136);
    transform: scale(1.05); 
}
#editbtn:active{
    background-color: rgb(45,66,171);
    transform: scale(1.05); 
}
#edit{
    margin-left: 42px;
    padding-top: 10px;
}
#feedback{
    background-image: url("resources/feedback2.png");
    width: 300px;
    height: 283px;
    background-repeat: no-repeat;
    margin-right: 0px;
    margin-top: 470px;
    padding-top: 0px;
    padding-left: 20px;
    display: block;
}
#feed{
    
    margin-top: 40px;
    margin-left: 15px;
    margin-bottom: 70px;
    color: white;
    
}
#createfeed{
    background-color: white;
    padding: 30px 85px 100px 15px;
    margin-top: 50px;
    border-radius: 10px;
    text-decoration: none;
    color: black;
    font-weight: bolder;
}
#createfeed:hover{
    transform: scale(1.05);
}
#createfeed:active{
    background-color: rgb(174, 174, 174);
    transform: scale(1.05);      
}
#search{
    background-image: url("resources/search_box2.png");
    margin-top: 90px;
    width: 300px;
    height: 550px;
    margin-left: 50px;
}
.row {
  display: flex;
/*  background-image: linear-gradient(to bottom right, rgb(105,57,168), rgb(60,96,158));*/
  
}

/* Create two equal columns that sits next to each other */
#column1 {
  flex: 50%;
  padding: 10px;
  padding-left:100px;
  padding-top:40px;
}
#column2 {
  flex: 80%;
  padding-top:40px;
  display:inline;
}
.vertical {
            border-left: 6px solid white;
            border-radius:50px;
            margin-top:25px;
            height: 450px;
            position:absolute;
            left: 35%;
        }
.crtbtn{
  
  
  color:white;
  border-radius:10px;
  width:100px;
  padding-top:10px;
  padding-bottom:10px;
  padding-left:15px;
  padding-right:15px;
  font-size:20px;
  font-weight:bold;
  
}
#aboutsite{
  background-color:rgba(255, 255, 255,1);
  height:700px;
}
.Hcategory{
  margin:0px 10px 0px 10px;
  background-color:white;
  border:0px solid black;
  color:dark gray;
}
#Hire{
  margin:30px 20px 30px 20px;
  height:50px;
}
</style>
</head>
<body>
<div class="navbar">
  <img src="resources/logotxt.png" id="logo" width="200px">
  <a href="jobstatus.php" id="two">Jobs</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Account&nbsp&nbsp&nbsp
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    
  </div>
  </div>
  <img src=<?php echo $profilepic;?> width="50px" height="50px" id="pic"> 
</div>
<div id="Hire">
  <b style="float:left;">Hire Immediately :</b>
  <div class="dropdown">
  <button class="Hcategory" id="GD" onclick="drop(this.id)" >Graphics & Design ▼</button>
  <div class="gddropdown-content" style="margin-left:15px" id="GDDropdown">
    <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    <a href="user2.php">Profile</a>
    <a href="user2.php">Profile</a>
  </div></div>

  <div class="dropdown"> 
  <button class="Hcategory" id="L" onclick="drop(this.id)">Lifestyle ▼</button>
  <div class="gddropdown-content" style="margin-left:15px" id="LDropdown">
  <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    <a href="user2.php">Profile</a>
    <a href="user2.php">Profile</a>
  </div></div>

  <div class="dropdown"> 
  <button class="Hcategory" id="B" onclick="drop(this.id)">Business ▼</button>
  <div class="gddropdown-content" style="margin-left:15px" id="BDropdown">
  <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    <a href="user2.php">Profile</a>
    <a href="user2.php">Profile</a>
  </div></div>

  <div class="dropdown">
  <button class="Hcategory" id="VA" onclick="drop(this.id)">Video & Animation ▼</button>
  <div class="gddropdown-content" style="margin-left:15px" id="VADropdown">
  <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    <a href="user2.php">Profile</a>
    <a href="user2.php">Profile</a>
  </div></div>
  
  <div class="dropdown">
  <button class="Hcategory" id="PT" onclick="drop(this.id)">Programming & Tech ▼</button>
  <div class="gddropdown-content" style="margin-left:15px" id="PTDropdown">
  <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    <a href="user2.php">Profile</a>
    <a href="user2.php">Profile</a>
  </div></div>

  <div class="dropdown">
  <button class="Hcategory" id="DM" onclick="drop(this.id)">Digital Marketing ▼</button>
  <div class="gddropdown-content" style="margin-left:15px" id="DMDropdown">
  <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    <a href="user2.php">Profile</a>
    <a href="user2.php">Profile</a>
  </div></div>

  <div class="dropdown">
  <button class="Hcategory" id="MA" onclick="drop(this.id)">Music & Audio ▼</button>
  <div class="gddropdown-content" style="margin-left:15px" id="MADropdown">
  <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    <a href="user2.php">Profile</a>
    <a href="user2.php">Profile</a>
  </div></div>
</div><br>
<div class="row">
<video autoplay muted loop plays-inline id="myVideo" style="position:absolute; z-index:-1; width:100%;">
  <source src="resources/bg video3.mp4" type="video/mp4">
</video>
  <div id="column1">
    <h2 style="color:white; font-family:Arial; line-height:75px; font-size:50px;">POST <br>A NEW <br>JOB</h2>
  </div>
  <div class = "vertical"></div>
  <div id="column2">
    <img src="resources/job2.jpg" width="600px" style="margin-left:100px;" ><br><br><br>
    <button class="crtbtn" style="margin-left:400px; background-color:rgba(0, 0, 0, 0.5);"><a href="newjob2.php" style="text-decoration:none; color:white;">Create</a></button>
    <button class="crtbtn" style="width:170px; margin-left:200px; background-color:rgba(0, 0, 0, 0.3);">Edit existing</button>
  </div>
</div>


<div class="row" style="background:white; margin-top:50px;">
  <div id="column1">
    <h4 style="color:black; font-family:Arial; font-size:35px; margin-right:150px;">A whole world of freelance talent at your fingertips</h4>
    <ul class="marker">
      <li><h4 style="color:rgb(88, 88, 88); font-family:Arial; font-size:20px; margin-right:150px;">✓ &nbspThe best for every budget
Find high-quality services at every price point. No hourly rates, just project-based pricing.</h4></li>
      <li><h4 style="color:rgb(88, 88, 88); font-family:Arial; font-size:20px; margin-right:150px;">✓ &nbspQuality work done quickly
Find the right freelancer to begin working on your project within minutes.</h4></li>
<li><h4 style="color:rgb(88, 88, 88); font-family:Arial; font-size:20px; margin-right:150px;">✓ &nbsp24/7 support
Questions? Our round-the-clock support team is available to help anytime, anywhere.</h4></li>
    </ul>
  </div>
  <div id="column2">
    <img src="resources/World.jpeg" width="600px" style="margin-left:100px; float:right; margin-right:250px;" ><br><br><br>
  </div>
</div>


<ul id="content">
<li class="content"><div id="newjob">
    <ul>
        <li><h2 id="newbtn">POST A NEW JOB&nbsp&nbsp<img src="resources/down-arrow.png"></h2></li>
        <li><br><a href="newjob2.php"><h2 id="createbtn">Create<br><img src="resources/plus.png" id="plus"></h2></a></li>
        <li><h2 id="editbtn">Edit Existing<br><img src="resources/edit.png" id="edit" height="30px"></h2></li>
    </ul>
</div></li>
<li class="content"><div id="feedback">
    <ul>
        <li><h2 id="feed">Feedback</h2></li>
        <li><a id="createfeed" href="">Click here to create one...</a></li>
    </ul>
</div></li>
<li>
    <div id="search">

    </div>
</li>
</ul>
</body>
<script>
    function disable(){
        document.getElementById("ub").disabled = true;
    }
    function user(){
        location.href = "user.php";
    }
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
function drop(a) {
  var b= a.concat("Dropdown");
  document.getElementById(b).classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it

window.onclick = function(c) {
  if (!c.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
  if (!c.target.matches('#GD')) {
  var myDropdown = document.getElementById("GDDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
  if (!c.target.matches('#L')) {
  var myDropdown = document.getElementById("LDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
  if (!c.target.matches('#B')) {
  var myDropdown = document.getElementById("BDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
  if (!c.target.matches('#VA')) {
  var myDropdown = document.getElementById("VADropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
  if (!c.target.matches('#PT')) {
  var myDropdown = document.getElementById("PTDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
  if (!c.target.matches('#DM')) {
  var myDropdown = document.getElementById("DMDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
  if (!c.target.matches('#MA')) {
  var myDropdown = document.getElementById("MADropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>
