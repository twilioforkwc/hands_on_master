#!/usr/local/bin/php-cgi-7.0
<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    $callSid = $_POST["CallSid"];
    exec("nohup php-7.0 -c '' 'callDisconnect.php' $callSid > /dev/null &");
?>
<Response>
    <Play loop="0">https://api.twilio.com/cowbell.mp3</Play>
</Response>
