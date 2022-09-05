<?php
 
 echo "Esto es una cadena de texto";
 echo "<br>";

 $a = "Jesus";
 $b = "Samuel";

 echo "$a +' esta jugando con ' + $b ";
 echo "<br>";

$a = "Hello F";
$b = $a . "Yeah";
echo $b;
echo "<br>";

function tab($instring="",$topos=0){
    if(strlen($instring)<$topos){
      $result=str_pad($instring,$topos-1," ",STR_PAD_RIGHT);
    }else{
      $result=substr($instring,0,$topos-1);
    }
    return $result;
  }
 
  $pline="String with this tab to 50 and";
  $tline=tab($pline,50)."finish it.";
  echo $tline.PHP_EOL;
  $pline="101010101020202020203030303030404040404050505050506060606060";
  $tline=tab($pline,50)."finish it.";
  echo $tline.PHP_EOL;
  
  echo "<br>";

$str = 'abcdef';
echo strlen($str);
echo "<br>";

echo strtoupper($str);
echo "<br>";

strtoupper($str);
echo "<br>";

echo substr("Hello world",6);
echo "<br>";



?>