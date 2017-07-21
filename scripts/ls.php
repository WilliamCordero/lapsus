<?php
require 'config.php';
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Access-Control-Allow-Headers", "Content-Type");
header('Content-Type: application/json');
header('Content-Disposition: filename="ls.json"');
echo json_encode(scandir($dcim,SCANDIR_SORT_DESCENDING));

