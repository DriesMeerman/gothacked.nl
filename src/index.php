<?php
$filename = "hacklog.txt";
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR] - $_SERVER[REQUEST_URI]";
file_put_contents($filename, $line . PHP_EOL, FILE_APPEND | LOCK_EX);

include ("main.html")
?>