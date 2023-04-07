<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
    
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    margin: 0px 0px 0px 0px;
    background-image:url("resources/dashboard1.jpeg");
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
  padding: 14px 16px;
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
  padding: 14px 16px;
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
    margin-left:1000px;
}
#logo{
    float:left;
    margin-left:70px;
}
#pic{
    float:left;
    border-radius:20px;
    margin-left:5px;
    margin-top:3px;
    margin-right:5px;
}
#form-content{
    background-color:white;
    padding:20px 20px 20px 20px;
    border:4px solid black;
    border-radius:15px;
    width:900px;
    font-size:25px;
    margin-left:20%;
    margin-top:2%;
}
.btns{
    padding:5px 15px 5px 15px;
    background-color:rgb(69, 30, 176);
    color:white;
    border:1px solid black;
    border-radius:7px;
    font-size:18px;
}
.field{
    font-size:20px;
}
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
  align-items:center;
  visibility: hidden;
}


#myUL li label {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
  width:10%;
  float:left;
}

#myUL li label:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}

.joblabel{
  margin-left:10px;
  border: 1px solid black;
  border-radius: 10px;
  display:block;
  padding-left:7px;
  background-color:rgb(220, 220, 220);
  float:left;
}
#cancel{
  margin:2px 5px 0px 0px;
}
    </style>
</head>
<body>
<div class="navbar">
  <img src="resources/logotxt.png" id="logo" width="200px">
  <a href="#home" id="two">Jobs</a>
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
  <a href="dashboard2.php" id="back">Back</a>
</div>
    <br>
    <div id="form-content">
    <h3 style="text-align:center">POST A NEW JOB</h3><br>
    <form action="" method="post">
        What professional are you looking for?&nbsp&nbsp&nbsp&nbsp<input type="text" id="myInput"  onkeyup="myFunction()" placeholder="Search for names.." autocomplete="off">
<p ></p>
<div id="joblist">
  
</div><br><br>
        <ul id="myUL">
  <li><label  onclick="add('Animator')"> Animator</label></li>
  <li><label onclick="add('Academic Librarian')"> Academic Librarian</label></li>
  <li><label onclick="add('Billy')"> Billy</label></li>
  <li><label onclick="add('Bob')"> Bob</label></li>
  <li><label onclick="add('Calvin')"> Calvin</label></li>
  <li><label onclick="add('Christina')"> Christina</label></li>
  <li><label onclick="add('Cindy')"> Cindy</label></li>
</ul>

            
        </select><br><br>
        <p>Description</p><textarea rows="7" cols="40" name="description" ></textarea><br><br>
        Must be ready in:&nbsp<input type="number" name="months" placeholder="Months" class="field">&nbspAnd&nbsp<input type="number" name="days" placeholder="Days" class="field"><br><br>
        Pay:<input type="number" name="min_pay" placeholder="Minimum" class="field">&nbsp-&nbsp<input type="number" name="max_pay" placeholder="Maximum" class="field">&nbsp (in rupees)<br><br><br>
        <input type="submit" value="CANCEL" name="submit" style="margin-left:35%;" class="btns" >
        <input type="submit" value="POST" name="submit" style="margin-left:2%;" class="btns">
        
    </form>
</div>
    <?php
    
    require_once 'connection.php';
    //echo $_SESSION['mailid'];
    if(isset($_POST['submit'])){
        $skill=$_COOKIE['job'];
        $description=$_POST['description'];
        $months=$_POST['months'];
        $days=$_POST['days'];
        $min_pay=$_POST['min_pay'];
        $max_pay=$_POST['max_pay'];
        $conn=new mysqli($hn,$un,$pw,$db);
        $mailid=$_SESSION['mailid'];
        echo $mailid;
        if ($conn->connect_error) {
        die($conn->connect_error);
        }
        $query = "SELECT fid FROM freelancer where mailid='$mailid'";
        $result = $conn->query($query);
        if (!$result) {
        die ("Database access failed: " . $conn->error);
        }
        $rows = $result->num_rows;
        $result->data_seek(0);
        $row = $result->fetch_array(MYSQLI_NUM);
        $cid=$row[0];
        echo $cid;
    $query = "INSERT INTO jobs(cid,job_desc,category1,time_months,time_days,min_pay,max_pay) VALUES('$cid','$description','$skill',$months,$days,$min_pay,$max_pay)";
    
    
    $result = $conn->query($query);
    if($result){
        echo "Success!!";
    }
    else{
        echo "Failure!";
    }
    }
    ?>
    <script>
        const togglejobsearch = document.querySelector('#myInput');
        jobsearch = document.getElementById('myUL');
        togglejobsearch.addEventListener('click', function (e) {
    if(jobsearch.style.visibility=="visible"){
        jobsearch.style.visibility="hidden";
    }
    else{
        jobsearch.style.visibility="visible";
    }
});
window.onclick = function(c) {
  if ((!c.target.matches('#myInput'))&&(!c.target.matches('#myUL label'))) {
    jobsearch.style.visibility="hidden";
  }
}

function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("label")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

    var a=[];
    document.getElementById("joblist").innerHTML = a;
    function add(job){
      if(job<5){
        
        a.splice(job,1);
        var c="";
        for(var i=0;i<a.length;i++){
        c += "<div class='joblabel'><label >"+a[i]+"</label>&nbsp&nbsp<img class='cancel' id='"+i+"' onclick='add("+'this.id'+")' src='resources/cancel2.png' width='15px'></div>";     
      }
      document.getElementById("joblist").innerHTML=c;
      var b="";
    for(var i=0;i<a.length;i++){
        
        var b=b+a[i]+",";
        document.cookie = "job="+ b ;
    }
      }
      else{
    if((job!="")&&(!a.includes(job))&&(a.length<5)){ 
    a.push(job);
    var c="";
    for(var i=0;i<a.length;i++){
    c += "<div class='joblabel'><label >"+a[i]+"</label>&nbsp&nbsp<img class='cancel' id='"+i+"' onclick='add("+'this.id'+")' src='resources/cancel2.png' width='15px'></div>";
    
    }
    document.getElementById("joblist").innerHTML=c;
    var b="";
    for(var i=0;i<a.length;i++){
        if(i==a.length-1){
          var b=b+a[i];
        }
        else{
          var b=b+a[i]+",";
        }
        
        document.cookie = "job="+ b ;
    }
  }
  }
}

function reveal(){
    x=document.getElementById("myUL");
    if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
        </script>
</body>
</html>