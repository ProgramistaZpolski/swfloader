<?php
header('Content-Type: application/x-shockwave-flash');
$url = $_GET['swfURL'];
$resp = file_get_contents($url);
echo $resp;