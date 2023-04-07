<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
    margin: 0px 0px 0px 0px;
    
    margin: 0px 0px 0px 0px;
    background-repeat: no-repeat;
    background-size:cover;
    backdrop-filter: blur(3px);
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

    </style>
</head>
<body>
<div class="navbar">
  <img src="resources/logotxt.png" id="logo" width="200px">
  <a href="jobdisplay.php" id="two">Jobs</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Account&nbsp&nbsp&nbsp
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="fruser.php">Profile</a>
    <a href="logout.php">Logout</a>
    
  </div>
  </div>
  <img src="resources/gwen stacy.jpg" width="40px" id="pic"> 
</div>
<div>
    Hurray!! You've got the job!<br>
    It's time for you to start working towards the deadline!<br>
    The customer will contact you shortly regarding the requirements of the project..<br>
    Stay alert!
</div>
<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>