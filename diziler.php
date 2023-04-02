<?php

/*$diller= array(
    "Türkçe",
    "İngilizce",
    "Almanca"
    );
$kactane=count($diller);
for ($i=0;$i<$kactane;$i++){

    echo $diller[$i]."<br>";
}*/

/*$yil= array("Bülent"=>"50",
            "Ramazan"=>"46",
            "Serdal"=>"44");
foreach ($yil as $adi => $yas){
    echo $adi." arkadaşım ".$yas." yaşındadır<br>";
}*/

$ogrenciler = array(
    array("Ahmet", "Doğan", 23),
    array("Ayşe", "Yılmaz", 21),
    array("Mehmet", "Kara", 22)
);

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci[0] . " " . $ogrenci[1] ." ".$ogrenci[2]. "<br/>";
}

