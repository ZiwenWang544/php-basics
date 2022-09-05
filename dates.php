<?php

var_dump(checkdate(12, 31, 2000));
echo "<br>";

$res = date_parse("2013-09-30");
var_dump($res);
echo "<br>";

$dt = new DateTimeImmutable("2015-11-01 00:00:00", new DateTimeZone("America/New_York"));
echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
echo"<br>";


$fecha = new DateTime();
$fecha->setDate(2001, 1, 3);
echo $fecha->format('Y-m-d');
echo "<br>";

$fecha = date_create('2000-01-01');
date_add($fecha, date_interval_create_from_date_string('11 months'));
echo date_format($fecha, 'Y-m-d');
echo "<br>";

$dt = new DateTimeImmutable("2015-01-01 00:00:00", new DateTimeZone("America/New_York"));
echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
$dt = $dt->modify("+11 months");
echo "End:   ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
echo "<br>";

$dt = new DateTimeImmutable("2015-11-01 00:00:00", new DateTimeZone("America/New_York"));
echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
$dt = $dt->modify("+59 minutes");
echo "End:   ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
echo "<br>";
?>
