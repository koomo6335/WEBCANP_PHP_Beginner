<?php
$a=1;
$i=0;
$s=0;

while($i<=15000){
    $s=($a+$i);

    echo "{$i} \n";

    $a=$i;
    $i=$s;
}

