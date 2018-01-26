<?php
include "laptop.php";
include "hp.php";
include "lenovo.php";

class LaptopBrand extends Laptop{
use Hp;
}

$hp = new LaptopBrand;
$hp->brand();
echo "<br>";
$hp->price();