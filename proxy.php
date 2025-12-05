<?php
header("Content-Type: application/json");

$apiKey = "tl64J1XkhQGI7JXOs9kxpTxshTJAUqiHd558xJCD";

$url = "https://api.sportradar.com/soccer/trial/v4/en/seasons/sr:season:118689/missing_players.json?api_key=" . $apiKey;

echo file_get_contents($url);
