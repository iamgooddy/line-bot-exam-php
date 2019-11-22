<?php



require "vendor/autoload.php";

$access_token = 'v1OcnYGWZ+RI0yfqTIzs+HZN55VzlltIsHM+ba/FqMKWJ+KLUzOd1rHtSsJe2Q+4AU4uSb/pT7eiGgwojqVxpxPwu7/ZIRv/MXl5kcLrI1bKGJ8srn4oAgdZ1dA6aWTEEooP8CxKAkZMYFAbaTRViAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '4b4ea14655f37ad5620ca218c042eae1';

$pushID = 'Ua2ace80487ae0e9f3f02f94e8a9ac575';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world สวัสดีนะ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







