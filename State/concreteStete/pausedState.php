<?php
require_once './contextState.php';
require_once './state.php';

// concrete class
class PausedState implements State {
    public function play(MediaPlayer $player) {
        echo "Resuming play.\n";
    }

    public function pause(MediaPlayer $player) {
        echo "Already paused.\n";
    }

    public function stop(MediaPlayer $player) {
        echo "Stopping the player from paused state.\n";
        $player->setState(new StoppedState());
    }
}


?>
