<?php
session_start();
?>
<html>
    <head>
        <style>
          body{
            margin: 0px 0px 0px 0px;
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

#layout{
  align-items: stretch;
  list-style-type: none;

}

.stslist{
  margin-left:100px;
 
}
ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
.frpic{
  float:left;
  border:1px solid black;
  border-radius:80px;

}
.maindet{
  margin-left:8%;
  margin-top:10px;
}
.right{
  float:right;
  margin-right:0%;
  margin-left:20px;
}
.down{
  float:right;
  margin-left:20px;
}
.down:hover{
  transform: scale(1.2);
}
.down:active{
  opacity: 0.3;
}
.hiddenclass{
  display:none;
}

#prompt{
  display:none;
  padding:40px 30px 40px 30px;
  background-color:white;
  position:absolute;
  z-index:2;
  bottom:40%;
  left:40%;
  border:1px solid black;
  border-radius:10px;
  
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

#rating{
  display:none;
}

.ops{
  width:100%;
  float:left;
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
  <a href="jobstatus.php" id="two">Back</a>
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
<?php
//echo $_SESSION['jid'];
$id=$_COOKIE['jid'];

require_once "connection.php";
$conn= new mysqli($hn,$un,$pw,$db);
if($conn->connect_error){
    die($conn->connect_error);
}
$a=$_COOKIE['jid'];
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

if(isset($_COOKIE['idassign'])){
  $id=$_COOKIE['jid'];
  echo "You assigned the job to";
  
  $assigned_id=$_COOKIE['idassign'];
  $query5="UPDATE jobs SET fid='$assigned_id',job_status='Assigned' WHERE jid=$id";
  $result5 = $conn->query($query5);
  if($result5){
    
    $query6="SELECT * FROM freelancer WHERE fid=$assigned_id";
    $result6=$conn->query($query6);
    $rows6=$result6->num_rows;
    setcookie("idassign", "", time() - 3600);
    header( "Location: statusdetails.php" );
          
  }
  else{
    echo "Error";
  }
}




else{
  $query7="SELECT fid FROM jobs WHERE jid=$id";
$result7 = $conn->query($query7);
$result7->data_seek(0);
$row7=$result7->fetch_array(MYSQLI_NUM);

if($row7[0]!=null){
  $sample=$row[15];
  $workfiles=explode(",",$sample);
  $sample2=$row[16];
  $workfiles2=explode(",",$sample2);
$assigned_id=$row7[0];
$query6="SELECT * FROM freelancer WHERE fid=$assigned_id";
    $result6=$conn->query($query6);
    for ($j = 0 ; $j < 1 ; ++$j){
      $result6->data_seek(0);
      $row6=$result6->fetch_array(MYSQLI_NUM);
      $frfn=$row6[1];
      $frln=$row6[2];
      $desc=$row6[8];
      $category=$row6[9];
      $frcountry=$row6[6];
      $sample=$row6[13];
      $frpic=$row6[12];
      $frmail=$row6[3];
      $frcode=$row6[4];
      $frphone=$row6[5];
      echo <<<END
      <li class="stslist">
      <ul id="layout" style="
        
        background-color:rgb(225, 255, 223);
        background-repeat: no-repeat;
        padding:20px;
        width:65%;
        margin-right:20px;
        margin-top:1%;
        border-radius:15px;
        border:1px solid gray;
        list-style-type: none;
      ">
      <img src=$frpic width='75px' height='75px' class='frpic'>
      <li class="maindet">Name:&nbsp&nbsp&nbsp$frfn&nbsp&nbsp$frln</li>
      <li class="right"><button name=$frmail onclick="navigate(this.name)">View Details</button></li>
      <li class="maindet">Mail-id:&nbsp&nbsp&nbsp$frmail</li>
      <li class="maindet">Phone:&nbsp&nbsp&nbsp$frcode&nbsp$frphone</li>
      <li class="maindet">Country:&nbsp&nbsp&nbsp$frcountry</li>
      </ul>
      END;
          }
}
else{
  $query = "SELECT * FROM quote WHERE jid=$id ORDER BY q_price";
  //echo $query;
  $result = $conn->query($query);
  $rows=$result->num_rows;
  echo <<<END
  <ul id="stsview">
  END;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);
  $j_id=$row[0];
  $q_id=$row[1];
  $q_price=$row[2];
  $f_id=$row[3];
  $q_status=$row[4];
  $query4="SELECT * FROM freelancer WHERE fid=$f_id";
  $result4 = $conn->query($query4);
  $rows4=$result4->num_rows;
  if($rows4>0){
    $result4->data_seek(0);
    $row4 = $result4->fetch_array(MYSQLI_NUM);
    $frfn=$row4[1];
    $frln=$row4[2];
    $frmail=$row4[3];
    $frcode=$row4[4];
    $frphone=$row4[5];
    $frcountry=$row4[6];
    $frdesc=$row4[8];
    $frcategory=$row4[9];
    $frpic=$row4[12];
  
  echo <<<END
  <li class="stslist">
  <ul id="layout" style="
    
    background-color:rgb(225, 255, 223);
    background-repeat: no-repeat;
    padding:20px;
    width:65%;
    margin-right:20px;
    margin-top:1%;
    border-radius:15px;
    border:1px solid gray;
    list-style-type: none;
  ">
  <img src=$frpic width='75px' height='75px' class='frpic'>
  <li class="maindet">Name:&nbsp&nbsp&nbsp$frfn&nbsp&nbsp$frln</li>
  <li class="right"><button onclick="assign($f_id,$j_id)">Assign job</button></li>
  <li class="right"><button name=$frmail onclick="navigate(this.name)">View Details</button></li>
  
  <li class="right">Quote price:&nbsp&nbsp&nbsp$q_price</li>
  
  END;
  /*<li>Mail-id:&nbsp&nbsp&nbsp$frmail</li>
  <li>Phone:&nbsp&nbsp&nbsp$frcode&nbsp$frphone</li>
  <li>Country:&nbsp&nbsp&nbsp$frcountry</li>
  <li>Description:&nbsp&nbsp&nbsp$frdesc</li>*/
  echo <<<END
  <li class="maindet">Skill:&nbsp&nbsp&nbsp$frcategory</li>
  <li class="maindet">Country:&nbsp&nbsp&nbsp$frcountry</li>
  </ul>
  END;
  }
  }
  echo <<<END
  </ul>
  END;
  $query2 = "SELECT MIN(q_price) FROM quote WHERE jid='$id'";
  $result2 = $conn->query($query2);
  $rows2=$result2->num_rows;
  $result2->data_seek(0);
  $row2 = $result2->fetch_array(MYSQLI_NUM);
  
}
}
  
  




