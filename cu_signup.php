<?php
session_start();
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
        <style>
            #maina{
    text-align:right;
    margin-top: 50px;
    padding-right:80px;
}
#wholea{
    border:1px solid black;
    border-radius: 20px;
    width:500px;
    background-repeat: no-repeat;
    background-size: 495px 600px ;
    background-color:white;
    opacity: 75%;
    margin-top: 50px;
    
}
#whole{
    background-color:rgba(255,255,255,0.8);
    width:50%;
    border-radius: 20px;
    margin-top: 50px;
    padding-top:25px;
}
#sub{
    border-color:black;
    border-radius: 2px;
    border: 1px solid;
    padding: 7px 150px 7px 150px;
    font-size:20px;
    background-color: rgb(56, 70, 169);
    color:white;
}
body{
    background-image:url("resources/backgrounds_9.jpg");
        backdrop-filter: blur(3px);
        margin:0px 0px 0px 0px;
}
.field{
    font-size:18px;
    padding:5px 25px 5px 1px;
    border:1px solid;
    border-radius:5px;
    width:250px;
    margin-left:0px;
}
#op{
    color:black;
}
#login{
  text-decoration:none;
  color:black;
  font-size:20px;
  width: 75px;
  background-color: rgba(255,255,255,0.5);
  border-radius:10px;
  padding:5px 5px 5px 7px;
  margin-top:20px;
}
#login:hover{
    background-color: rgba(255, 255, 255,0.8);
}
#login:active {
  background-color: rgba(255,255,255,0.5);
  box-shadow: 0 5px rgba(0,0,0,0.5);
  transform: translateY(4px);
}
#bar{
  height:75px;
  background-color: #333;
  width:100%;
}
#logo{
    width: 200px;
    margin-left:70px;
    margin-top: 8px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: ;
}


li a {
  display: block;
  
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  background-color:rgb(0, 82, 181);
}

.code{
  font-size:18px;
    padding:5px 0px 5px 0px;
    border:1px solid;
    border-radius:5px;
    width:40px;
    margin-right:0px;
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
form{
    padding-left:50px;
}
@media only screen and (max-width: 600px) {
    #log{
         width:80%;
         
         margin-top:10px;
        }
    #logo{
        margin-left:20px;
    }
    .field{
      width: 150px;
    }
    form{
      padding-left:10px;
    }
    }
            </style>
</head>
<body>
    <ul id="bar">
    
        <li style="float:left"> <img src="resources/logotxt.png" id="logo"></li>
     <li style="float:right; margin-right:10%;"><a href="Login.php" id="login"><b>Sign in</b></a></li>
     </ul>
    <center>
    <div id="whole">
    <div id="main">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <center><h2>SIGN UP</h2></center><br>
        First Name:&nbsp&nbsp&nbsp<input type="text" name="fna" class="field" required><br><br>
        Last Name:&nbsp&nbsp&nbsp<input type="text" name="lna" class="field" required><br><br>
        Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="mail" class="field" required><br><br>


        Country:&nbsp&nbsp&nbsp&nbsp
        <select name="country"  class="field" required>
        <option value=None style="text-align:center">---Select---</option>
        <option value=Afghanistan>Afghanistan</option>
