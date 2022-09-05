<?php
$a = true;
var_dump($a);
echo "<br>";

$a = 1;
var_dump($a);
echo "<br>";

$a = 1.235355;
var_dump($a);
echo "<br>";

$a = "HOLYMOLY";
var_dump($a);
echo "<br>";

$a = [1,2,3,4,5];
var_dump($a);
echo "<br>";

class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
echo "<br>";

$a = NULL;
var_dump($a);
echo "<br>";
?>