<?php 
function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
  $mydir = 'sample_files'; 
  
  $myfiles = array_diff(scandir($mydir), array()); 

  $arrdb=array("0freelancer10building.jpg");
  $arrfe=array();
  //print_r($myfiles); 
  for($i=0;$i<=sizeof($myfiles)-1;$i++){
    if(startsWith("$myfiles[$i]","0freelancer")){
      array_push($arrfe,$myfiles[$i]);
      echo $myfiles[$i];
    }
  }
  
  $arrreq=array_diff($arrfe,$arrdb);
  print_r($arrreq);
  for($i=1;$i<=sizeof($arrreq);$i++){
    unlink("C:/xampp reloaded/htdocs/project/sample_files/".$arrreq[$i]);
  }
?> 
