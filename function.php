<?php 
require 'config.php';

$status = json_decode(file_get_contents("https://api.mcsrvstat.us/2/$ip"));

$player = $status->players->online;
 ?>