#!/usr/local/bin/php-cgi-7.0
<?php

// this line loads the library
require('../twilio-php/Services/Twilio.php');

// Download the Node helper library from twilio.com/docs/php/install
// These vars are your accountSid and authToken from twilio.com/user/account
$account_sid = "YOUR_ACCOUNT_SID";
$auth_token = "YOUR_AUTH_TOKEN";
$client = new Services_Twilio($account_sid, $auth_token);

$client->account->messages->create(array(
    'To' => "送信先電話番号",
    'MessagingServiceSid' => "YOUR_MESSAGE_SERVICE_SID",
    'Body' => "Phantom Menace was clearly the best of the prequel trilogy.",
));

?>
