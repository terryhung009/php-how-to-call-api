<?php
// $ch = curl_init("https://jsonplaceholder.typicode.com/albums/1");

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/albums/1");
