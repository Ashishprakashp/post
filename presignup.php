<?php
session_start();
unset($_SESSION['customer']);    
unset($_SESSION['freelancer']);    
?>
<html >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-image:url("resources/backgrounds_9.jpg");
            background-repeat:no repeat;
            backdrop-filter: blur(3px);
            margin:0px 0px 0px 0px;
            
        }
        form{
            background-color:rgba(255,255,255,0.85);
            border:1px solid black;
            border-radius:15px;
            width:400px;
            height:200px;
            text-align:center; 
            padding:2% 0% 2% 0%;
            display:block;
            margin-left:auto;
            margin-right:auto;
            margin-top:13%;
            
        }
        
        input{
        
        border-radius: 5px;
        border: 1px solid black;
        padding: 9px 9px 9px 9px;
        font-size:20px;
        background-color: rgb(56, 70, 169);
        color:white;
        margin-top:50px;
        }
        input:hover{
            background-color: rgb(47, 58, 141);
        }
        input:active {
          background-color: rgb(56, 70, 169);
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
            form{
              width:70%;
              height:auto;
              margin-top:30%;
              padding-bottom:50px;
            }
            #logo{
               margin-left:20px;
            }
        }
        </style>
</head>
<body>
<div id="bar">
<ul>
    
   <li> <img src="resources/logotxt.png" id="logo"></li>

</ul>
</div>
    <div>
        <form action="" method="post">
            <h3>YOU'RE  A ? </h3>
            <input type="submit" name="freelancer" value="Freelancer">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="submit" name="customer" value="Customer">
        </form>
    </div>
    <?php
    if(isset($_POST['customer'])){
        $_SESSION['customer']="yes";
        header("location: cu_signup.php");
        }
    elseif(isset($_POST['freelancer'])){
        $_SESSION['freelancer']="yes";
        header("location: frsignup.php");
        }
    ?>
</body>
</html>