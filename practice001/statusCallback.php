#!/usr/local/bin/php-cgi-7.0
<?php
$param = $_POST["CallStatus"] . "\n";

# Todo: Replace path to match your server
$file = '../status.txt';
file_put_contents($file, $param, FILE_APPEND);
?>

<!DOCTYPE html>
<html><body>OK</body></html>
