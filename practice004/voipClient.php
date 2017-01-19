#!/usr/local/bin/php-cgi-7.0
<?php
include "../vendor/autoload.php";

use Twilio\Jwt\ClientToken;

// put your Twilio API credentials here
$accountSid = 'ACxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$authToken  = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

$capability = new ClientToken($accountSid, $authToken);
$capability->allowClientOutgoing('APxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
$capability->allowClientIncoming('test');
$token = $capability->generateToken();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Twilio VoIP Client</title>
    <script type="text/javascript"
      src="//media.twiliocdn.com/sdk/js/client/v1.3/twilio.min.js"></script>
    <script type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
    <link href="//static0.twilio.com/resources/quickstart/client.css"
      type="text/css" rel="stylesheet" />
    <script type="text/javascript">

      Twilio.Device.setup("<?php echo $token; ?>", { debug: true, closeProtection: true, region: "jp1"});

      Twilio.Device.ready(function (device) {
        $("#log").text("Ready");
      });

      Twilio.Device.error(function (error) {
        $("#log").text("Error: " + error.message);
      });

      Twilio.Device.connect(function (conn) {
        $("#log").text("Successfully established call");
      });

      Twilio.Device.disconnect(function (conn) {
        $("#log").text("Call ended");
      });

      Twilio.Device.incoming(function (conn) {
        $("#log").text("Incoming connection from " + conn.parameters.From);
        conn.accept();
      });

      function call() {
        Twilio.Device.connect();
      }

      function hangup() {
        Twilio.Device.disconnectAll();
      }
    </script>
  </head>
  <body>
    <button class="call" onclick="call();">
      Call
    </button>

    <button class="hangup" onclick="hangup();">
      Hangup
    </button>

    <div id="log">Loading pigeons...</div>
  </body>
</html>;

$capability = new Services_Twilio_Capability($accountSid, $authToken);
$capability->allowClientOutgoing('APxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
$capability->allowClientIncoming('test');
$token = $capability->generateToken();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Twilio VoIP Client</title>
    <script type="text/javascript"
      src="//media.twiliocdn.com/sdk/js/client/v1.3/twilio.min.js"></script>
    <script type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
    <link href="//static0.twilio.com/resources/quickstart/client.css"
      type="text/css" rel="stylesheet" />
    <script type="text/javascript">

      Twilio.Device.setup("<?php echo $token; ?>", { debug: true, closeProtection: true, region: "jp1"});

      Twilio.Device.ready(function (device) {
        $("#log").text("Ready");
      });

      Twilio.Device.error(function (error) {
        $("#log").text("Error: " + error.message);
      });

      Twilio.Device.connect(function (conn) {
        $("#log").text("Successfully established call");
      });

      Twilio.Device.disconnect(function (conn) {
        $("#log").text("Call ended");
      });

      Twilio.Device.incoming(function (conn) {
        $("#log").text("Incoming connection from " + conn.parameters.From);
        conn.accept();
      });

      function call() {
        Twilio.Device.connect();
      }

      function hangup() {
        Twilio.Device.disconnectAll();
      }
    </script>
  </head>
  <body>
    <button class="call" onclick="call();">
      Call
    </button>

    <button class="hangup" onclick="hangup();">
      Hangup
    </button>

    <div id="log">Loading pigeons...</div>
  </body>
</html>
