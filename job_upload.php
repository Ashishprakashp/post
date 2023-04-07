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

#messagebox{
  border: solid black 2px;
  height:400px;
  width:400px;
  margin-bottom:15px;
  background-color:white;
  overflow:auto;
}
.msgbtn{
  padding:5px 15px 5px 15px;
  margin-left:20px;
}
#msgfield{
  padding:5px 15px 5px 15px;
}
#right{
  text-align:right;
}
#left{
  text-align:left;
}
.msg{
  margin:15px 15px 0px 15px;
  padding:5px 10px 5px 10px;
  background-color:lightgray;
  width:auto;
  overflow:auto;
  border-radius:10px;
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

    .row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

#msgcontain{
  background-color:rgb(235, 235, 235);
  width:405px;
  border-radius:30px;
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
    <div id="bar">
<ul>
    
   <li> <img src="resources/logotxt.png" id="logo"></li>

<li><a href="frdashboard.php" id="back"><b>Back</b></a></li>
</ul>
</div>
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
//echo "Hurray!! You've got the job!<br>
//It's time for you to start working towards the deadline!<br>
//The customer will contact you shortly regarding the requirements of the project..<br>
//Stay alert!";
//echo '<script type="text/javascript">JobAcquired();</script>';
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
$sample=$row[15];
$sample2=$row[16];
}
$workfiles=explode(",",$sample);
$workfiles2=explode(",",$sample2);
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
if(isset($_POST['upload'])){
  $filetmp=$_FILES['samplework']['tmp_name'];
  $filename=$_FILES['samplework']['name'];
  $filesize=$_FILES['samplework']['size'];
  $filetype=$_FILES['samplework']['type'];
  $filenamecmps=explode(".",$filename);
  $fileextension=strtolower(end($filenamecmps));
  $worksnamecmps=explode(".",$filename);
  $worksextension=strtolower(end($worksnamecmps));
  $allowedfileExtensions=array('mp4','mov','mkv','jpg','jpeg','png','bmp');
  if(in_array($worksextension,$allowedfileExtensions)){
    $newworksname=($a)."_".($filename);
    $uploadworkDir='./sample_works/';
    $workdest_path=$newworksname;
    if(move_uploaded_file($filetmp,$uploadworkDir.$workdest_path)){
      echo "Success";
    }
    else{
      echo "Failure";
    }
    
    $workdest_path.=",";
    $sample.=$workdest_path;
    $query2 = "UPDATE jobs SET sample_works='$sample' WHERE jid='$a'";
  $result2 = $conn->query($query2);
  if($result2){
    header("Refresh:0");
  }
  else{
    echo "Failure";
  }
}
}
if(isset($_POST['upload2'])){
  $filetmp2=$_FILES['compwork']['tmp_name'];
  $filename2=$_FILES['compwork']['name'];
  $filesize2=$_FILES['compwork']['size'];
  $filetype2=$_FILES['compwork']['type'];
  $filenamecmps2=explode(".",$filename2);
  $fileextension2=strtolower(end($filenamecmps2));
  $worksnamecmps2=explode(".",$filename2);
  $worksextension2=strtolower(end($worksnamecmps2));
  $allowedfileExtensions2=array('mp4','mov','mkv','jpg','jpeg','png','bmp');
  if(in_array($worksextension2,$allowedfileExtensions2)){
    $newworksname2=($a)."_".($filename2);
    $uploadworkDir2='./comp_works/';
    $workdest_path2=$newworksname2;
    if(move_uploaded_file($filetmp2,$uploadworkDir2.$workdest_path2)){
      echo "Success";
    }
    else{
      echo "Failure";
    }
    
    $workdest_path2.=",";
    $sample2.=$workdest_path2;
    $query8 = "UPDATE jobs SET complete_works='$sample2' WHERE jid='$a'";
  $result8= $conn->query($query8);
  if($result8){
    header("Refresh:0");
  }
  else{
    echo "Failure";
  }
}
}
?>
<div class="row">
  <div class="column">
<div id="form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div id="container">
            <img src="resources/gwen stacy.jpg" id="profilepic">
          <div id="over" hidden="true">Change picture</div></div><br>
            <label>Category:&nbsp&nbsp<?php echo @$category1;?></label><br><br>
            <label>Description:&nbsp&nbsp<?php echo @$job_desc;?></label><br><br>
            <label>Deadline in:&nbsp&nbsp</label><br><br>
            <label>Finalised price:&nbsp&nbsp<?php echo @$final_price;?></label><br><br>
            <h3>Upload your finished works here !!</h3>
        </form>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <h3>Upload the samples of the work to get the customer's comments</h3>
  <label>Select the file:&nbsp&nbsp&nbsp</label>
  <input type="file" name="samplework">
  <input type="submit" name="upload">
</form>
<div>
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
    <source src="./sample_works/$workfiles[$i]" type="video/mp4">
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
    $size=getimagesize("./sample_works/$workfiles[$i]");
    echo <<<END
    <div class="videodisplay" style="height:400px">
    <img style="position:relative; z-index:1;" width="320px" src="./sample_works/$workfiles[$i]">
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
</div>
</div>
<div class="column">
<div id="chatbox">
<form action="" method="post" id="msgcontain">
  <div id="messagebox">
    <?php
    if(isset($_POST['submit'])){

      $msg=$_POST['message'];
      date_default_timezone_set("Asia/Kolkata");
      $msg_time=date("Y-m-d h:i:sa");
      $sender="fr";
      $query7="INSERT INTO msg(cid,fid,msgco,sender) VALUES($cid,$id,'$msg','$sender')";
      $result7 = $conn->query($query7);
      if($result7){
        //echo "Success";
      }
      else{
        //echo "Failure";
      }
    }
      $query6="SELECT * FROM msg WHERE fid=$id AND cid=$cid";
      $result6=$conn->query($query6);
      if($result6){
      $rows6=$result6->num_rows;
      $result6->data_seek(0);
      for($j=0;$j<$rows6;$j++){
        $result6->data_seek($j);
        $row6 = $result6->fetch_array(MYSQLI_NUM);
        
          $mid=$row6[0];
          $cid=$row6[1];
          $fid=$row6[2];
          $msg=$row6[3];
          $sender=$row6[4];
          $time=$row6[5];
          if($sender=="fr"){
          echo <<<END
            <div id="right" class="msg">You : $msg</div>
          END;
          }
          else{
            echo <<<END
            <div id="left" class="msg">Customer : $msg</div>
          END;
          }
        
      }
    }
    
    ?>
  </div>
  
    <input type="text" placeholder="Enter your message.." name="message" id="msgfield">
    <input type="submit" value="Send" class="msgbtn" name="submit">
    <input type="button" value="Cancel" class="msgbtn">
</form>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <h3>Upload the completed work here !</h3>
  <label>Select the file:&nbsp&nbsp&nbsp</label>
  <input type="file" name="compwork">
  <input type="submit" name="upload2">
</form>

  </div>
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
  function deletevideo(a){

  
var passedArray = <?php echo '["' . implode('", "', $workfileexp) . '"]' ?>;
// fs.unlink("/sample_files/"+passedArray[a]);
if(passedArray)
passedArray.splice(a, 1);
document.cookie = "length="+passedArray;

}
function remove(i){
  
  var a=document.getElementById(i+"prompt");
  a.style.display="block";
}
  </script>
</body>
</html>