<?php 
require 'vendor/autoload.php';


$obj = new vsl\stringCombination();
while($resutl = $obj->resultString()) {
	echo $resutl . PHP_EOL;
}


