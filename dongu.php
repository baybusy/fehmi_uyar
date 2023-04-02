<?php
//$x=0;
//while ($x<=7)
//{
//    echo $x.". Sayı"."<br>";
//    //$x++; // 1 er 1 er attırır
//    $x+=2; // 2şer 2şer arttırır
//
//}
// do while ise önce çalıştır. sonra koşula bak mantığıyla çalışır

/*$y=0;
do{
    echo "$y. Sayı <br>";
    $y++;
}while ($y<=10);*/
/*
for ($z=0; $z<=15;$z++)
{
    echo $z.". Sayı"."<br>";
}*/
$languages=array(
    "PHP" => "Server",
    "HTML"=>"Client",
    "JavaScript"=>"Client",
);
foreach ($languages as $x => $metin){
    echo "$x=$metin <br>";
}
