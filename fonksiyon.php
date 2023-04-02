<?php
declare(strict_types=1);
function sum(int $x, int $y){
    $z=$x+$y;
    return $z;
}
//sum(12,7);*/
function genislik(int $mingenislik=200){
    echo "Genişlik: $mingenislik <br>";
}
genislik(400);
genislik();
genislik(500);
echo '4+5='.sum(4,5)."<br>";
echo '8x9='.(8*sum(4,5))."<br>";
