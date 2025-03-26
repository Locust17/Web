<?php

$cipher="AYYDSpQvirar1gzvFmM9Bwx3PGlQTSt1Z4n0CLlnG1xaE88FA1BG08ARYzl%2FJ3l2GxS3%2F3AHm9LMpFy89f84%2Bg%3D%3D";
$enc=base64_decode(urldecode($cipher));

$enc[9] = chr(ord($enc[9]) ^ ord("b") ^ ord ("a"));
echo base64_encode($enc);
echo "\n";
echo urlencode(base64_encode($enc));
?>