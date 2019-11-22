<?php



require "vendor/autoload.php";

$access_token = 'uVWlx4pH4rH2RlX5wZ3jOH4v0v9npWzB4Yqd3UoGxeLm64QJ4j18R41TDB76/dNZdmBtWTcLTsM4bohO7V2PgSFIrIAsPNpn3D9ACNzFzlTUzoojY1tNyE/odvMNMhk09NXb6UvFBZaOhe2eLsCbhQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5b0ea0eb25131525269affb9047baa11';

$pushID = 'Ua2ace80487ae0e9f3f02f94e8a9ac575';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world สวัสดีนะ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







