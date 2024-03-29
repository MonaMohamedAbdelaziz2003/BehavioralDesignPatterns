<?php

include 'invocker.php';
include 'receiver.php';
include 'deploy.php';
///////////  Client //
$receiver=new receiver(); // all implementation 
$command1=new deploy($receiver); //concrete command
$invocker=new invocker($command1); // sender execute 
$invocker->run();
$result=$receiver->log();
foreach($result as $res){
    echo $res ."\n";
}
$receiver=new receiver(); 
$command1=new deploy($receiver); 
$invocker=new invocker($command1); 
$invocker->run();
$result=$receiver->log();
foreach($result as $res){
    echo $res ."\n";
}
?>
