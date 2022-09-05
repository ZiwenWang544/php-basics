<?php

$a = 3;
$b = 2;
$c = $a + $b;

echo "respuestas es $c" ;
echo "<br>";
$d = $a - $b;

echo "respuestas es $d";
echo "<br>";
$e = $a * $b;

echo $e;
echo "<br>";
$f = $a/$b;

echo $f;
echo "<br>";
$g = $a % $b;

echo $g;
echo "<br>";



var_dump(1==2);
echo "<br>";
var_dump(1!=2);
echo "<br>";
var_dump(1<2);
echo "<br>";
var_dump(2>1);
echo "<br>";
var_dump(1<=2);
echo "<br>";
var_dump(1>=2);
echo "<br>";




$boolen = true && false;
var_dump($boolen);
echo "<br>";
$booolen = true and false;
var_dump($booolen);

function F($v) {echo $v." "; return false;}
function T($v) {echo $v." "; return true;}

IF (F(0) || T(1) && F(2)  || F(3)  && ! F(4) ) {
  echo "true";
} else echo " false";

echo "<br>";

$aaa = $b Or $c;
var_dump($aaa);
echo "<br>";

$aaaaa = !$b;
var_dump($aaaaa);
echo "<br>";

var_dump($a xor $b);

?>
