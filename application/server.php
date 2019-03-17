<?php

$handler = fopen("./../sensor.json", "r");
$data = fread($handler, filesize("./../sensor.json"));
fclose($handler);

echo $data;
?>

