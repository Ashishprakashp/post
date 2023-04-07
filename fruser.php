<?php
function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
session_start();
require_once 'connection.php';
$mail=$_SESSION['mailid'];
$ut=$_SESSION['user'];
$id=$_SESSION['id'];
$profilepic=$_SESSION['profilepic'];
$conn=new mysqli($hn,$un,$pw,$db);
$workfiles=array();
try{
  if($conn->connect_error){
    die($conn->connect_error);
}


if(isset($_COOKIE['length'])&& isset($_POST['yes'])){
  $abc=$_COOKIE['length'];
  $query4 = "UPDATE freelancer SET works='$abc' WHERE mailid='$mail'";
  $result4 = $conn->query($query4);
  if($result4){
    header("Refresh:0");
  }
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
        $sample=$row[13];
    }
    $workfiles=explode(",",$sample);
    $mydir = 'sample_files'; 
  
  $myfiles = array_diff(scandir($mydir), array()); 

  $arrdb=$workfiles;
  $arrfe=array();
  //print_r($myfiles); 
  for($i=0;$i<=sizeof($myfiles)-1;$i++){
    if(startsWith("$myfiles[$i]","0freelancer")){
      array_push($arrfe,$myfiles[$i]);
    }
  }
  
  $arrreq=array_diff($arrfe,$arrdb);
  //print_r($arrreq);
  for($i=2;$i<sizeof($arrreq);$i++){
    unlink("C:/xampp reloaded/htdocs/project/sample_files/".$arrreq[$i]);
  }
}
else{
    
}
$query3 = "SELECT works FROM freelancer WHERE mailid='$mail'";
$result3 = $conn->query($query3);
$rows3=$result3->num_rows;
$workfile="";
if($result3){
  for($i=1;$i<=$rows3;$i++){ 
    $result3->data_seek($i);
    $row3=$result3->fetch_array(MYSQLI_NUM);
    $workfile=$row3[0];
}
$workfileexp=explode(",",$workfile);
$workfilepath=$workfile;
//echo $workfilepath;
}
/*$mail=$_SESSION['mailid'];
$ut=$_SESSION['user'];*/
if (!$_SESSION['mailid']) {
  throw new Exception('Division by zero.');
}

