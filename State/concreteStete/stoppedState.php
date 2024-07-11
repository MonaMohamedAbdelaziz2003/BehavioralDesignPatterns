<?php
require_once './contextState.php';
require_once './state.php';
require_once 'playingState.php';
class StoppedState implements State {
    public function play(MediaPlayer $player) {
        echo "Starting playback.\n";
        $player->setState(new PlayingState());
    }

    public function pause(MediaPlayer $player) {
        echo "Player is stopped. Cannot pause.\n";
    }

    public function stop(MediaPlayer $player) {
        echo "Already stopped.\n";
    }
}


?>
