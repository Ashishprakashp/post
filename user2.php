<?php

session_start();
require_once 'connection.php';
$path='';
  

try{
/*$mail=$_SESSION['mailid'];
$ut=$_SESSION['user'];*/
if (!$_SESSION['mailid']) {
  throw new Exception('Division by zero.');
}
$mail=$_SESSION['mailid'];
$ut=$_SESSION['user'];
$profilepic=$_SESSION['profilepic'];
$conn=new mysqli($hn,$un,$pw,$db);
if(isset($_POST['submit'])){
    $filetmp=$_FILES['picchange']['tmp_name'];
    $filename=$_FILES['picchange']['name'];
    $filesize=$_FILES['picchange']['size'];
    $filetype=$_FILES['picchange']['type'];
    $filenamecmps=explode(".",$filename);
    $fileextension=strtolower(end($filenamecmps));
    $ut=$_SESSION['user'];
    $id=$_SESSION['id'];
    //sanitize file-name
    
    if($fileextension){
    $newfilename=($ut).($id).'.'.$fileextension;
    $foldername='./uploaded_files/';
    $filen=$foldername.$newfilename;
    $uploadFileDir='./uploaded_files/';
    $dest_path=$uploadFileDir.$newfilename;
    $_SESSION['profilepic']=$dest_path;
    move_uploaded_file($filetmp,$dest_path);
    }
    else{
      $dest_path=$_SESSION['profilepic'];
    }
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $desc=$_POST['desc'];
    $category=$_POST['category'];
    if($conn->connect_error){
        die($conn->connect_error);
    }
    $query= "UPDATE customer SET fname='$fn', lname='$ln', img='$dest_path' WHERE mailid='$mail'";
    $result=$conn->query($query);
    if($result){
        header("Refresh:0");
    }
    else{
        echo "error";
    }

}


if($conn->connect_error){
    die($conn->connect_error);
}
$query1 = "SELECT * FROM customer WHERE mailid='$mail'";
$result1 = $conn->query($query1);
$rows=$result1->num_rows;
if($result1 && $result1->num_rows>0){  
    for($i=1;$i<=$rows;$i++){ 
        $result1->data_seek($i);
        $row=$result1->fetch_array(MYSQLI_NUM);
        $fn=$row[1];
        $ln=$row[2];
        $country=$row[4];
    }
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
  padding: 14px 16px;
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
  padding: 14px 16px;
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
    margin-left:1100px;
}
#logo{
    float:left;
    margin-left:70px;
}
#pic{
    float:left;
    border-radius:50px;
    margin-left:5px;
    margin-top:3px;
    margin-right:5px;
}
#profilepic{
    
    border-radius:350px;
    
    width:150px;
    height:150px;
    border:solid gray 5px;
}
label{
  display: inline-block;
  text-align: right;
  width:150px;
  margin-left:150px;

}
form{
  margin-left:120px;
  margin-top:100px;
  margin-right:700px;
  background-color:rgba(255, 255, 255, 0.8);
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
  
  color: black;
}
@media only screen and (max-width: 600px) {
    #logo{
        margin-left:20px;
    }
    .field{
        font-size:18px;
        padding:5px 1px 5px 1px;
        border:1px solid;
        border-radius:5px;
        width:150px;
        
    }
    form{
      width:80%;
      margin-left:10px;
      margin-right:10px;
    }
    label{
      margin-left:15px;
      width:100px;
    }
    }
</style>
</head>
<body>

<div class="navbar">
  <img src="resources/logotxt.png" id="logo" width="200px">
  <a href="#home" id="two">Jobs</a>
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
  <a href="dashboard2.php" id="back">Back</a>
</div>
<div id="form">
        <form action="" method="post" enctype="multipart/form-data">
          <div id="container">
            <img src="<?php 
            if(!file_exists($_SESSION['profilepic'])){echo './uploaded_files/user.png';}else{echo $_SESSION['profilepic'];}?>" width="150px" id="profilepic"><label>Change picture:</label><input type="file" name="picchange" id="picchange" disabled="true"">
          <div id="over" hidden="true" onmouseover="revealtxt()" onmouseout="hidetxt()">Change picture</div></div><br>
            <label>First Name:&nbsp&nbsp</label><input type="text" name="fn" id="fn" value="<?php echo @$fn;?>" disabled="true"><br><br>
            <label>Last Name:&nbsp&nbsp</label><input type="text" name="ln" id="ln" value="<?php echo @$ln;?>" disabled="true"><br><br>
            <label>Mail-id:&nbsp&nbsp</label><input type="text" name="mail" value="<?php echo @$mail;?>" disabled="true"><br><br>
            <label>User-type:&nbsp&nbsp</label><input type="text" name="ut" value="<?php echo @$ut;?>" disabled="true"><br><br>
            <input type="button" name="edit" value="edit" id="edit" onclick="enable()">&nbsp&nbsp&nbsp&nbsp
            <input type="submit" name="submit" id="submit" value="submit" onclick="default_state()" hidden="true">&nbsp&nbsp&nbsp 
            <input type="button" name="cancel" id="cancel" value="cancel" onclick="default_state()" hidden="true">
        </form>
</div>

<script>
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
function enable(){
        document.getElementById("fn").disabled = false;
        document.getElementById("ln").disabled = false;
        document.getElementById("desc").disabled = false;
        document.getElementById("category").disabled = false;
        document.getElementById("submit").hidden = false;
        document.getElementById("cancel").hidden = false;
        document.getElementById("edit").hidden = true;
        document.getElementById("picchange").disabled = false;

    }

    
function default_state(){
    document.getElementById("edit").hidden = false;
    document.getElementById("submit").hidden = true;
    document.getElementById("cancel").hidden = true;
    
}
function revealtxt(){
  profilepic.style.filter="blur(2px)";
  document.getElementById("over").hidden = false;
  
}
function hidetxt(){
  profilepic.style.filter="blur(0px)";
  document.getElementById("over").hidden = true;
}
</script>
</body>
</html>
