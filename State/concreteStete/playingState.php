<?php
require_once './contextState.php';
require_once './state.php';
require_once 'pausedState.php';
class PlayingState implements State {
    public function play(MediaPlayer $player) {
        echo "Already playing.\n";
    }

    public function pause(MediaPlayer $player) {
        echo "Pausing the player.\n";
        $player->setState(new PausedState());
    }

    public function stop(MediaPlayer $player) {
        echo "Stopping the player.\n";
        $player->setState(new StoppedState());
    }
}

?>
