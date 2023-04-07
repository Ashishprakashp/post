<?php
$hn='localhost';
$db='project';
$un='root';
$pw='';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error){
        die($conn->connect_error);
}
    $query = "INSERT INTO users(fname,lname,mailid,utype,country,pw) VALUES('Ashish','prakash','apprakash2002@gmail.com','customer','India','hferew77345djcbasb')";
    $result = $conn->query($query);
    if (!$result){
         die ("Database access failed: " . $conn->error);
    }
    else{
        echo "Success!";
    }
?>