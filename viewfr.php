<?php

session_start();
require_once 'connection.php';
try{
/*$mail=$_SESSION['mailid'];
$ut=$_SESSION['user'];*/
if (!$_SESSION['mailid']) {
  throw new Exception('Division by zero.');
}
$mail=$_COOKIE['frmail'];
$ut=$_SESSION['user'];
$conn=new mysqli($hn,$un,$pw,$db);
if(isset($_POST['submit'])){
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $desc=$_POST['desc'];
    $category=$_POST['category'];
    if($conn->connect_error){
        die($conn->connect_error);
    }
    $query= "UPDATE freelancer SET fname='$fn', lname='$ln', descri='$desc', category='$category' WHERE mailid='$mail'";
    $result=$conn->query($query);
    if($result){
        header("Refresh:0");$query1 = "SELECT * FROM freelancer WHERE mailid='$mail'";
        $result1 = $conn->query($query1);
        $rows=$result1->num_rows;
        if($result1 && $result1->num_rows>0){  
            for($i=1;$i<=$rows;$i++){ 
                $result1->data_seek($i);
                $row=$result1->fetch_array(MYSQLI_NUM);
                $_SESSION['fn']=$row[1];
                $_SESSION['ln']=$row[2];
                $_SESSION['country']=$row[4];
            }
        }
        else{
            
        }

    }
    else{
        echo "error";
    }

}


if($conn->connect_error){
    die($conn->connect_error);
}
$query1 = "SELECT * FROM freelancer WHERE mailid='$mail'";
$result1 = $conn->query($query1);
$rows=$result1->num_rows;
if($result1 && $result1->num_rows>0){  
    for($i=1;$i<=$rows;$i++){ 
        $result1->data_seek($i);
        $row=$result1->fetch_array(MYSQLI_NUM);
        $fn=$row[1];
        $ln=$row[2];
        $desc=$row[8];
        $category=$row[9];
        $country=$row[6];
        $image=$row[12];
        $works=$row[13];
    }
    $worksamples=explode(",",$works);
    
}
else{
    
}
}catch(Exception $e){
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
    background-image:url("resources/dashboard1.jpeg");
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
    margin-left:65%;
    
}
#logo{
    float:left;
    margin-left:70px;
    padding:15px 0px 15px 0px;
}
#pic{
    border-radius:80px;
    border:1px solid white;
    margin-left:0px;
    margin-top:18px;
}
#profilepic{
    
    border-radius:350px;
    margin-right:650px;
    width:150px;
    height:150px;
    border:solid gray 5px;
}
label{
  display: inline-block;
  text-align: right;
  margin-left:150px;

}
#form1{
  margin-left:120px;
  margin-top:100px;
  margin-right:700px;
  background-color:white;
  padding:30px;
  border-radius:50px;
}

#over{
  position:absolute;
  top: 70px;
  left: 30px;
  color:black;
  font-weight:bold;
  background:white;
  font-size:1.2em;
  border-radius:10px;
  padding:3px 6px 3px 6px;
  
}
#container{
  position:relative;
  text-align: center;
  color: white;
}
.videodisplay{
float:left;
margin-right:25px;
}
.full{
  position:absolute;
  z-index:3;
  left:0px;
  top:0px;
  width:50%;
  align:center;
  background-color:black;
  padding:15% 25% 15% 25%;


}

</style>
</head>
<body>

<div class="navbar">
  <img src="resources/logotxt.png" id="logo" width="200px">
  <a href="statusdetails.php" id="two">Back</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Account&nbsp&nbsp&nbsp
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="user2.php">Profile</a>
    <a href="logout.php">Logout</a>
    
  </div>
  </div>
  <img src=<?php echo $_SESSION['profilepic'];?> width="40px" height="40px" id="pic"> 
</div>
<div id="form">
        <form action="" method="post" enctype="multipart/form-data" id="form1">
          <div id="container">
            <img src=<?php echo $image;?> id="profilepic" >
          <div id="over" hidden="true" onmouseover="revealtxt()" onmouseout="hidetxt()">Change picture</div></div><br>
            <label>First Name:&nbsp&nbsp<?php echo @$fn;?></label><br><br>
            <label>Last Name:&nbsp&nbsp<?php echo @$ln;?></label><br><br>
            <label>Mail-id:&nbsp&nbsp<?php echo @$mail;?></label><br><br>
            <label>Country:&nbsp&nbsp<?php echo @$country;?></label><br><br>
            <label>Description:&nbsp&nbsp<?php echo @$desc;?></label><br><br>
            <label>Skills:&nbsp&nbsp<?php echo @$category;?></label><br><br>
        </form>
</div>


<?php
echo <<<END
<form action="" style="margin-left:50px; margin-right:50px; background-color:white;" method="post">
END;
for($i=0;$i<sizeof($worksamples)-1;$i++){
  $a=$i."video";
  $videoExtensions=array('mp4','mov','mkv');
  $imageExtensions=array('jpg','jpeg','png','bmp');
  $workext=explode(".",$worksamples[$i]);
  $extensionextract=strtolower(end($workext));
  
  if(in_array($extensionextract,$videoExtensions)){
    echo <<<END
    <div class="videodisplay" style="height:400px">
    <video id=$a onclick="fullscr(this.id)" width="320px" autoplay muted>
    <source src="./sample_files/$worksamples[$i]" type="video/mp4">
    </video>
    </div>

    END;
  }
  elseif(in_array($extensionextract,$imageExtensions)){
    $size=getimagesize("./sample_files/$worksamples[$i]");
    echo <<<END
    <div class="videodisplay" style="height:400px">
    <img width="320px" src="./sample_files/$worksamples[$i]" id="$i" onclick="fullscr(this.id)">
    </div>

    END;
  }
}
echo <<<END
</form>
END;

?>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

function fullscr(a){
  document.getElementById(a).classList.toggle("full");
}
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
function enable(){
        document.getElementById("fn").disabled = false;
        document.getElementById("ln").disabled = false;
        document.getElementById("desc").disabled = false;
        document.getElementById("category").disabled = false;
        document.getElementById("submit").hidden = false;
        document.getElementById("cancel").hidden = false;
        document.getElementById("edit").hidden = true;
        

    }
function default_state(){
    document.getElementById("edit").hidden = false;
    document.getElementById("submit").hidden = true;
    document.getElementById("cancel").hidden = true;
}

</script>
</body>
</html>
