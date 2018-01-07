<?php
$jsonFile = 'http://youngkaka-first.cfapps.io/api/map';

$str = file_get_contents($jsonFile);

$maps = json_decode($str); 

?>