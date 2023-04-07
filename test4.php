<html>
    <head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.php">
        
            </head>
<body style="background: url(resources/'<?php echo $selectedBg; ?>');">
<?php
$bg = array('dashboard1.jpeg', 'dashboard2.jpg', 'dashboard5.jpg', 'dashboard4.jpg'); // array of filenames

$i = rand(0, count($bg)-1);
echo $i; // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
echo $selectedBg;
?>
<div style="background: url(resources/'<?php echo $selectedBg; ?>');"></div>
</body>
</html>