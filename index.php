<?php
//we're going to create variables to hold the amount of each foreign currency we'll be exchanging

$cambodia_in_riel = 2103942;
$myanmar_in_kyat = 19092;
$norway_in_krones = 109;
$albania_in_lek = 9094;
//outputting each currency
echo $cambodia_in_riel;
echo "\n$myanmar_in_kyat";
echo "\n$norway_in_krones";
echo "\n$albania_in_lek";

//currency rates in usd
$reil_in_usd_rate = 0.00025;
$kyat_in_usd_rate = 0.00061;
$krones_in_usd_rate = 0.11;
$lek_in_usd_rate = 0.0096;

//calculating the amount of usd it'll be exchanged for and output those values
$reil_in_usd = $cambodia_in_riel * $reil_in_usd_rate - 1;
$kyat_in_usd = $myanmar_in_kyat * $kyat_in_usd_rate - 1;
$krones_in_usd = $norway_in_krones * $krones_in_usd_rate - 1;
$lek_in_usd = $albania_in_lek * $lek_in_usd_rate - 1;
echo "\n$reil_in_usd" ;
echo "\n$kyat_in_usd";
echo "\n$krones_in_usd";
echo "\n$lek_in_usd";



