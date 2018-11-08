<?php
$nbr = 20;
$sum = 0;
$sum2 = 0;
for ($i = 1; $i <= $nbr; $i++) {
    $sum += $i;
}
echo $sum;
echo '<br>';
$j = 1;
while ($j <= $nbr) {
    $sum2 += $j;
    $j++;
}
echo $sum2;

?>