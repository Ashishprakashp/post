<html>
    <head>
      
    <style type="text/css">
        body{
          margin: 0px 0px 0px 0px;
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
#bar{
      background-color: black;
      opacity: 100%;
      background-color:#333;
      height:75px;
      margin:0px 0px 0px 0px;
    }
    #logo{
        width: 200px;
        margin-left:70px;
        margin-top: 8px;
        float:left;
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    

    li a {
      display: block;
      text-align: center;
      padding: 26px 16px;
      text-decoration: none;
      color:white;
      font-size:20px;
    }
    #back{
      background-color:black;
      width:50px;
      float:right;
      margin-right:100px;
    }
    #back:hover{
      background-color:red;
    }
</style>
<!--<script type="text/javascript" src="jobdet.js"></script>-->
</head>
<body>
<div id="bar">
<ul>
    
   <li> <img src="resources/logotxt.png" id="logo"></li>

<li><a href="frdashboard.php" id="back"><b>Back</b></a></li>
</ul>
</div>
  </body>
<?php
      $bg = array('card1.png', 'card2.png', 'card3.png', 'card4.png','card5.png'); // array of filenames
    
      $i = rand(0, count($bg)-1); // generate random number size of the array
      $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>

<?php  
session_start();
require_once 'connection.php';
$mail=$_SESSION['mailid'];
$mailid=$_SESSION['mailid'];
//echo $mailid;
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) {
die($conn->connect_error);
}
$query = "SELECT category FROM freelancer where mailid='$mailid'";
$result = $conn->query($query);
if (!$result) {
die ("Database access failed: " . $conn->error);
}
$rows = $result->num_rows;
$result->data_seek(0);
$row = $result->fetch_array(MYSQLI_NUM);
$category=$row[0];
$categories=explode(",",$category);
//echo $category;
//echo sizeof($categories);
$query1 = "SELECT * FROM jobs where ";
for($j=0;$j<sizeof($categories);$j++){
  if($j==0){
    $query1.="(category1 LIKE '%$categories[$j]%' OR category1 LIKE '%$categories[$j]' OR category1 LIKE '$categories[$j]%' )";
  }
  else{
    $query1.="OR (category1 LIKE '%$categories[$j]%' OR category1 LIKE '%$categories[$j]' OR category1 LIKE '$categories[$j]%' )";
  }
}
//echo $query1;
//$query1 = "SELECT * FROM jobs where category1='$category'";
$result1 = $conn->query($query1);
if (!$result1) {
die ("Database access failed: " . $conn->error);
}
$rows1 = $result1->num_rows;
echo <<<END
<ul id="cardview">
END;
for ($j = 0 ; $j < $rows1 ; ++$j)
{
$result1->data_seek($j);
$row1 = $result1->fetch_array(MYSQLI_NUM);
$jid= $row1[0];
//$_SESSION['jid']=$jid;
$cid= $row1[1];
$fid= $row1[2];
$job_desc= $row1[3];
$category1= $row1[4];
$time_months= $row1[9];
$time_days= $row1[10];
$min_pay= $row1[11];
$max_pay= $row1[12];
$final_price= $row1[13];
$status= $row1[14];
$bg = array('card1.png', 'card2.png', 'card3.png', 'card4.png','card5.png','card6.png', 'card7.png', 'card8.png', 'card9.png','card10.png','card11.png', 'card12.png', 'card13.png', 'card14.png','card15.png','card16.png'); // array of filenames
$i = rand(0, count($bg)-1); // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
//$_SESSION['job']=$j;
//echo $row1[$k];
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
<li>Category:&nbsp$category1</li>
<li>Description:&nbsp$job_desc</li>
<li>Duration:&nbsp$time_months months</li><li>$time_days days</li>
<button class="cardbtn">Cancel</button>
<button class="cardbtn" id="$jid" onclick="fetchjob(this.id)">Quote</button>
</ul>
</li>
END;
}
echo <<<END
</ul>
END;
?>
<script>
  function fetchjob(clicked_id)
  {
      document.cookie = "jid = " + clicked_id;     
      window.location.href = 'jobdetails.php';
  }
</script>
</html>