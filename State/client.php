<?php
require_once "./contextState.php";
require_once "./concreteStete/playingState.php";
require_once "./concreteStete/stoppedState.php";
// user

$player = new MediaPlayer();
$player->setState(new PlayingState());  
$player->pause(); 
$player->play(); 
$player->stop();  


$player->setState(new StoppedState());  
$player->pause();
$player->play();
$player->stop(); 

?>
