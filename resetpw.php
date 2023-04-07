<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>
    <?php
    session_start();
    ?>
    <style>
        body{
        background-image:url("resources/backgrounds_9.jpg");
        backdrop-filter: blur(3px);
        margin:0px 0px 0px 0px;
        
    }
        #signup{
      float:right;
      text-decoration:none;
      color:black;
      font-size:20px;
      width: 75px;
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
    #form-contents{
      background-color:rgba(255,255,255,0.7);
      border: 1px solid black;
      border-radius: 15px;
      width:30%;
      margin-left:35%;
      margin-top:5%;
      padding-left:20px;
      text-align:center;
    }
    #btns{
        text-align:center;
    }
    .btn{
    border-color:black;
    border-radius: 5px;
    border: 1px solid;
    margin-right:2%;
    padding:5px 15px 5px 15px;
    font-size:17px;
    background-color: rgb(56, 70, 169);
    color:white;
    }
    .btn:hover{
        background-color: rgb(47, 58, 141);
    }
    .btn:active {
      background-color: rgb(56, 70, 169);
      box-shadow: 0 5px rgba(0,0,0,0.5);
      transform: translateY(4px);
    }
    .field{
    font-size:15px;
    padding:5px 25px 5px 1px;
    border:1px solid;
    border-radius:3px;
    width:250px;
    margin-right:0px;
    }
    </style>
</head>
<body>
<div id="bar">
<ul>
    
   <li> <img src="resources/logotxt.png" id="logo"></li>
   <li><a href="Login.php" id="signup"><b>Sign in</b></a></li>
<li><a href="presignup.php" id="signup"><b>Sign Up</b></a></li>
</ul>
</div>
<div id="form-contents">
    <form action="" method="post">
    <h2 style="text-align:center;">Reset Password</h2><br><br>
    Username:&nbsp&nbsp&nbsp&nbsp<input type="email" name="mailid" class="field" style="margin-right:20px;" required ><br><br><br>
    I'm a&nbsp&nbsp&nbsp&nbsp<input type="radio" name="user" value="customer" required>Customer&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="radio" name="user" value="freelancer" required>Professional<br><br><br>
    Select your security question:&nbsp&nbsp&nbsp&nbsp<select name="question" id="question" class="field" required>
            <option style="text-align:center">---Select---</option>
           <option value="city">In what city were you born?</option>
           <option value="pet">What is the name of your favorite pet?</option>
           <option value="mother">What is your mother's maiden name?</option>
           <option value="hschool">What high school did you attend?</option>
           <option value="eschool">What was the name of your elementary school?</option>
           <option value="car">What was the make of your first car?</option>
           <option value="food">What was your favorite food as a child?</option>
           <option value="spouse">Where did you meet your spouse?</option>
           <option value="parent">What year was your father (or mother) born?</option>
        </select><br><br><br>
        Answer:&nbsp&nbsp&nbsp&nbsp<input type="text" name="answer" id="answer" class="field" autocomplete="off" required><br><br><br>
        New password:&nbsp&nbsp&nbsp&nbsp<input type="password" name="pass" id="id_password" class="field" required>
        <img src="resources/eye.png" width="20px" class="far fa-eye" id="togglePassword" style="cursor: pointer;"><br><br><br>
        Re-enter password:&nbsp&nbsp&nbsp&nbsp<input type="password" name="pass2" id="id_password1" class="field" required>
    <br><br><br>
    <div id="btns">
    <input type="submit" name="submit" value="Reset" class="btn">
    <input type="submit" name="cancel" value="Cancel" class="btn"><br><br><br>
    </form>

<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
  const password1 = document.querySelector('#id_password1');
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
<?php
require_once 'connection.php';
if(isset($_POST['submit'])){
    $mailid=$_POST['mailid'];
    $user=$_POST['user'];
    $question=$_POST['question'];
    $enquestion=md5($question);
    $answer=$_POST['answer'];
    $enanswer=md5($answer);
    $pass=$_POST['pass'];
    $enpass=md5($pass);
    $pass2=$_POST['pass2'];
    if($pass!=$pass2){
        echo "Re-enter the same password";
    }
    else{
        $conn=new mysqli($hn,$un,$pw,$db);
        if($conn->connect_error){
            die($conn->connect_error);
        }
        $check="SELECT * FROM $user WHERE mailid='$mailid' AND question='$enquestion'";   
        $check_res= $conn->query($check);
        $check_row=$check_res->num_rows;
        if($check_row>0){
            $query="UPDATE $user SET pw='$enpass' WHERE mailid='$mailid' ";
            $result= $conn->query($query);
            if($result){
                echo "Success";
            }
            else{
                echo "Failure";
            }
        }
        else{
          echo "Invalid Credentials !";
        }
    }
}
?>
</body>
</html>