<option value=Albania>Albania</option>
<option value=Algeria>Algeria</option>
<option value=Andorra>Andorra</option>
<option value=Angola>Angola</option>
<option value=Anguilla>Anguilla</option>
<option value=Antigua &amp; Barbuda>Antigua &amp; Barbuda</option>
<option value=Argentina>Argentina</option>
<option value=Armenia>Armenia</option>
<option value=Aruba>Aruba</option>
<option value=Australia>Australia</option>
<option value=Austria>Austria</option>
<option value=Azerbaijan>Azerbaijan</option>
<option value=Bahamas>Bahamas</option>
<option value=Bahrain>Bahrain</option>
<option value=Bangladesh>Bangladesh</option>
<option value=Barbados>Barbados</option>
<option value=Belarus>Belarus</option>
<option value=Belgium>Belgium</option>
<option value=Belize>Belize</option>
<option value=Benin>Benin</option>
<option value=Bermuda>Bermuda</option>
<option value=Bhutan>Bhutan</option>
<option value=Bolivia>Bolivia</option>
<option value=Bosnia &amp; Herzegovina>Bosnia &amp; Herzegovina</option>
<option value=Botswana>Botswana</option>
<option value=Brazil>Brazil</option>
<option value=British Virgin Islands>British Virgin Islands</option>
<option value=Brunei>Brunei</option>
<option value=Bulgaria>Bulgaria</option>
<option value=Burkina Faso>Burkina Faso</option>
<option value=Burundi>Burundi</option>
<option value=Cambodia>Cambodia</option>
<option value=Cameroon>Cameroon</option>
<option value=Cape Verde>Cape Verde</option>
<option value=Cayman Islands>Cayman Islands</option>
<option value=Chad>Chad</option>
<option value=Chile>Chile</option>
<option value=China>China</option>
<option value=Colombia>Colombia</option>
<option value=Congo>Congo</option>
<option value=Cook Islands>Cook Islands</option>
<option value=Costa Rica>Costa Rica</option>
<option value=Cote D Ivoire>Cote D Ivoire</option>
<option value=Croatia>Croatia</option>
<option value=Cruise Ship>Cruise Ship</option>
<option value=Cuba>Cuba</option>
<option value=Cyprus>Cyprus</option>
<option value=Czech Republic>Czech Republic</option>
<option value=Denmark>Denmark</option>
<option value=Djibouti>Djibouti</option>
<option value=Dominica>Dominica</option>
<option value=Dominican Republic>Dominican Republic</option>
<option value=Ecuador>Ecuador</option>
<option value=Egypt>Egypt</option>
<option value=El Salvador>El Salvador</option>
<option value=Equatorial Guinea>Equatorial Guinea</option>
<option value=Estonia>Estonia</option>
<option value=Ethiopia>Ethiopia</option>
<option value=Falkland Islands>Falkland Islands</option>
<option value=Faroe Islands>Faroe Islands</option>
<option value=Fiji>Fiji</option>
<option value=Finland>Finland</option>
<option value=France>France</option>
<option value=French Polynesia>French Polynesia</option>
<option value=French West Indies>French West Indies</option>
<option value=Gabon>Gabon</option>
<option value=Gambia>Gambia</option>
<option value=Georgia>Georgia</option>
<option value=Germany>Germany</option>
<option value=Ghana>Ghana</option>
<option value=Gibraltar>Gibraltar</option>
<option value=Greece>Greece</option>
<option value=Greenland>Greenland</option>
<option value=Grenada>Grenada</option>
<option value=Guam>Guam</option>
<option value=Guatemala>Guatemala</option>
<option value=Guernsey>Guernsey</option>
<option value=Guinea>Guinea</option>
<option value=Guinea Bissau>Guinea Bissau</option>
<option value=Guyana>Guyana</option>
<option value=Haiti>Haiti</option>
<option value=Honduras>Honduras</option>
<option value=Hong Kong>Hong Kong</option>
<option value=Hungary>Hungary</option>
<option value=Iceland>Iceland</option>
<option value=India>India</option>
<option value=Indonesia>Indonesia</option>
<option value=Iran>Iran</option>
<option value=Iraq>Iraq</option>
<option value=Ireland>Ireland</option>
<option value=Isle of Man>Isle of Man</option>
<option value=Israel>Israel</option>
<option value=Italy>Italy</option>
<option value=Jamaica>Jamaica</option>
<option value=Japan>Japan</option>
<option value=Jersey>Jersey</option>
<option value=Jordan>Jordan</option>
<option value=Kazakhstan>Kazakhstan</option>
<option value=Kenya>Kenya</option>
<option value=Kuwait>Kuwait</option>
<option value=Kyrgyz Republic>Kyrgyz Republic</option>
<option value=Laos>Laos</option>
<option value=Latvia>Latvia</option>
<option value=Lebanon>Lebanon</option>
<option value=Lesotho>Lesotho</option>
<option value=Liberia>Liberia</option>
<option value=Libya>Libya</option>
<option value=Liechtenstein>Liechtenstein</option>
<option value=Lithuania>Lithuania</option>
<option value=Luxembourg>Luxembourg</option>
<option value=Macau>Macau</option>
<option value=Macedonia>Macedonia</option>
<option value=Madagascar>Madagascar</option>
<option value=Malawi>Malawi</option>
<option value=Malaysia>Malaysia</option>
<option value=Maldives>Maldives</option>
<option value=Mali>Mali</option>
<option value=Malta>Malta</option>
<option value=Mauritania>Mauritania</option>
<option value=Mauritius>Mauritius</option>
<option value=Mexico>Mexico</option>
<option value=Moldova>Moldova</option>
<option value=Monaco>Monaco</option>
<option value=Mongolia>Mongolia</option>
<option value=Montenegro>Montenegro</option>
<option value=Montserrat>Montserrat</option>
<option value=Morocco>Morocco</option>
<option value=Mozambique>Mozambique</option>
<option value=Namibia>Namibia</option>
<option value=Nepal>Nepal</option>
<option value=Netherlands>Netherlands</option>
<option value=Netherlands Antilles>Netherlands Antilles</option>
<option value=New Caledonia>New Caledonia</option>
<option value=New Zealand>New Zealand</option>
<option value=Nicaragua>Nicaragua</option>
<option value=Niger>Niger</option>
<option value=Nigeria>Nigeria</option>
<option value=Norway>Norway</option>
<option value=Oman>Oman</option>
<option value=Pakistan>Pakistan</option>
<option value=Palestine>Palestine</option>
<option value=Panama>Panama</option>
<option value=Papua New Guinea>Papua New Guinea</option>
<option value=Paraguay>Paraguay</option>
<option value=Peru>Peru</option>
<option value=Philippines>Philippines</option>
<option value=Poland>Poland</option>
<option value=Portugal>Portugal</option>
<option value=Puerto Rico>Puerto Rico</option>
<option value=Qatar>Qatar</option>
<option value=Reunion>Reunion</option>
<option value=Romania>Romania</option>
<option value=Russia>Russia</option>
<option value=Rwanda>Rwanda</option>
<option value=Saint Pierre &amp; Miquelon>Saint Pierre &amp; Miquelon</option>
<option value=Samoa>Samoa</option>
<option value=San Marino>San Marino</option>
<option value=Satellite>Satellite</option>
<option value=Saudi Arabia>Saudi Arabia</option>
<option value=Senegal>Senegal</option>
<option value=Serbia>Serbia</option>
<option value=Seychelles>Seychelles</option>
<option value=Sierra Leone>Sierra Leone</option>
<option value=Singapore>Singapore</option>
<option value=Slovakia>Slovakia</option>
<option value=Slovenia>Slovenia</option>
<option value=South Africa>South Africa</option>
<option value=South Korea>South Korea</option>
<option value=Spain>Spain</option>
<option value=Sri Lanka>Sri Lanka</option>
<option value=St Kitts &amp; Nevis>St Kitts &amp; Nevis</option>
<option value=St Lucia>St Lucia</option>
<option value=St Vincent>St Vincent</option>
<option value=St. Lucia>St. Lucia</option>
<option value=Sudan>Sudan</option>
<option value=Suriname>Suriname</option>
<option value=Swaziland>Swaziland</option>
<option value=Sweden>Sweden</option>
<option value=Switzerland>Switzerland</option>
<option value=Syria>Syria</option>
<option value=Taiwan>Taiwan</option>
<option value=Tajikistan>Tajikistan</option>
<option value=Tanzania>Tanzania</option>
<option value=Thailand>Thailand</option>
<option value=TimorLEste>Timor L'Este</option>
<option value=Togo>Togo</option>
<option value=Tonga>Tonga</option>
<option value=Trinidad &amp; Tobago>Trinidad &amp; Tobago</option>
<option value=Tunisia>Tunisia</option>
<option value=Turkey>Turkey</option>
<option value=Turkmenistan>Turkmenistan</option>
<option value=Turks &amp; Caicos>Turks &amp; Caicos</option>
<option value=Uganda>Uganda</option>
<option value=Ukraine>Ukraine</option>
<option value=United Arab Emirates>United Arab Emirates</option>
<option value=United Kingdom>United Kingdom</option>
<option value=Uruguay>Uruguay</option>
<option value=Uzbekistan>Uzbekistan</option>
<option value=Venezuela>Venezuela</option>
<option value=Vietnam>Vietnam</option>
<option value=Virgin Islands (US)>Virgin Islands (US)</option>
<option value=Yemen>Yemen</option>
<option value=Zambia>Zambia</option>
<option value=Zimbabwe>Zimbabwe</option>