if(isset($_POST['submit'])){
  $filetmp=$_FILES['picchange']['tmp_name'];
  $filetmp2=$_FILES['sample']['tmp_name'];
  $filename=$_FILES['picchange']['name'];
  $filename2=$_FILES['sample']['name'];
  $filesize=$_FILES['picchange']['size'];
  $filesize2=$_FILES['sample']['size'];
  $filetype=$_FILES['picchange']['type'];
  $filetype2=$_FILES['sample']['type'];
  $filenamecmps=explode(".",$filename);
  $filenamecmps2=explode(".",$filename2);
  $fileextension=strtolower(end($filenamecmps));
  $fileextension2=strtolower(end($filenamecmps2));

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

    if($fileextension2){
      $newfilename2=($ut).($id).'.'.$fileextension2;
      $foldername2='./sample_files/';
      $filen2=$foldername2.$newfilename2;
      $uploadFileDir2='./sample_files/';
      $dest_path2=$uploadFileDir2.$newfilename2;
      $_SESSION['sample']=$dest_path2;
      move_uploaded_file($filetmp2,$dest_path2);
      echo $dest_path2;
      }
      else{
        $dest_path2=$_SESSION['sample'];
      }
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $desc=$_POST['desc'];
    $category=$_POST['category'];
    if($conn->connect_error){
        die($conn->connect_error);
    }
    $query= "UPDATE freelancer SET fname='$fn', lname='$ln', descri='$desc', category='$category',img='$dest_path',works='$workfilepath' WHERE mailid='$mail'";
    $result=$conn->query($query);
    if($result){
        header("Refresh:0");
        $query1 = "SELECT * FROM freelancer WHERE mailid='$mail'";
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
if(isset($_POST['confirm'])||isset($_POST['confirm2'])){
  echo "Success";
  if(isset($_POST['confirm'])){
    $works=$_FILES['videos']['tmp_name'];
    $worksname=$_FILES['videos']['name'];
    $workssize=$_FILES['videos']['size'];
    $workstype=$_FILES['videos']['type'];
    $allowedfileExtensions=array('mp4','mov','mkv');
  }
  elseif(isset($_POST['confirm2'])){
    $works=$_FILES['images']['tmp_name'];
    $worksname=$_FILES['images']['name'];
    $workssize=$_FILES['images']['size'];
    $workstype=$_FILES['images']['type'];
    $allowedfileExtensions=array('jpg','jpeg','png','bmp');
  }
  $worksnamecmps=explode(".",$worksname);
  $worksextension=strtolower(end($worksnamecmps));
  if(in_array($worksextension,$allowedfileExtensions)){
    $newworksname=($id).($ut).(sizeof($workfiles)).".".$worksextension;
    $uploadworkDir='./sample_files/';
    $workdest_path=$newworksname;
    if(move_uploaded_file($works,$uploadworkDir.$workdest_path)){
      echo "Success";
    }
    else{
      echo "Failure";
    }
    
    $workdest_path.=",";
    $sample.=$workdest_path;
    $query2 = "UPDATE freelancer SET works='$sample' WHERE mailid='$mail'";
  $result2 = $conn->query($query2);
  if($result2){
    header("Refresh:0");
  }
  else{
    echo "Failure";
  }
    }
    else{
      echo "Not allowed";
    }
  
}
if(isset($_POST['yes'])){

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
  width:100%;
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
    border:solid gray 5px;
}

label{
  display: inline-block;
  text-align: right;
  width:150px;
  margin-left:150px;

}
#form{
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
  
  color: white;
}
#videodisplay{
  background-color:white;
}
ul{
  list-style-type:none;
  display:block;
}
.videodisplay{

  float:left;
  margin-right:25px;
}
.prompt{
  position:;
  bottom:1px;
  margin-left:40px;
  display: none;
}
.prompt1{
  position:absolute;
  left:40%;
  bottom:1px;
  margin-left:40px;
  z-index:2;
  display: none;
  background-color:white;
  padding: 25px 20px 25px 20px;
  font-size:20px;
  border-radius:5px;
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
    #form{
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
  <a href="frdashboard.php" id="two">Jobs</a>
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
  <a href="frdashboard.php" id="back">Back</a>
</div>
<div id="form">
        <form action="" method="post" enctype="multipart/form-data">
          <div id="container">
          <img src="<?php 
            if(!file_exists($_SESSION['profilepic'])){echo './uploaded_files/user.png';}else{echo $_SESSION['profilepic'];}?>" width="150px" height="150px"  id="profilepic"><label>Change picture:</label><input type="file" name="picchange" id="picchange" disabled="true">
          <div id="over" hidden="true" onmouseover="revealtxt()" onmouseout="hidetxt()">Change picture</div></div><br>
            <label>First Name:&nbsp&nbsp</label><input type="text" name="fn" id="fn" value="<?php echo @$fn;?>" disabled="true"><br><br>
            <label>Last Name:&nbsp&nbsp</label><input type="text" name="ln" id="ln" value="<?php echo @$ln;?>" disabled="true"><br><br>
            <label>Mail-id:&nbsp&nbsp</label><input type="text" name="mail" value="<?php echo @$mail;?>" disabled="true"><br><br>
            <label>User-type:&nbsp&nbsp</label><input type="text" name="ut" value="<?php echo @$ut;?>" disabled="true"><br><br>
            <label>Description:&nbsp&nbsp</label><input type="text" name="desc" id="desc" value="<?php echo @$desc;?>" disabled="true"><br><br>
            <label>Category of focus:&nbsp&nbsp</label><input type="text" name="category" id ="category" value="<?php echo @$category;?>" disabled="true"><br><br>
            
            <input type="button" name="edit" value="edit" id="edit" onclick="enable()">&nbsp&nbsp&nbsp&nbsp
            <input type="submit" name="submit" id="submit" value="submit" onclick="default_state()" hidden="true">&nbsp&nbsp&nbsp 
            <input type="button" name="cancel" id="cancel" value="cancel" onclick="default_state()" hidden="true">
            <br><br>
        </form>
        <form action="" method="post" enctype="multipart/form-data">
          <input type="button" value="Add video" onclick="uploadvideo()" id="videobtn">
          <input type="file" name="videos" id="video" hidden="true">
          <input type="submit" name="confirm" id="confirm" value="confirm" hidden="true">
          <input type="button" id="cancel2" value="cancel" hidden="true" onclick="videocancel()">

          <input type="button" value="Add image" onclick="uploadimg()" id="imgbtn">
          <input type="file" name="images" id="image" hidden="true">
          <input type="submit" name="confirm2" id="confirm2" value="confirm" hidden="true">
          <input type="button" id="cancel3" value="cancel" hidden="true" onclick="imgcancel()">

</form>
</div>  
<?php
echo $workfiles[0];
echo <<<END
<form action="" style="margin-left:50px; margin-right:50px;" method="post">
END;
for($i=0;$i<sizeof($workfiles)-1;$i++){
  $a=$i."prompt";
  $videoExtensions=array('mp4','mov','mkv');
  $imageExtensions=array('jpg','jpeg','png','bmp');
  $workext=explode(".",$workfiles[$i]);
  $extensionextract=strtolower(end($workext));
  
  if(in_array($extensionextract,$videoExtensions)){
    echo <<<END
    <div class="videodisplay" style="height:400px">
    <img id="$i" src="resources/cancel2.png" width="20px" align="right" onclick="remove($i)"> 
    <video style="position:relative; z-index:1;" width="320px" height="240px" autoplay muted>
    <source src="./sample_files/$workfiles[$i]" type="video/mp4">
    </video>
    
    <div class="prompt1" id="$a"><center>
    Are you sure you want to delete this?<br><br>
    <input type="submit" name="yes" onclick="deletevideo($i)" onclick="fruser.php" value="Yes">
    <input type="submit" name="no" onclick="no($i)" value="No">
    </center>
    </div>
    </div>

    END;
  }
  elseif(in_array($extensionextract,$imageExtensions)){
    $size=getimagesize("./sample_files/$workfiles[$i]");
    echo <<<END
    <div class="videodisplay" style="height:400px">
    <img style="position:relative; z-index:1;" width="320px" src="./sample_files/$workfiles[$i]">
    <img id="$i" src="resources/cancel2.png" width="20px" align="top" onclick="remove($i)"> 
    
    <div class="prompt1" id="$a"><center>
    Are you sure you want to delete this?<br><br>
    <input type="submit" name="yes" onclick="deletevideo($i)" onclick="fruser.php" value="Yes">
    <input type="submit" name="no" onclick="no($i)" value="No"></center>
    </div>
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
function hidecancel(i){
  var a=document.getElementById(i);
  a.style.display="none";
}
function displaycancel(i){
  var a=document.getElementById(i);
  a.style.display="block";
}
function remove(i){
  
  var a=document.getElementById(i+"prompt");
  a.style.display="block";
}
function uploadvideo(){
  document.getElementById('videobtn').hidden=true;
  document.getElementById('video').click();
  document.getElementById('video').hidden=false;
  document.getElementById('confirm').hidden=false;
  document.getElementById('cancel2').hidden=false;
  document.getElementById('imgbtn').hidden=true;
  
}
function videocancel(){
  document.getElementById('videobtn').hidden=false;
  document.getElementById('video').hidden=true;
  document.getElementById('confirm').hidden=true;
  document.getElementById('cancel2').hidden=true;
  document.getElementById('imgbtn').hidden=false;
}

function uploadimg(){
  document.getElementById('imgbtn').hidden=true;
  document.getElementById('image').click();
  document.getElementById('image').hidden=false;
  document.getElementById('confirm2').hidden=false;
  document.getElementById('cancel3').hidden=false;
  document.getElementById('videobtn').hidden=true;
}
function imgcancel(){
  document.getElementById('imgbtn').hidden=false;
  document.getElementById('image').hidden=true;
  document.getElementById('confirm2').hidden=true;
  document.getElementById('cancel3').hidden=true;
  document.getElementById('videobtn').hidden=false;
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
        document.getElementById("picchange").disabled = false;
        document.getElementById("sample").disabled = false;

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
function deletevideo(a){

  
  var passedArray = <?php echo '["' . implode('", "', $workfileexp) . '"]' ?>;
 // fs.unlink("/sample_files/"+passedArray[a]);
  if(passedArray)
  passedArray.splice(a, 1);
  document.cookie = "length="+passedArray;
  
}

</script>
</body>
</html>
