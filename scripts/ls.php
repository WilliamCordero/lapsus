<?php
$dir='/var/www/html/lapsus/DCIM/';
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: application/json');
header("Access-Control-Allow-Headers", "Content-Type");
echo json_encode(scandir($dir, SCANDIR_SORT_DESCENDING));

