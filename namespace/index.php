<?php
include "first_namespace.php";
include "second_namespace.php";
use secend\A as newA;

$object = new newA;
echo $object->name();
echo "<br>";
$object2 = new A;
echo $object2->name();