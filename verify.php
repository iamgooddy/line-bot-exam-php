<?php
$access_token = 'v1OcnYGWZ+RI0yfqTIzs+HZN55VzlltIsHM+ba/FqMKWJ+KLUzOd1rHtSsJe2Q+4AU4uSb/pT7eiGgwojqVxpxPwu7/ZIRv/MXl5kcLrI1bKGJ8srn4oAgdZ1dA6aWTEEooP8CxKAkZMYFAbaTRViAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
