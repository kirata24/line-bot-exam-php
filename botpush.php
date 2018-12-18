<?php



require "vendor/autoload.php";

$access_token = 'Kmv7HHpBjJRKhGrxDRneUMAM4PCnb1NBKUSAttLii+UmtS0KZ41WjEsw7Ua9/K+ixKaFXF7dbVnIeGWtNvklt/+mjSC9RIk1858ecL3TqRSHjVpeH5wvVNhJ90E6hfTiiHjqlmwT9LVvLBIPDRpIjAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3f7c7b6a3087ddb8d0a4e8c7a9c29c22';

$pushID = 'U2681897e58906f5f56ee6cff6f287f32';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ทำได้แล้วว้อยยยยยยยย');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







