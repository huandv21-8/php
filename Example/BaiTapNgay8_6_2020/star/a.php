<?php
$n = random_int(0,100);
echo'radom: '.$n.'<br>';
$sum = 0;
for($i=0;$i<$n;$i++){
 $sum += $i;
}
echo'sum: '.$sum;

?>