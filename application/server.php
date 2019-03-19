<?php

$handler = fopen("./../sensor.json", "r");
$data = fread($handler, filesize("./../sensor.json"));
fclose($handler);
$decode = json_decode($data);
echo json_encode($decode);
?>