</select><br><br><br>

        Phone:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="phone" class="field" placeholder="Without country code" required><br><br>
        Password:&nbsp&nbsp&nbsp<input type="password" name="pass" class="field" id="id_password" required><img src="resources/eye.png" width="20px" class="far fa-eye" id="togglePassword" style="cursor: pointer; margin-right:0px;"><br><br><br>
        Re-enter Password:&nbsp&nbsp&nbsp<input type="password" name="pass2" class="field" id="id_password1" required><br><br><br>

        Security Question:&nbsp&nbsp&nbsp&nbsp<select name="question" id="question" class="field" required>
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

        <center>
        <input type="submit" name="submit" value="SUBMIT" id="sub"><br><br>
  </center>
        Already have an account ?&nbsp<a href="http://localhost/project/Login.php">Sign in</a><br><br>

</form>




<?php
require_once 'connection.php';
if(isset($_POST['submit'])&& isset($_SESSION['customer'])){
    $fna=$_POST['fna'];
    $lna=$_POST['lna'];
    $mail=$_POST['mail'];
    $country=$_POST['country'];
    $country1=strtoupper($country)."%";
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $question=$_POST['question'];
    $answer=$_POST['answer'];
    $phone=$_POST['phone'];
    //$code=$_POST['code'];
    $encryptans=md5($answer);
    $encryptques=md5($question);
    if($pass!=$pass2){
        echo "Re-enter the same password";
    }
    else{
    $encrypt=md5($pass);
    $encrypts=password_hash($pass, PASSWORD_DEFAULT);
    $conn=new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error){
        die($conn->connect_error);

    }
    $check="SELECT * FROM customer WHERE mailid='$mail'";   
    $query1="SELECT phone FROM countries WHERE UPPER(name) LIKE '$country1'"; 
    $result1=$conn->query($query1);
    if($result1){
    $rows1=$result1->num_rows;
    $result1->data_seek(0);
    }
    else{
      echo "Error code";
    }
    if($rows1>0){
      $row1 = $result1->fetch_array(MYSQLI_NUM);
      $code= $row1[0];
      echo "Code extracted";
    }
    $check_res= $conn->query($check);
    $check_row=$check_res->num_rows;
    if ($check_row>0){
        echo "<div id=op>Account already exists!</div>";
    }
    else{
    $query = "INSERT INTO customer(fname,lname,mailid,code,phone,country,pw,question,answer,img) VALUES('$fna','$lna','$mail','$code',$phone,'$country','$encrypt','$encryptques','$encryptans','./uploaded_files/user.png')";
    $result = $conn->query($query);
    if (!$result){
         die ("Database access failed: " . $conn->error);
    }
    else{
        echo "<div id=op>Success!</div>";
    }
}
    }
}  
?>
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

</div>
</center></center>

</body>
</html>