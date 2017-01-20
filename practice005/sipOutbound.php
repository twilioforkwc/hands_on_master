#!/usr/local/bin/php-cgi-7.0
<?php
//必要なライブラリを取り込む
require_once '../vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = 'ACxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$token  = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$client = new Client($sid, $token);

//発信元番号を指定。（購入したTwilio050番号）
$fromNumber = "+81 yourTwilionumber";
//宛先から番号を抽出する。
$toNumber = $_REQUEST['To'];
$char = "@";
$str = substr($toNumber, 0, strcspn($toNumber, $char));
$cut = 5;
$number = substr( $str , $cut , strlen($str)-$cut );
?>
<Response>
  <Dial callerId="<?php echo($fromNumber)?>">
    <Number>+81<?php echo($number)?></Number>
  </Dial>
</Response>
