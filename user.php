<?php
session_start();
require_once 'connection.php';
$mail=$_SESSION['mailid'];
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
        header("Refresh:0");
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
        $desc=$row[6];
        $category=$row[7];
        $country=$row[4];
    }
}
else{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title>Document</title>
    <script>
        function field_enable(){
            document.getElementById("fn").disabled = false;
        }
        function myFunction() {
            document.getElementById("demo").innerHTML = "Hello World";
        }
        
    </script>
</head>
<body>
<div id="head">
    
    <ul>
        <li><a class="lia" href="dashboard.php"><img src="resources/logotxt.png" id="logo"></a></li>
        <li  id="first"><a href="news.asp" class="lia"><img src="resources/JOBS.png"></a></li>
        <li ><a href="user.php" class="lia"><img src="resources/user.png" id="user"></a></li>
      </ul>
    
      
    </div>
    <div id="form">
        <form action="" method="post" enctype="multipart/form-data">
            <img src="resources/gwen stacy.jpg" id="pic"><br>
            First Name&nbsp&nbsp&nbsp<input type="text" name="fn" id="fn" value="<?php echo @$fn;?>" disabled="true"><br><br>
            Last Name&nbsp&nbsp&nbsp<input type="text" name="ln" id="ln" value="<?php echo @$ln;?>" disabled="true"><br><br>
            Mail-id<input type="text" name="mail" value="<?php echo @$mail;?>" disabled="true"><br><br>
            User-type<input type="text" name="ut" value="<?php echo @$ut;?>" disabled="true"><br><br>
            Description<input type="text" name="desc" id="desc" value="<?php echo @$desc;?>" disabled="true"><br><br>
            Category of focus<input type="text" name="category" id ="category" value="<?php echo @$category;?>" disabled="true"><br><br>
            <input type="button" name="edit" value="edit" id="edit" onclick="enable()">&nbsp&nbsp&nbsp&nbsp
            <input type="submit" name="submit" id="submit" value="submit" onclick="default_state()" hidden="true">&nbsp&nbsp&nbsp 
            <input type="button" name="cancel" id="cancel" value="cancel" onclick="default_state()" hidden="true">
            Sample of works<input type="file" name="sample" value="<?php echo @$fn;?>"><br><br>
        </form>
</div>
<script>
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