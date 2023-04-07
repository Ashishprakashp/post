<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="dashboard.css">
    </head>
<body>
<div id="head">
    
<ul>
    <li><a class="lia"><img src="resources/logotxt.png" id="logo""></a></li>
    <li  id="first"><a href="news.asp" class="lia"><img src="resources/JOBS.png"></a></li>
    <!--<li ><a href="user.php" class="lia"><img src="resources/user.png" id="user"></a></li>-->
    <li><select onclick="disable()"><img src="resources/user.png" id="user">
        <option id="ub" >User</option>
<option><a href="user.php" class="lia">profile</a></option>
<option><a href="user.php" class="lia">Logout</a></option>
</select></li>
  </ul>

  
</div>
<ul id="content">
<li class="content"><div id="newjob">
    <ul>
        <li><h2 id="newbtn">POST A NEW JOB&nbsp&nbsp<img src="resources/down-arrow.png"></h2></li>
        <li><br><h2 id="createbtn">Create<br><img src="resources/plus.png" id="plus"></h2></li>
        <li><h2 id="editbtn">Edit Existing<br><img src="resources/edit.png" id="edit" height="30px"></h2></li>
    </ul>
</div></li>
<li class="content"><div id="feedback">
    <ul>
        <li><h2 id="feed">Feedback</h2></li>
        <li><a id="createfeed" href="">Click here to create one...</a></li>
    </ul>
</div></li>
<li>
    <div id="search">

    </div>
</li>
</ul>
<script>
    function disable(){
        document.getElementById("ub").disabled = true;
    }
    function user(){
        location.href = "user.php";
    }
    </script>
</body>
</html>