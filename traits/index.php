<?php
include "laptop.php";
include "hp.php";
include "lenovo.php";

class LaptopBrand extends Laptop{
use Hp,Lenovo{
	Hp::price insteadof Lenovo;
	Lenovo::price as Lprice;
}
}

$hp = new LaptopBrand;
$hp->brand();
echo "<br>";
$hp->Lprice();