?>

<div id="prompt">
<center>
  <p>Are you sure you want to assign the job to _____ ?</p><br>
  <input type="submit" value="Assign" onclick="confirm_assign()">&nbsp&nbsp&nbsp&nbsp
  <input type="submit" value="Cancel" onclick="cancel()">
</center>
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

if(isset($_POST['submit'])){

  $msg=$_POST['message'];
  date_default_timezone_set("Asia/Kolkata");
  $msg_time=date("Y-m-d h:i:sa");
  $sender="cu";
  $query7="INSERT INTO msg(cid,fid,msgco,sender) VALUES($cid,$fid,'$msg','$sender')";
  $result7 = $conn->query($query7);
  if($result7){
    echo "Success";
  }
  else{
    echo "Failure";
  }
} 
if(isset($_POST['disp_rating'])){
  echo "Success";
}
?>
<div id="chatbox">
<form action="" method="post" id="msgcontain">
  <div id="messagebox">
    <?php
      $query6="SELECT * FROM msg WHERE fid=$fid AND cid=$cid";
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
    if(isset($_POST['ratingsub'])){
      $quality=$_POST['scale1'];
      $attitude=$_POST['scale2'];
      $punctuality=$_POST['scale3'];
      $experience=$_POST['scale4'];
      $remarks=$_POST['remarks'];

      $query8="INSERT INTO rating VALUES($fid,$jid,$cid,$quality,$attitude,$punctuality,$experience,'$remarks')";
      $result8=$conn->query($query8);
      if($result8){
        echo "Succeeded";
      }
      else{
        echo "failed";
      }
    }
    ?>
  </div>
  
    <input type="text" placeholder="Enter your message.." name="message" id="msgfield">
    <input type="submit" value="Send" class="msgbtn" name="submit">
    <input type="button" value="Cancel" class="msgbtn">
</form>

