<?php

$json = file_get_contents("https://api.coinmarketcap.com/v1/ticker/?limit=0");
$coins = json_decode($json);

//echo $coins[0]->name . " ";
$btcPrice = $coins[0]->price_usd;
//echo $btcPrice;

//echo "<br>";

//echo $coins[1]->name . " ";
$ethPrice = $coins[1]->price_usd;
//echo $ethPrice;

//echo "<br>";

//echo $coins[19]->name . " ";
$dogePrice = $coins[19]->price_usd;
//echo $dogePrice;

//echo "<br>";

//echo $coins[23]->name . " ";
$btgPrice = $coins[23]->price_usd;
//echo $btgPrice;

//echo "<br>";

//echo $coins[3]->name . " ";
$bchPrice = $coins[3]->price_usd;
//echo $bchPrice;

//echo "<br>";

//echo $coins[6]->name . " ";
$ltcPrice = $coins[6]->price_usd;
//echo $ltcPrice;

//echo "<br>";

//echo $coins[10]->name . " ";
$dashPrice = $coins[10]->price_usd;
//echo $dashPrice;

//echo "<br>";

//echo $coins[20]->name . " ";
$zecPrice = $coins[20]->price_usd;
//echo $zecPrice;

?>