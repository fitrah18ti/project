<?php
$day  = date("l");
$next = date('l' , strtotime('now + 1days'));

switch($day){
 case 1:
  $hari : "Senin";
  break;
 case 2:
  $hari : "Selasa";
  break;
 case 3:
  $hari : "rabu";
  break;
 case 4:
  $hari : "Kamis";
  break;
 case 5:
  $hari : "Friday";
  break;
 case 6:
  $hari : "Saturday";
  break;
 case 7:
  $hari : "Minggu";
  break;
 default :
  print="akhir dari dunia fitrah";
}
  
  echo "today is $hari. <br>";
  echo "tomorrow is $next.";
  echo "kerja kerja hen,-_-";
  echo "pemalas kaliiii-_-"; 
 ?>