</div>
<?php
//echo $workfiles[0];
echo <<<END
Sample outputs
<form action="" style="margin-left:50px; margin-right:50px;" method="post" class="ops">
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
    
    <video style="position:relative; z-index:1;" width="320px" height="240px" autoplay muted>
    <source src="./sample_works/$workfiles[$i]" type="video/mp4">
    </video>
    <button><a href="./sample_works/$workfiles[$i]" download>Download</a></button>
    
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
    <button><a href="./sample_works/$workfiles[$i]" download>Download</a></button>
    
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
<br>
END;


//echo $workfiles2[0];
echo <<<END
Output
<form action="" style="margin-left:50px; margin-right:50px; display:block;" method="post" class="ops">

END;
for($i=0;$i<sizeof($workfiles2)-1;$i++){
  $a=$i."prompt";
  $videoExtensions=array('mp4','mov','mkv');
  $imageExtensions=array('jpg','jpeg','png','bmp');
  $workext=explode(".",$workfiles2[$i]);
  $extensionextract=strtolower(end($workext));
  
  if(in_array($extensionextract,$videoExtensions)){
    echo <<<END
    <div class="videodisplay" style="height:400px">
    
    <video style="position:relative; z-index:1;" width="320px" height="240px" autoplay muted>
    <source src="./comp_works/$workfiles2[$i]" type="video/mp4">
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
    $size=getimagesize("./comp_works/$workfiles2[$i]");
    echo <<<END
    <div class="videodisplay" style="height:400px">
    <img style="position:relative; z-index:1;" width="320px" src="./comp_works/$workfiles2[$i]">
    <button><a href="./comp_works/$workfiles2[$i]" download>Download</a></button>
    
    
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
<div>
  Pay on completion of work
</div>
<div style="float: left;">
  On recieving the completed work:
<button onclick="showform()" >Click me</button>
<p id="demo"></p>
  <form method="post" action="">
  
    <div id="rating">
    <h3>Kindly spend few seconds rating the freelancer</h3><br>
    Rate the quality of work.<br><br>
    <input type="radio" name="scale1" value="1">&nbsp1
    <input type="radio" name="scale1" value="2">&nbsp2
    <input type="radio" name="scale1" value="3">&nbsp3
    <input type="radio" name="scale1" value="4">&nbsp4
    <input type="radio" name="scale1" value="5">&nbsp5
    <br><br>

    Rate the attitude of the freelancer.<br><br>
    <input type="radio" name="scale2" value="1">&nbsp1
    <input type="radio" name="scale2" value="2">&nbsp2
    <input type="radio" name="scale2" value="3">&nbsp3
    <input type="radio" name="scale2" value="4">&nbsp4
    <input type="radio" name="scale2" value="5">&nbsp5
    <br><br>

    Rate the punctuality of the freelancer.<br><br>
    <input type="radio" name="scale3" value="1">&nbsp1
    <input type="radio" name="scale3" value="2">&nbsp2
    <input type="radio" name="scale3" value="3">&nbsp3
    <input type="radio" name="scale3" value="4">&nbsp4
    <input type="radio" name="scale3" value="5">&nbsp5
    <br><br>

    Rate your experience with post host.<br><br>
    <input type="radio" name="scale4" value="1">&nbsp1
    <input type="radio" name="scale4" value="2">&nbsp2
    <input type="radio" name="scale4" value="3">&nbsp3
    <input type="radio" name="scale4" value="4">&nbsp4
    <input type="radio" name="scale4" value="5">&nbsp5
    <br><br>

    Remarks?(If any)<br>
    <textarea id="reemarks" name="remarks" rows="4" cols="50">
    
    </textarea><br><br>
    <input type="submit" name="ratingsub" value="Submit">
</div>
</form>
</div>
<script>
  function reload(){
    window.close();
  }
  function navigate(mail){
    document.cookie = "frmail = " + mail;     
    window.location.href = "viewfr.php";
  }
  function assign(id,id2){
    var a=document.getElementById("prompt");
    a.style.display="block"; 
    window.fid=id;
    window.jid=id2;
  } 
  function cancel(){
    var a=document.getElementById("prompt");
    a.style.display="none"; 
  }
  function confirm_assign(){
    document.cookie = "idassign = " + window.fid;
    window.location.href = "statusdetails.php";
   
  }
  function showform(){
    var a=document.getElementById("rating"); 
    if(a.style.display==="none"){
      a.style.display="block";
    }
    else{
      a.style.display="none";
    }
  }
  function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
  </script>
</body>
</html>