<?php
$dir='/var/www/html/lapsus/DCIM/';
header('Content-Type: application/json');
echo json_encode(scandir($dir,SCANDIR_SORT_DESCENDING));
