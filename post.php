<?php
require_once 'connection.php';
if(isset($_POST['submit'])){
$skill=$_POST['skill'];
$description=$_POST['description'];
$months=$_POST['months'];
$days=$_POST['days'];
$min_pay=$_POST['min_pay'];
$max_pay=$_POST['max_pay'];
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error){
    die($conn->connect_error);
}
$query = "INSERT INTO jobs(job_desc,category1,time_months,time_days,min_pay,max_pay) VALUES('$description','$skill',$months,$days,$min_pay,$max_pay)";
$result = $conn->query($query);
if($result){
    echo "Success!!";
}

}
?>