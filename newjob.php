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
        What professional are you looking for?&nbsp&nbsp&nbsp&nbsp<select name="skill" class="field">
            <option value="Academic Librarian "> Academic Librarian </option>
            <option value="Accountant "> Accountant </option>
            <option value="Accounting Technician "> Accounting Technician </option>
            <option value="Actuary "> Actuary </option>
            <option value="Adult Nurse "> Adult Nurse </option>
            <option value="Advertising Account executive "> Advertising Account executive </option>
            <option value="Advertising Account planner "> Advertising Account planner </option>
            <option value="Advertising Copywriter "> Advertising Copywriter </option>
            <option value="Advice Worker "> Advice Worker </option>
            <option value="Aeronautical Engineer "> Aeronautical Engineer </option>
            <option value="Agricultural Consultant "> Agricultural Consultant </option>
            <option value="Agricultural Manager "> Agricultural Manager </option>
            <option value="Aid Worker/Humanitarian Worker "> Aid Worker/Humanitarian Worker </option>
            <option value="Air Traffic Controller "> Air Traffic Controller </option>
            <option value="Airline Cabin Crew "> Airline Cabin Crew </option>
            <option value="Amenity Horticulturist "> Amenity Horticulturist </option>
            <option value="Analytical Chemist "> Analytical Chemist </option>
            <option value="Animal Nutritionist "> Animal Nutritionist </option>
            <option value="Animator"> Animator </option>
            <option value="Archaeologist "> Archaeologist </option>
            <option value="Architect "> Architect </option>
            <option value="Architectural Technologist "> Architectural Technologist </option>
            <option value="Archivist "> Archivist </option>
            <option value="Armed Forces Officer "> Armed Forces Officer </option>
            <option value="AromaTherapist "> AromaTherapist </option>
            <option value="Art Therapist "> Art Therapist </option>
            <option value="Arts Administrator "> Arts Administrator </option>
            <option value="Auditor "> Auditor </option>
            <option value="Automotive Engineer "> Automotive Engineer </option>
            <option value="Barrister "> Barrister </option>
            <option value="Barrister's Clerk "> Barrister's Clerk </option>
            <option value="Bid Manager "> Bid Manager </option>
            <option value="Bilingual Secretary "> Bilingual Secretary </option>
            <option value="Biomedical Engineer "> Biomedical Engineer </option>
            <option value="Biomedical Scientist "> Biomedical Scientist </option>
            <option value="Biotechnologist "> Biotechnologist </option>
            <option value="Border Force Officer "> Border Force Officer </option>
            <option value="Brand Manager "> Brand Manager </option>
            <option value="Broadcasting Presenter "> Broadcasting Presenter </option>
            <option value="Building Control Officer/Surveyor "> Building Control Officer/Surveyor </option>
            <option value="Building Services Engineer "> Building Services Engineer </option>
            <option value="Building Surveyor "> Building Surveyor </option>
            <option value="Business Analyst "> Business Analyst </option>
            <option value="Camera Operator "> Camera Operator </option>
            <option value="Careers Adviser (Higher Education) "> Careers Adviser (Higher Education) </option>
            <option value="Careers Adviser "> Careers Adviser </option>
            <option value="Careers Consultant "> Careers Consultant </option>
            <option value="Cartographer "> Cartographer </option>
            <option value="Catering Manager "> Catering Manager </option>
            <option value="Charities Administrator "> Charities Administrator </option>
            <option value="Charities Fundraiser "> Charities Fundraiser </option>
            <option value="Chemical (Process) Engineer "> Chemical (Process) Engineer </option>
            <option value="Child PsychoTherapist "> Child PsychoTherapist </option>
            <option value="Children's Nurse "> Children's Nurse </option>
            <option value="Chiropractor "> Chiropractor </option>
            <option value="Civil Engineer "> Civil Engineer </option>
            <option value="Civil Service Administrator "> Civil Service Administrator </option>
            <option value="Clinical Biochemist "> Clinical Biochemist </option>
            <option value="Clinical Cytogeneticist "> Clinical Cytogeneticist </option>
            <option value="Clinical Microbiologist "> Clinical Microbiologist </option>
            <option value="Clinical Molecular Geneticist "> Clinical Molecular Geneticist </option>
            <option value="Clinical Research Associate "> Clinical Research Associate </option>
            <option value="Clinical Scientist "> Clinical Scientist </option>
            <option value="Clothing Technologist "> Clothing Technologist </option>
            <option value="Colour Technologist "> Colour Technologist </option>
            <option value="Commercial Airline Pilot "> Commercial Airline Pilot </option>
            <option value="Commercial Horticulturist "> Commercial Horticulturist </option>
            <option value="Commercial/Residential Surveyor "> Commercial/Residential Surveyor </option>
            <option value="Commissioning Editor "> Commissioning Editor </option>
            <option value="Commissioning Engineer "> Commissioning Engineer </option>
            <option value="Commodity Broker "> Commodity Broker </option>
            <option value="Communications Engineer "> Communications Engineer </option>
            <option value="Community Arts Worker "> Community Arts Worker </option>
            <option value="Community Education Officer "> Community Education Officer </option>
            <option value="Community Worker "> Community Worker </option>
            <option value="Company Secretary "> Company Secretary </option>
            <option value="Computer Sales Support "> Computer Sales Support </option>
            <option value="Computer Scientist "> Computer Scientist </option>
            <option value="Conference Organiser "> Conference Organiser </option>
            <option value="Consultant "> Consultant </option>
            <option value="Consumer Rights Adviser "> Consumer Rights Adviser </option>
            <option value="Control and Instrumentation Engineer "> Control and Instrumentation Engineer </option>
            <option value="Corporate Banker "> Corporate Banker </option>
            <option value="Corporate Treasurer "> Corporate Treasurer </option>
            <option value="Counsellor "> Counsellor </option>
            <option value="Court Reporter/Verbatim Reporter "> Court Reporter/Verbatim Reporter </option>
            <option value="Credit Analyst "> Credit Analyst </option>
            <option value="Crown Prosecution Service lawyer "> Crown Prosecution Service lawyer </option>
            <option value="Crystallographer "> Crystallographer </option>
            <option value="Curator "> Curator </option>
            <option value="Customs Officer "> Customs Officer </option>
            <option value="Cyber Security Specialist "> Cyber Security Specialist </option>
            <option value="Dance Movement PsychoTherapist "> Dance Movement PsychoTherapist </option>
            <option value="Data Analyst "> Data Analyst </option>
            <option value="Data Scientist "> Data Scientist </option>
            <option value="Data Visualisation Analyst "> Data Visualisation Analyst </option>
            <option value="Database Administrator "> Database Administrator </option>
            <option value="Debt/Dinance Adviser "> Debt/Dinance Adviser </option>
            <option value="Dental Hygienist "> Dental Hygienist </option>
            <option value="Dentist "> Dentist </option>
            <option value="Design Engineer "> Design Engineer </option>
            <option value="Design Manager (Construction) "> Design Manager (Construction) </option>
            <option value="DevOps Engineer "> DevOps Engineer </option>
            <option value="Dietitian "> Dietitian </option>
            <option value="Diplomatic Service "> Diplomatic Service </option>
            <option value="Doctor (GP) "> Doctor (GP) </option>
            <option value="Doctor (Hospital) "> Doctor (Hospital) </option>
            <option value="DramaTherapist "> DramaTherapist </option>
            <option value="Economist "> Economist </option>
            <option value="Editorial Assistant "> Editorial Assistant </option>
            <option value="Education Administrator "> Education Administrator </option>
            <option value="Electrical Engineer "> Electrical Engineer </option>
            <option value="Electronics Engineer "> Electronics Engineer </option>
            <option value="Employment Advice Worker "> Employment Advice Worker </option>
            <option value="Energy Conservation Officer "> Energy Conservation Officer </option>
            <option value="Energy Consultant "> Energy Consultant </option>
            <option value="Engineering Geologist "> Engineering Geologist </option>
            <option value="Environmental Education Officer "> Environmental Education Officer </option>
            <option value="Environmental Health Officer "> Environmental Health Officer </option>
            <option value="Environmental Manager "> Environmental Manager </option>
            <option value="Environmental Scientist "> Environmental Scientist </option>
            <option value="Equal Opportunities Officer "> Equal Opportunities Officer </option>
            <option value="Equality and Diversity Officer "> Equality and Diversity Officer </option>
            <option value="Ergonomist "> Ergonomist </option>
            <option value="Estate Agent "> Estate Agent </option>
            <option value="Estimator "> Estimator </option>
            <option value="European Commission Administrators "> European Commission Administrators </option>
            <option value="Exhibition Display Designer "> Exhibition Display Designer </option>
            <option value="Exhibition Organiser "> Exhibition Organiser </option>
            <option value="Exploration Geologist "> Exploration Geologist </option>
            <option value="Facilities Manager "> Facilities Manager </option>
            <option value="Field Trials Officer "> Field Trials Officer </option>
            <option value="Financial Manager "> Financial Manager </option>
            <option value="Fire Engineer "> Fire Engineer </option>
            <option value="Firefighter "> Firefighter </option>
            <option value="Fisheries Enforcement Officer "> Fisheries Enforcement Officer </option>
            <option value="Fitness Centre Manager "> Fitness Centre Manager </option>
            <option value="Food Scientist "> Food Scientist </option>
            <option value="Food Technologist "> Food Technologist </option>
            <option value="Forensic Scientist "> Forensic Scientist </option>
            <option value="Freight Forwarder "> Freight Forwarder </option>
            <option value="Geneticist "> Geneticist </option>
            <option value="Geographical Information Systems Manager "> Geographical Information Systems Manager </option>
            <option value="Geomatics/Land Surveyor "> Geomatics/Land Surveyor </option>
            <option value="Government Lawyer "> Government Lawyer </option>
            <option value="Government Research Officer "> Government Research Officer </option>
            <option value="Graphic Designer "> Graphic Designer </option>
            <option value="Health and Safety Adviser "> Health and Safety Adviser </option>
            <option value="Health and Safety Inspector "> Health and Safety Inspector </option>
            <option value="Health Promotion Specialist "> Health Promotion Specialist </option>
            <option value="Health Service Manager "> Health Service Manager </option>
            <option value="Health Visitor "> Health Visitor </option>
            <option value="Herbalist "> Herbalist </option>
            <option value="Heritage Manager "> Heritage Manager </option>
            <option value="Higher Education Administrator "> Higher Education Administrator </option>
            <option value="Higher Education Advice Worker "> Higher Education Advice Worker </option>
            <option value="Homeless Support Worker "> Homeless Support Worker </option>
            <option value="Horticultural Consultant "> Horticultural Consultant </option>
            <option value="Hotel Manager "> Hotel Manager </option>
            <option value="Housing Adviser "> Housing Adviser </option>
            <option value="Human Resources Officer "> Human Resources Officer </option>
            <option value="Hydrologist "> Hydrologist </option>
            <option value="Illustrator "> Illustrator </option>
            <option value="Immigration Officer "> Immigration Officer </option>
            <option value="Immunologist "> Immunologist </option>
            <option value="Industrial/Product Designer "> Industrial/Product Designer </option>
            <option value="Information Scientist "> Information Scientist </option>
            <option value="Information Systems Manager "> Information Systems Manager </option>
            <option value="Information Technology/Software Trainers "> Information Technology/Software Trainers </option>
            <option value="Insurance Broker "> Insurance Broker </option>
            <option value="Insurance Claims Inspector "> Insurance Claims Inspector </option>
            <option value="Insurance Risk Surveyor "> Insurance Risk Surveyor </option>
            <option value="Insurance Underwriter "> Insurance Underwriter </option>
            <option value="Interpreter "> Interpreter </option>
            <option value="Investment Analyst "> Investment Analyst </option>
            <option value="Investment Banker - Corporate Finance "> Investment Banker - Corporate Finance </option>
            <option value="Investment Banker - Operations "> Investment Banker - Operations </option>
            <option value="Investment FUnd Manager "> Investment FUnd Manager </option>
            <option value="IT Consultant "> IT Consultant </option>
            <option value="IT Support Analyst "> IT Support Analyst </option>
            <option value="Journalist "> Journalist </option>
            <option value="Laboratory Technician "> Laboratory Technician </option>
            <option value="Land-based Engineer "> Land-based Engineer </option>
            <option value="Landscape Architect "> Landscape Architect </option>
            <option value="Learning Disability Nurse "> Learning Disability Nurse </option>
            <option value="Learning Mentor "> Learning Mentor </option>
            <option value="Lecturer (Adult Education) "> Lecturer (Adult Education) </option>
            <option value="Lecturer (Further Education) "> Lecturer (Further Education) </option>
            <option value="Lecturer (Higher Education) "> Lecturer (Higher Education) </option>
            <option value="Legal Executive "> Legal Executive </option>
            <option value="Leisure Centre Manager "> Leisure Centre Manager </option>
            <option value="Licensed Conveyancer "> Licensed Conveyancer </option>
            <option value="Local Government administrator "> Local Government administrator </option>
            <option value="Local Government lawyer "> Local Government lawyer </option>
            <option value="Logistics/Distribution Manager "> Logistics/Distribution Manager </option>
            <option value="Magazine Features Editor "> Magazine Features Editor </option>
            <option value="Magazine Journalist "> Magazine Journalist </option>
            <option value="Maintenance Engineer "> Maintenance Engineer </option>
            <option value="Management accountant "> Management accountant </option>
            <option value="Manufacturing Engineer "> Manufacturing Engineer </option>
            <option value="Manufacturing Machine Operator "> Manufacturing Machine Operator </option>
            <option value="Manufacturing Toolmaker "> Manufacturing Toolmaker </option>
            <option value="Marine Scientist "> Marine Scientist </option>
            <option value="Market Research Analyst "> Market Research Analyst </option>
            <option value="Market Research Executive "> Market Research Executive </option>
            <option value="Marketing Assistant "> Marketing Assistant </option>
            <option value="Marketing Executive "> Marketing Executive </option>
            <option value="Marketing Manager (Direct) "> Marketing Manager (Direct) </option>
            <option value="Marketing Manager (Social Media) "> Marketing Manager (Social Media) </option>
            <option value="Materials Engineer "> Materials Engineer </option>
            <option value="Materials Specialist "> Materials Specialist </option>
            <option value="Mechanical Engineer "> Mechanical Engineer </option>
            <option value="Media Analyst "> Media Analyst </option>
            <option value="Media Buyer "> Media Buyer </option>
            <option value="Media Planner "> Media Planner </option>
            <option value="Medical Physicist "> Medical Physicist </option>
            <option value="Medical Representative "> Medical Representative </option>
            <option value="Mental Health Nurse "> Mental Health Nurse </option>
            <option value="Metallurgist "> Metallurgist </option>
            <option value="Meteorologist "> Meteorologist </option>
            <option value="Microbiologist "> Microbiologist </option>
            <option value="Midwife "> Midwife </option>
            <option value="Mining Engineer "> Mining Engineer </option>
            <option value="Mobile Developer "> Mobile Developer </option>
            <option value="Multimedia Programmer "> Multimedia Programmer </option>
            <option value="Multimedia Specialists "> Multimedia Specialists </option>
            <option value="Museum Education Officer "> Museum Education Officer </option>
            <option value="Museum/Gallery Exhibition Officer "> Museum/Gallery Exhibition Officer </option>
            <option value="Music Therapist "> Music Therapist </option>
            <option value="Nanoscientist "> Nanoscientist </option>
            <option value="Nature Conservation Officer "> Nature Conservation Officer </option>
            <option value="Naval Architect "> Naval Architect </option>
            <option value="Network Administrator "> Network Administrator </option>
            <option value="Nurse "> Nurse </option>
            <option value="Nutritional Therapist "> Nutritional Therapist </option>
            <option value="Nutritionist "> Nutritionist </option>
            <option value="Occupational Therapist "> Occupational Therapist </option>
            <option value="Oceanographer "> Oceanographer </option>
            <option value="Office Manager "> Office Manager </option>
            <option value="Operational Researcher "> Operational Researcher </option>
            <option value="Orthoptist "> Orthoptist </option>
            <option value="Outdoor Pursuits Manager "> Outdoor Pursuits Manager </option>
            <option value="Packaging Technologist "> Packaging Technologist </option>
            <option value="Paramedic "> Paramedic </option>
            <option value="Patent Attorney "> Patent Attorney </option>
            <option value="Patent Examiner "> Patent Examiner </option>
            <option value="Pension Scheme Manager "> Pension Scheme Manager </option>
            <option value="Personal Assistant "> Personal Assistant </option>
            <option value="Petroleum Engineer "> Petroleum Engineer </option>
            <option value="Pharmacist "> Pharmacist </option>
            <option value="Pharmacologist "> Pharmacologist </option>
            <option value="Pharmacovigilance Officer "> Pharmacovigilance Officer </option>
            <option value="Photographer "> Photographer </option>
            <option value="PhysioTherapist "> PhysioTherapist </option>
            <option value="Picture Researcher "> Picture Researcher </option>
            <option value="Planning and Development Surveyor "> Planning and Development Surveyor </option>
            <option value="Planning Technician "> Planning Technician </option>
            <option value="Plant Breeder "> Plant Breeder </option>
            <option value="Police Officer "> Police Officer </option>
            <option value="Political Party Agent "> Political Party Agent </option>
            <option value="Political Researcher "> Political Researcher </option>
            <option value="Practice nurse "> Practice nurse </option>
            <option value="Press Photographer "> Press Photographer </option>
            <option value="Press Sub-editor "> Press Sub-editor </option>
            <option value="Prison Officer "> Prison Officer </option>
            <option value="Private Music Teacher "> Private Music Teacher </option>
            <option value="Probation Officer "> Probation Officer </option>
            <option value="Product Development Scientist "> Product Development Scientist </option>
            <option value="Production Manager "> Production Manager </option>
            <option value="Programme Researcher "> Programme Researcher </option>
            <option value="Project Manager "> Project Manager </option>
            <option value="Psychologist (Clinical) "> Psychologist (Clinical) </option>
            <option value="Psychologist (Educational) "> Psychologist (Educational) </option>
            <option value="PsychoTherapist "> PsychoTherapist </option>
            <option value="Public Affairs Consultant (Lobbyist) "> Public Affairs Consultant (Lobbyist) </option>
            <option value="Public Affairs Consultant (Research) "> Public Affairs Consultant (Research) </option>
            <option value="Public House Manager "> Public House Manager </option>
            <option value="Public Librarian "> Public Librarian </option>
            <option value="Public Relations (PR) Officer "> Public Relations (PR) Officer </option>
            <option value="QA Analyst "> QA Analyst </option>
            <option value="Quality Assurance Manager "> Quality Assurance Manager </option>
            <option value="Quantity Surveyor "> Quantity Surveyor </option>
            <option value="Records Manager "> Records Manager </option>
            <option value="Recruitment Consultant "> Recruitment Consultant </option>
            <option value="Recycling Officer "> Recycling Officer </option>
            <option value="Regulatory Affairs Officer "> Regulatory Affairs Officer </option>
            <option value="Research Chemist "> Research Chemist </option>
            <option value="Research Scientist "> Research Scientist </option>
            <option value="Restaurant Manager "> Restaurant Manager </option>
            <option value="Retail Banker "> Retail Banker </option>
            <option value="Retail Buyer "> Retail Buyer </option>
            <option value="Retail Manager "> Retail Manager </option>
            <option value="Retail Merchandiser "> Retail Merchandiser </option>
            <option value="Retail Pharmacist "> Retail Pharmacist </option>
            <option value="Sales Executive "> Sales Executive </option>
            <option value="Scene of Crime Officer "> Scene of Crime Officer </option>
            <option value="Secretary "> Secretary </option>
            <option value="Seismic Interpreter "> Seismic Interpreter </option>
            <option value="Site Engineer "> Site Engineer </option>
            <option value="Site Manager "> Site Manager </option>
            <option value="Social Researcher "> Social Researcher </option>
            <option value="Social Worker "> Social Worker </option>
            <option value="Software Developer "> Software Developer </option>
            <option value="Software Engineer "> Software Engineer </option>
            <option value="Soil Scientist "> Soil Scientist </option>
            <option value="Solicitor "> Solicitor </option>
            <option value="Speech and Language Therapist "> Speech and Language Therapist </option>
            <option value="Sports Coach "> Sports Coach </option>
            <option value="Sports Development Officer "> Sports Development Officer </option>
            <option value="Sports Therapist "> Sports Therapist </option>
            <option value="Statistician "> Statistician </option>
            <option value="Stockbroker "> Stockbroker </option>
            <option value="Structural Engineer "> Structural Engineer </option>
            <option value="Systems Analyst "> Systems Analyst </option>
            <option value="Systems Developer "> Systems Developer </option>
            <option value="Tax Inspector "> Tax Inspector </option>
            <option value="Teacher (Nursery Years) "> Teacher (Nursery Years) </option>
            <option value="Teacher (Primary) "> Teacher (Primary) </option>
            <option value="Teacher (Secondary) "> Teacher (Secondary) </option>
            <option value="Teacher (Special Educational Needs) "> Teacher (Special Educational Needs) </option>
            <option value="Teaching/Classroom Assistant "> Teaching/Classroom Assistant </option>
            <option value="Technical Author "> Technical Author </option>
            <option value="Technical Sales Engineer "> Technical Sales Engineer </option>
            <option value="TEFL/TESL Teacher "> TEFL/TESL Teacher </option>
            <option value="Television Production Assistant "> Television Production Assistant </option>
            <option value="Test Automation Developer "> Test Automation Developer </option>
            <option value="Tour Guide "> Tour Guide </option>
            <option value="Tour Operator "> Tour Operator </option>
            <option value="Tour/Holiday Representative "> Tour/Holiday Representative </option>
            <option value="Tourism Officer "> Tourism Officer </option>
            <option value="Tourist Information Manager "> Tourist Information Manager </option>
            <option value="Town and Country Planner "> Town and Country Planner </option>
            <option value="Toxicologist "> Toxicologist </option>
            <option value="Trade Union Official "> Trade Union Official </option>
            <option value="Trade Union Research Officer "> Trade Union Research Officer </option>
            <option value="Trader "> Trader </option>
            <option value="Trading Standards Officer "> Trading Standards Officer </option>
            <option value="Training and Development Officer "> Training and Development Officer </option>
            <option value="Translator "> Translator </option>
            <option value="Transportation Planner "> Transportation Planner </option>
            <option value="Travel Agent "> Travel Agent </option>
            <option value="TV/Film/Theatre Set Designer "> TV/Film/Theatre Set Designer </option>
            <option value="UX Designer "> UX Designer </option>
            <option value="Validation Engineer "> Validation Engineer </option>
            <option value="Veterinary Nurse "> Veterinary Nurse </option>
            <option value="Veterinary Surgeon "> Veterinary Surgeon </option>
            <option value="Video Game Designer "> Video Game Designer </option>
            <option value="Video Game Developer "> Video Game Developer </option>
            <option value="Volunteer Work Organiser "> Volunteer Work Organiser </option>
            <option value="Waste Management Officer "> Waste Management Officer </option>
            <option value="Water Conservation Officer "> Water Conservation Officer </option>
            <option value="Water Engineer "> Water Engineer </option>
            <option value="Web Designer "> Web Designer </option>
            <option value="Web Developer "> Web Developer </option>
            <option value="Welfare Rights Adviser "> Welfare Rights Adviser </option>
            <option value="Writer "> Writer </option>
            <option value="Youth Worker "> Youth Worker </option>

            
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
        $skill=$_POST['skill'];
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
        function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
        </script>
</body>
</html>