<?php
// Start the session
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!--<link rel="stylesheet" href="login.css">-->
<style>
    
   #log{
    text-align:center;
    background-color:rgba(255,255,255,0.8);
    width:20%;
    height:auto;
    border-radius:20px;
    border:1px solid black;
    background-repeat: no-repeat;
    margin-top:80px;
    padding:20px 0px 20px 0px;
    }
    
    #logbtn{
    border-color:black;
    border-radius: 2px;
    border: 1px solid;
    padding: 9px 90px 9px 90px;
    font-size:20px;
    background-color: rgb(56, 70, 169);
    color:white;
    }
    #logbtn:hover{
        background-color: rgb(47, 58, 141);
    }
    #logbtn:active {
      background-color: rgb(56, 70, 169);
      box-shadow: 0 5px rgba(0,0,0,0.5);
      transform: translateY(4px);
    }
    .field{
        font-size:18px;
        padding:9px 25px 9px 1px;
        
        border:1px solid;
        border-radius:5px;
    }
    body{
        background-image:url("resources/backgrounds_9.jpg");
        backdrop-filter: blur(3px);
        margin:0px 0px 0px 0px;
        height:auto;
        width:auto;
    }
    #signups{
        text-decoration:none;
        color:black;
        font-size:20px;
    }
    #signup{
      float:right;
      text-decoration:none;
      color:black;
      font-size:20px;
      width: auto;
      background-color: rgba(255,255,255,0.5);
      border-radius:10px;
      padding:5px 5px 5px 7px;
      margin-top:20px;
      margin-right:10%;
    }
    #signup:hover{
        background-color: rgba(255, 255, 255,0.8);
    }
    #signup:active {
      background-color: rgba(255,255,255,0.5);
      box-shadow: 0 5px rgba(0,0,0,0.5);
      transform: translateY(4px);
    }
    #bar{
      background-color: black;
      opacity: 100%;
      background-color:#333;
      height:75px;
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
      padding: 14px 16px;
      text-decoration: none;
    }

    @media only screen and (max-width: 600px) {
    #log{
         width:80%;
         
         margin-top:10px;
        }
    #logo{
        margin-left:20px;
    }
    }
</style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <div id="bar">
<ul>
    
   <li> <img src="resources/logotxt.png" id="logo"></li>
<li><a href="presignup.php" id="signup"><b>Sign Up</b></a></li>
</ul>
</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<br><br><center>
<div id="log">
<h2>SIGN IN</h2><br>
<input type="email" name="mailid" placeholder="Username" class="field" style="margin-right:20px;" required ><br><br>
<input type="password" name="pass" placeholder="Password" class="field" id="id_password" required ><img src="resources/eye.png" width="20px" class="far fa-eye" id="togglePassword" style="cursor: pointer;"><br><br>
I'm a&nbsp&nbsp&nbsp&nbsp<input type="radio" name="user" value="customer" required>Customer&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="radio" name="user" value="freelancer" required>Professional<br><br>
<input type="submit" name="login" value="SIGN IN" id="logbtn"><br><br>
<a href="resetpw.php">Forgot Password?</a>
<br>
Don't have an account ?&nbsp<a href="http://localhost/project/presignup.php">Sign up</a><br>

<?php
require_once 'connection.php';
if(isset($_POST['login'])){
$mail=$_POST['mailid'];
$pass=$_POST['pass'];
$user=$_POST['user'];
$_SESSION['user']=$user;
$_SESSION['mailid']=$_POST['mailid'];

$encrypt=md5($pass);
$encrypts=password_hash($pass, PASSWORD_DEFAULT);
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error){
    die($conn->connect_error);
}
$query = "SELECT pw FROM $user WHERE mailid='$mail' AND pw='$encrypt'";
$query1="SELECT * FROM $user WHERE mailid='$mail'";
$result = $conn->query($query);
$result1=$conn->query($query1);
$rows=$result->num_rows;
$rows1=$result1->num_rows;
if(($rows>0)&&($rows1>0)){   
  for ($j = 0 ; $j < $rows1 ; ++$j)
  {
  $result1->data_seek($j);
  $row1 = $result1->fetch_array(MYSQLI_NUM);
  for ($k = 0 ; $k <5 ; ++$k) 
  $_SESSION['id']= $row1[0];
  $id=$_SESSION['id'];
  $_SESSION['fn']= $row1[1];
  $_SESSION['ln']= $row1[2];
  $_SESSION['country']= $row1[4];
  if($user=="freelancer"){
    $_SESSION['profilepic']=$row1[12];
  }
  else{
  $_SESSION['profilepic']=$row1[10];
  }
  }
    if(($user=="freelancer")){
    header("Location: http://localhost/project/frdashboard.php");
    exit();
    }
    else{
      header("Location: http://localhost/project/dashboard2.php");
      exit();
    }
}
elseif(($rows==0)&&($rows1>0)){
  echo "Wrong Password !";

}
else{
  echo "Wrong Username !";
  exit();
}
}
?>
<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
</div>
</center>
</form>
</body>
</html>
