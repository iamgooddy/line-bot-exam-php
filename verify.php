<?php
$access_token = 'uVWlx4pH4rH2RlX5wZ3jOH4v0v9npWzB4Yqd3UoGxeLm64QJ4j18R41TDB76/dNZdmBtWTcLTsM4bohO7V2PgSFIrIAsPNpn3D9ACNzFzlTUzoojY1tNyE/odvMNMhk09NXb6UvFBZaOhe2eLsCbhQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
