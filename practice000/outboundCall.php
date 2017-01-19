#!/usr/local/bin/php-cgi-7.0
<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('../twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "YOUR_ACCOUNT_SID";
$token = "YOUR_AUTH_TOKEN";
$client = new Services_Twilio($sid, $token);

$call = $client->account->calls->create("発信元番号", "発信先番号", "http://demo.twilio.com/docs/voice.xml", array());
echo $call->sid;
?>
