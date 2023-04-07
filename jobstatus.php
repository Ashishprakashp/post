
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    border-radius:20px;
    margin-left:0px;
    margin-top:18px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

#cardview{
  align-items: stretch;
  list-style-type: none;
}
.list{
  float: left;
}
.cardbtn{
  background-color:rgb(114, 75, 255);
  border-radius:8px;
  padding:5px 15px 5px 15px;
  margin-right:50px;
  margin-top:20px;
  bottom:0;
  border:1px solid black;
}
ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
#column1{
  width:15%;
  height:1080px;
  background-color:black;
  color:white;
  
}
#column2{
  width:85%;
}
#row{
  display:flex;
}
.verticalbtn{
  padding:25px 15px 25px 15px;
  text-align:center;
  background-color:black;
}  
.verticalbtn:hover{
  background-color:gray;
} 
#arrow{
  color:white;
  background-color:black;
  float:left;
  width:25px;
  height:30px;
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
  <img src="resources/gwen stacy.jpg" width="40px" id="pic"> 
</div> 
<div id="arrow" ><button onclick="show()">></button></div>
<div id="row">
<div id="column1"><form method="post">
    <ul>
      <li class="verticalbtn"><input type="submit" value="Yet to assign" name="yettoassign" id="a"></li>
      <li class="verticalbtn"><input type="submit" value="Assigned" name="assigned"></li>
      <li class="verticalbtn"><input type="submit" value="Completed" name="completed"></li>
</ul></form>
</div>
</body>
<?php


require_once "connection.php";
$id=$_SESSION['id'];
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) {
die($conn->connect_error);
}
$query="";
$curr_status="";
if(isset($_POST['yettoassign'])){
  $query = "SELECT * FROM jobs where cid=$id AND job_status='Live'";
  $curr_status="yet";
}
elseif(isset($_POST['assigned'])){
  $query = "SELECT * FROM jobs where cid=$id AND job_status='Assigned'";
  $curr_status="assigned";
}
elseif(isset($_POST['completed'])){
  $query = "SELECT * FROM jobs where cid=$id AND job_status='Completed'";
  $curr_status="completed";
}
else{
  $query = "SELECT * FROM jobs where cid=$id AND job_status='Live'";

}
$result = $conn->query($query);
if (!$result) {
die ("Database access failed: " . $conn->error);
}
$rows = $result->num_rows;
$result->data_seek(0);
$row = $result->fetch_array(MYSQLI_NUM);
echo <<<END
<div id="column2">
<ul id="cardview">
END;
for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_NUM);
$jid=$row[0];
$cid=$row[1];
$fid=$row[2];
$j_desc=$row[3];
$category=$row[4];
$months=$row[9];
$days=$row[10];
$min_pay=$row[11];
$max_pay=$row[12];
$f_price=$row[13];
$status=$row[14];
$bg = array('card1.png', 'card2.png', 'card3.png', 'card4.png','card5.png','card6.png', 'card7.png', 'card8.png', 'card9.png','card10.png','card11.png', 'card12.png', 'card13.png', 'card14.png','card15.png','card16.png'); // array of filenames
$i = rand(0, count($bg)-1); // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
echo <<<END
<li class="list">
<ul id="cards" style="
  background:url(resources/$selectedBg) no-repeat;
  background-repeat: no-repeat;
  padding:20px;
  width:250px;
  height:300px;
  margin-right:20px;
  margin-bottom:20px;
  border-radius:15px;
  list-style-type: none;
">
<img src="resources\gwen stacy.jpg" width="75px" height="75px" style="border-radius:150px; margin-top:45px; margin-left:140px; border: 5px solid white;">
<li>Category:&nbsp$category</li>
<li>Description:&nbsp$j_desc</li>
<li>Duration:&nbsp$months months</li><li>$days days</li>
END;
if($curr_status=="yet"){
echo <<<END
<button class="cardbtn">Cancel</button>
<button class="cardbtn" id="$jid" onclick="fetchstatus(this.id)">Status</button>
</ul>
</li>
END;
}
elseif($curr_status=="assigned"){
  echo <<<END
<button class="cardbtn">Cancel</button>
<button class="cardbtn" id="$jid" onclick="fetchstatus(this.id)">Contact</button>
</ul>
</li>
END;
}
elseif ($curr_status=="completed") {
  echo <<<END
<button class="cardbtn">Delete</button>
<button class="cardbtn" id="$jid" onclick="fetchstatus(this.id)">View</button>
</ul>
</li>
END;
}
}
echo <<<END
</ul>
</div>
</div>
END;
echo $jid;
?>
<script>
  
  function btnclick(){
      const myBtn = document.getElementById('a');
      myBtn.click();
  }
    function fetchstatus(clicked_id)
  {     
     
      document.cookie = "jid = " + clicked_id;     
      window.location.href = 'statusdetails.php';
  }

    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}



    window.onclick = function(c) {
  if (!c.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
function show(){
  document.getElementById("column1").classList.toggle("show");
}
    </script>
</html>