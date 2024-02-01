<?php

include 'invocker.php';
include 'receiver.php';
include 'deploy.php';

$invocker=new invocker();
$receiver=new receiver();
$command1=new deploy($receiver);
$invocker->setCommand($command1);
$invocker->run();
$result=$receiver->log();
foreach($result as $res){
    echo $res ."\n";
}
?>
