#!/usr/local/bin/php-cgi-7.0
<?php
require_once '../vendor/autoload.php';
use Twilio\Rest\Client;

$sid = "ACXXXXXXXXXXXX";
$token = "XXXXXXXXXXXXXXX";
$client = new Client($sid, $token);
$callSid = $argv[1];
sleep(10);

$call = $client
    ->calls($callSid)
    ->update(
        array("status" => "completed")
    );
?>
