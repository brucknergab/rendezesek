<?php
$tomb = array(11, 5, 4, 8, 7, 9);
$maxIndex = count($tomb) - 1;

print_r($tomb);
print("<br>");
//& = referencia
function csere(&$tomb, $j)
{
    $b = $tomb[$j+1];
    $tomb[$j+1] = $tomb[$j];
    $tomb[$j] = $b;
}

for ($i = $maxIndex; $i >= 1; --$i) {
    for ($j = 0; $j <= $i - 1; $j++) {
        if ($tomb[$j] > $tomb[$j+1]) {
            csere($tomb, $j);
        }
    }
}

print_r($tomb);
print("<br>");

//Cserés rendezés

function csere2(&$tomb2, $i, $j)
{
    $b = $tomb2[$i];
    $tomb2[$i] = $tomb2[$j];
    $tomb2[$j] = $b;
}

$tomb2=array(11, 5, 4, 8, 7, 9);
$maxIndex2=count($tomb2)-1;

print_r($tomb2);
print("<br>");

for($i=0;$i<=$maxIndex2-1;$i++){
    for ($j=$i+1; $j <= $maxIndex2; $j++) { 
        if ($tomb2[$i] > $tomb2[$j]) {
            csere2($tomb2, $i, $j);
        }
    }
}

print_r($tomb2);
