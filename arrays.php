<?php

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
var_dump($array);

echo "<br>";

$array = array(
    100.1   => -100.1,
    -100  => 100,
);
var_dump($array);
echo "<br>";

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

echo "<br>";

$array = array(
    'naranjas', 'manzanas', 'Jesus'
);

echo count($array);
echo "<br>";

$array = array(
    'frutas' => array(
    'naranjas', 'manzanas', 'Jesus'),
    'Daniels' => array(
        'cols','ak1','santamario')    
);
echo count($array, COUNT_RECURSIVE);
echo "<br>";
var_dump(count($array));

echo "<br>";

$fruits = array('manzana', 'plátano', 'arándano');
echo end($fruits);

echo "<br>";

$pila = array("naranja", "plátano");
array_push($pila, "manzana", "arándano");
print_r($pila);

echo "<br>";

?>