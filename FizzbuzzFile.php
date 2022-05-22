<?php
//
for($i=0; $i<=$n; $i++){
if(2<=$i) {
$fn[$i] = $fn[$i-1] + $fn[$i-2];
}
echo "" . $i . " = " . $fn[$i] . "<br>\n";
}