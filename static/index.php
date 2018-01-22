<?php
class Example {
     static private $a =34;
     static private $b=45;
     static private $sum;

    static public function addition() {
    	self::$sum=self::$a + self::$b;
       return self::$sum;
    }
}
echo Example::addition();