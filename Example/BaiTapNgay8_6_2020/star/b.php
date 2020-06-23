<?php
$n = random_int(0, 100);
echo 'radom: ' . $n . '<br>';
for ($i = 1; $i < $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
echo '<br>';
}
