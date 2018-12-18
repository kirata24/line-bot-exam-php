<?php



require "vendor/autoload.php";

$access_token = 'Kmv7HHpBjJRKhGrxDRneUMAM4PCnb1NBKUSAttLii+UmtS0KZ41WjEsw7Ua9/K+ixKaFXF7dbVnIeGWtNvklt/+mjSC9RIk1858ecL3TqRSHjVpeH5wvVNhJ90E6hfTiiHjqlmwT9LVvLBIPDRpIjAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3f7c7b6a3087ddb8d0a4e8c7a9c29c22';

$pushID = 'U2681897e58906f5f56ee6cff6f287f32';
$pushID2 = 'U968581d6ef8ed6640f5383f62999a9e1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('คำถามวันนี้คือ อะไรเอ่ย สี่ตีนเดินมาง หลังคามุมกระเบื้อง ใครรู้คำตอบบ้างเอ่ย');

$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();


$response2 = $bot->pushMessage($pushID2, $textMessageBuilder);
echo $response2->getHTTPStatus() . ' ' . $response2->getRawBody();





