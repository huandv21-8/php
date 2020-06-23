<?php

$n = rand(1, 100);
echo 'n = '.$n. '<br>';
$intList = array();
for ($i=0; $i < $n ; $i++) { 
    $number = rand(1,100);
    $intList[] = $number;
}

sort($intList);
  
foreach( $intList as $a) {
    echo $a.' ';
}
?>