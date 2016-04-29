<?php



$botToken = "183900136:AAEk7QYske1vtpl9GlR_-7KMye2g6jMfynQ";
$website = "https://api.telegram.org/bot".$botToken;

//$update = file_get_contents("php://input");

$debug = file_get_contents('php://input');
$fp = fopen('debug.txt', 'w');
fwrite($fp, $debug);
fclose($fp);

//$updateArray = json_decode($update, TRUE);

//print_r($updateArray);

//$chat_id = $updateArray["result"][0]["message"]["chat"]["id"];
//$chat_id = $updateArray["message"]["chat"]["id"];﻿


file_get_contents($website."/sendmessage?chat_id=217296540&text=hi");

?>