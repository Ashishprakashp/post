<?php
session_start();
require_once 'connection.php';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error){
    die($conn->connect_error);
}
try{
/*$mail=$_SESSION['mailid'];
$ut=$_SESSION['user'];*/
require_once "connection.php";
$fn=$_SESSION['fn'];
$ln=$_SESSION['ln'];
$id=$_SESSION['id'];
$profilepic=$_SESSION['profilepic'];
$notifyjob=0;
if (!$_SESSION['mailid']) {
  throw new Exception('Division by zero.');
}
else{
  $query="SELECT * FROM jobs WHERE fid=$id";
  $result=$conn->query($query);
  $rows=$result->num_rows;
  if($rows>0){
    $notifyjob=1;
  }
  
}
//echo $notifyjob;
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

.dropdown {
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

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
#two{
    margin-left:70%;
    
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
#quotebox{
  background-color:rgba(0, 0, 0, 0.05);
  border:0px solid black;
  border-radius:10px;
  height:30%;
  width:15%;
  padding:5px 20px 10px 20px;
  text-align:center;
  
  
}
.main{
  background-color:rgba(0,0,0, 0.05);
  border:1px solid black;
  width:12%;
  height:30%;
  padding:5px 20px 10px 20px;
  display: inline-block;
  margin-left:5%;
  border-radius:10px 0px 0px 10px;
  
}
p{
  margin-top:30%;
  font-size:19px;
}
.box2{
  background-color:rgba(0,0,0, 0.05);
  border-right:1px solid black;
  border-top:1px solid black;
  border-bottom:1px solid black;
  border-radius:0px 10px 10px 0px;
  width:15%;
  height:30%;
  padding:5px 20px 10px 20px;
}
#start{
  background-color:rgb(56, 70, 169);
  text-decoration:none;
  border:0px solid black;
  border-radius:3px;
  color:white;
  font-size:17px;
  padding:5px 15px 5px 15px;
}
#top{
  margin:5% 0% 0% 5%;
  background-color:white;
  height:600px;
}
#middle{
  padding-top:500px;
}
#thumbs{
  float:right;
}
.column {
  
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

.left {
  float: left;
  width: 55%;
  margin-left:100px;
}

.right {
  float: right;
  width: 30%;
  margin-right:100px;
}

/* Clear floats after the columns */
.row{
  content: "";
  display: table;
  clear: both;
  padding-top:75px;
  background-color:rgba(1, 201, 67, 0.05);
  height:700px;
}
.footer{
  background-color:rgb(70,70,70);
  color:rgb(200,200,200);
  padding-top:100px;
  width:100%;
  height:100%;
}
.social{
  text-align:center;
}
.links{
  text-align:center;
}
.links a{
  margin-right:15px;
  text-decoration:none;
  padding:5px;
  color:rgb(200,200,200);
}
.links a:hover{
  margin-right:15px;
  text-decoration:none;
  padding:5px;
  color:white;
}
.contact{
  margin-left:100px;
}
.footer a{
  margin-right:15px;
  text-decoration:none;
  padding:5px;
  color:rgb(200,200,200);
}
</style>
</head>
<body>

<div class="navbar">
  <img src="resources/logotxt.png" id="logo" width="200px">
  <a href="jobdisplay.php" id="two">Jobs</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Account&nbsp&nbsp&nbsp
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="fruser.php">Profile</a>
    <a href="logout.php">Logout</a>
    
  </div>
  </div>
  <img src=<?php echo $profilepic;?> width="50px" height="50px" id="pic"> 
</div>
<div id="top">
<ul>
  <li id="quotebox">
  <form action="" method="post">
  <h3>Hi <?php echo $fn;echo " ";echo $ln;echo ","?></h3>
  <h4>Today is the perfect day to begin.<br> Quote for jobs!</h4>
  <a name="start" id="start" href="jobdisplay.php">Start</a>
</form></li>



<li class="main" style="background-image:url('resources/builds.jpg');background-repeat: no-repeat;background-size:cover;">
</li>
<li class="box2">
  <p>Before that make sure to build your profile</p>
</li>
<li class="main" style="background-image:url('resources/skills.jpg');background-repeat: no-repeat;background-size:cover;">
</li>
<li class="box2">
  <p>Also make sure that you posses the right skill</p>
</li>
<li id="quotebox" style="margin-top:2%;">
  <form action="" method="post">
  <h3>Check for approved jobs !</h3>
  <?php if($notifyjob==1){ echo "Notification";}else{echo "";}?>
  <a name="start" id="start" href="notify_job.php">Check</a>
</form></li>
<li class="main" style="background-image:url('resources/confidence.jpg');background-repeat: no-repeat;background-size:cover; margin-top:2%;">
</li>
<li class="box2" style="margin-top:2%; ">
  <p>And you are confident enough to complete the job</p>
</li>
<li class="main" style="background-image:url('resources/builds.jpg');background-repeat: no-repeat;background-size:cover; margin-top:2%;">
</li>
<li class="box2" style="margin-top:2%; ">
  <p>Before that make sure to build your profile</p>
</li>
</ul></div><br><br><br>
<div class="row">
  <div class="column left" style="margin-top:100px">
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
  <div class="column right">

    <img src="resources/thumbsup.png" width="600px" style="margin-left:0px; float:right; margin-right:0px;" >
  </div>
</div>
<div class="footer">
            <br><br>
            <div class="contact">
              <b>Contact:</b><br><br>
              +91-6381408390<br><br>
              Mail:&nbsp avg.posthost.gmail.com<br><br>
              Instagram:&nbsp<a href="https://www.instagram.com/ashish_de_crazy_/">Post_host.official</a><br><br>
              Facebook:&nbsp<a href="https://www.instagram.com/ashish_de_crazy_/">PostHost</a><br><br>
              Twitter:&nbsp<a href="https://www.instagram.com/ashish_de_crazy_/">Post Host . Official</a>
            </div>
            <div class="links">
                <a href="#">Home</a>
                <a href="#">Services</a>
                <a href="#">About</a>
                <a href="#">Terms</a>
                <a href="#">Privacy Policy</a><br><br><br>
                Company Name © 2018<br><br><br>
                <p class="copyright"></p>
            </div>
             
    </div>
<!--
<ul id="content">
<li class="content"><div id="newjob">
    <ul>
        <li><h2 id="newbtn">POST A NEW JOB&nbsp&nbsp<img src="resources/down-arrow.png"></h2></li>
        <li><br><a href="newjob.php"><h2 id="createbtn">Create<br><img src="resources/plus.png" id="plus"></h2></a></li>
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
-->
<?php

?>
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

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>
