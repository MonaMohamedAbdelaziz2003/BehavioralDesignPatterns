<?php
require_once "./contextState.php";

$player = new MediaPlayer();
$player->play();  // Output: Starting playback.
$player->pause(); // Output: Pausing the player.
$player->play();  // Output: Resuming play.
$player->stop();  // Output: Stopping the player.
$player->stop();  // Output: Already stopped.
$player->pause(); // Output: Player is stopped. Cannot pause.

?>
