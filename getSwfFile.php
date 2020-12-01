<?php
// cors-anywhere does not support flash, so i had to resort to this thing.
header('Content-Type: application/x-shockwave-flash');
$url = $_GET['swfURL'];
$resp = file_get_contents($url);
echo $resp;
