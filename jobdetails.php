<html>
    <head>
        <style>
            #profilepic{
    
    border-radius:350px;
    margin-right:650px;
    width:150px;
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
  text-align: center;
  color: white;
}
        </style>
    </head>
    <body>
<?php
session_start();  
//echo $_SESSION['jid'];
$a=$_COOKIE['jid'];
$id=$_SESSION['id'];
require_once "connection.php";
$conn= new mysqli($hn,$un,$pw,$db);
if($conn->connect_error){
    die($conn->connect_error);
}
$query4="SELECT * FROM jobs WHERE jid=$a AND fid=$id";
$result4=$conn->query($query4);
$rows4=$result4->num_rows;
if($rows4>0){
//  echo "Adichan paaru Appointment order Uh !!";
$query5="SELECT MIN(q_price) FROM quote WHERE jid=$a AND fid=$id";
$result5=$conn->query($query5);
$rows5=$result5->num_rows;
if($rows5>0){
  $result5->data_seek(0);
  $row5=$result5->fetch_array(MYSQLI_NUM);
  $final_price=$row5[0];
}
else{
  echo "Unknown Error Occurred!";
}
echo "Hurray!! You've got the job!<br>
It's time for you to start working towards the deadline!<br>
The customer will contact you shortly regarding the requirements of the project..<br>
Stay alert!";
echo '<script type="text/javascript">JobAcquired();</script>';
}

$query = "SELECT * FROM jobs WHERE jid='$a'";
$result = $conn->query($query);
$rows=$result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_NUM);
for ($k = 0 ; $k <15 ; ++$k) 
//echo "$row[$k]";
//echo "<br>";
$jid= $row[0];
//$_SESSION['jid']=$jid;
$cid= $row[1];
$fid= $row[2];
$job_desc= $row[3];
$category1= $row[4];
$time_months= $row[9];
$time_days= $row[10];
$min_pay= $row[11];
$max_pay= $row[12];
//$final_price= $row[13];
$status= $row[14];
}
$query1 = "SELECT MIN(q_price) FROM quote WHERE jid='$a'";
$result1 = $conn->query($query1);
$rows1=$result1->num_rows;
$result1->data_seek(0);
$row1 = $result1->fetch_array(MYSQLI_NUM);
if($row1[0]==0){
    $curr_price=$max_pay;
}
else{
$curr_price=$row1[0];

}

?>
<div id="form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div id="container">
            <img src="resources/gwen stacy.jpg" id="profilepic">
          <div id="over" hidden="true">Change picture</div></div><br>
            <label>Current price:&nbsp&nbsp<?php echo @$category1;?></label><br><br>
            <label>Category:&nbsp&nbsp<?php echo @$category1;?></label><br><br>
            <label>Description:&nbsp&nbsp<?php echo @$job_desc;?></label><br><br>
            <label>Deadline in:&nbsp&nbsp</label><br><br>
            <label>Minimum pay:&nbsp&nbsp<?php echo @$min_pay;?></label><br><br>
            <label>Maximum pay:&nbsp&nbsp<?php echo @$max_pay;?></label><br><br>
            <label>Current price:&nbsp&nbsp<?php echo @$curr_price;?></label><br><br>
            <label>Finalised price:&nbsp&nbsp<?php echo @$final_price;?></label><br><br>
            <label id="quotebox">Enter price:&nbsp&nbsp</label><input type="number" name="quote_price" id="quotebox" placeholder="in rupees">
            <input type="submit" name="quote" id="quotebtn" value="quote" onclick="reload()">
        </form>
</div>
<?php
$id=$_SESSION['id'];

if(isset($_POST['quote_price'])){
  $query3 = "SELECT * FROM quote WHERE jid='$a'";
  $result3 = $conn->query($query3);
  $rows3=$result3->num_rows;
 
  $result3->data_seek($rows3-1);
  $row4 = $result3->fetch_array(MYSQLI_NUM);

  
  if($rows3==5){
      echo "Quote limit reached!!";
      echo "Final price:$curr_price";
  }
  elseif($row4[3]==$id){
    echo "Wait for others";
  }
  else{
    $quote_price=$_POST['quote_price'];
    $querycheck="SELECT * FROM quote WHERE q_price=$quote_price AND fid=$fid AND jid=$jid";
    $resultcheck=$conn->query($querycheck);
    $rowscheck=$resultcheck->num_rows;
    if($quote_price<$min_pay){
      echo "You can't go below the Minimum pay.";
    }
    elseif($quote_price>$max_pay){
      echo "You can't go above the Maximum pay.";
    }
    /*if($rowscheck>0){
      echo "Updated";
    }*/
    elseif($quote_price>=$curr_price){
      echo "Quote lower than the Current price !";
    }
    else{
      $query2="INSERT INTO quote(jid,q_price,fid,q_status) VALUES($jid,$quote_price,$id,'Live')";
      $result2 = $conn->query($query2);
      if($result2){
          echo "Success";
          header("jobdetails.php");
      }
      else{
          echo "failure";
      }
    }
    header( "Location: jobdetails.php" );
  }
}
?>
<script>
  
  function reload(){
    window.close();
  }
  function JobAcquired(){
    document.getElementById("quotebox").style.visibility="hidden";
  }
  </script>
</body>
</html>