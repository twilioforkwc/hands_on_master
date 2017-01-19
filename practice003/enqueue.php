#!/usr/local/bin/php-cgi-7.0
<?php
  header("content-type: text/xml");
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

  $queuePosition = $_POST["QueuePosition"];
  $talk = "お待たせしております。現在のあなたの順番は" . $queuePosition . "番目です。";
?>
<Response>
  <Say language="ja-JP" voice="alice">
    <?php
      echo($talk);
    ?>
  </Say>
</Response>
