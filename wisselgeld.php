<?php

$ToGive = floatval($argv[1]);
define("GELDSOORTEUROS", [50,20,10,5,2,1]);define("GELDSOORTCENTEN", [50,20,10,5]);
$RestToGive = $ToGive;
$RestToGive1 = $ToGive * 100;
$RestToGiveRoundToFive = substr(roundUpToAny($RestToGive1), -2,2);
$NewToGiveRest = $RestToGive1;
$NewToGiveRest = substr_replace($NewToGiveRest, $RestToGiveRoundToFive, -2, 2);
if($ToGive != 0){
foreach(GELDSOORTEUROS as $geldeenheid){
    if($RestToGive >= $geldeenheid){
        $HowFit = floor($RestToGive/$geldeenheid);
        $RestToGive = $RestToGive % $geldeenheid;
        echo($HowFit . " x " . $geldeenheid . " euros" . PHP_EOL);
    }
}
foreach(GELDSOORTCENTEN as $geldeenheid1){
    $NewToGiveRest = substr($NewToGiveRest,-2,2);
    if($NewToGiveRest >= $geldeenheid1){
        $HowFit1 = floor($NewToGiveRest/$geldeenheid1);
        $NewToGiveRest = $NewToGiveRest % $geldeenheid1;
        echo($HowFit1 . " x " . $geldeenheid1 . " centen" . PHP_EOL);
    }
}
}
function roundUpToAny($n) {
    $x=5;
    return round($n/$x)*$x;
}
?>