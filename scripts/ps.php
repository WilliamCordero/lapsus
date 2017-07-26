<?php
require 'config.php';
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$res=shell_exec('ps ax | grep lapsus.sh | grep -v grep | wc -l');
print_r($res>0?'true':'false');