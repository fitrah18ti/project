<?php
$day  = date("l");
$next = date('l' , strtotime('now + 1days'));

switch($day){
 case 1:
  $hari : "Monday";
  break;
 case 2:
  $hari : "Tuesday";
  break;
  case 3:
  $hari : "Wednesday";
  break;
 case 4:
  $hari : "Thursday";
  break;
 case 5:
  $hari : "Friday";
  break;
 case 6:
  $hari : "Saturday";
  break;
 case 7:
  $hari : "Sunday";
  break;
 default :
  print("End of the world");  
  
  echo "today is $hari. <br>";
  echo "tomorrow is $next.";
  
 ?>
