<?php 

require './schema/stringCombinationInterface.php';
require './library/stringCombination.php';

$obj = new stringCombination\library\stringCombination();


while($resutl = $obj->resultString()) {
	echo $resutl . PHP_EOL;
}

