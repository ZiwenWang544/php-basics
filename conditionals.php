<?php

$fecha = new DateTime();
$fecha->setDate(2001, 1, 3);
if(date_add($fecha, date_interval_create_from_date_string('7 days'))){
    echo "We are on Monday !";
}
echo "<br>";

$startdate = strtotime("Monday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
  echo "We are on Monday !";
}
echo "<br>";

$fecha = new DateTime();
$fecha->setDate(2001, 1, 3);
if(date_add($fecha, date_interval_create_from_date_string('9 months'))){
    echo "We are in October !";
}
echo "<br>";

$hora = date("i");
if($hora < 10){
   echo"the current minute is less than 10";
}elseif($hora > 15){
    echo "the current minutes is more than 15";
}else{
    echo "does not meet any conditions";
}
echo "<br>";

$diasemana = date("N");
if($diasemana < 6){
    echo "A TRABAJAR !";
}else{
    echo "A TRABAJAR FIN DE SEMANA !";
}


?>