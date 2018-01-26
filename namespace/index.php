<?php
include "first_namespace.php";
include "second_namespace.php";

$object = new secend\A;
$object2 = new first\A;
echo $object2->name();