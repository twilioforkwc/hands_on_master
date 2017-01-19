#!/usr/local/bin/php-cgi-7.0
<?php
require_once('../twilio-php/Services/Twilio.php');

# Todo: Replace XXX... to your AccountSID and token
$sid = "ACXXXXXXXXXXXX";
$token = "XXXXXXXXXXXXXXX";
$client = new Services_Twilio($sid, $token);


sleep(10);

$callSid = $argv[1];
$call = $client->account->calls->get($callSid);
$call->hangup();
?>
