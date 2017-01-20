#!/usr/local/bin/php-cgi-7.0
<?php
  include "../vendor/autoload.php";

  use Twilio\Security\RequestValidator;

  header("content-type: text/xml");
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

  // ホスト名
  $host = "https://acedemoXXX.secure.ne.jp";

  // ここにAuthTokenを記入
  $authToken = '';

  $validator = new RequestValidator($authToken);

  // URLを取得
  $url = $host.$_SERVER['REQUEST_URI'];
  // POSTパラメータを取得
  $postVars = $_POST;
  // X-Twilio-Signature ヘッダオブジェクトを取得
  $signature = $_SERVER["HTTP_X_TWILIO_SIGNATURE"];
  if ($validator->validate($signature, $url, $postVars)) {
      $talk = "認証に成功しました";
  } else {
      $talk = "認証に失敗しました";
  }
?>
<Response>
  <Say language="ja-JP" voice="alice">
    <?php
      echo($talk);
    ?>
  </Say>
</Response>
