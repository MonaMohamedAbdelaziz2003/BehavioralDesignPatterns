<?php
require_once './concreteStete/stoppedState.php';
// context
class MediaPlayer {
    private $state;

    public function __construct() {
        $this->state = new StoppedState();
    }

    public function setState(State $state) {
        $this->state = $state;
    }

    public function play() {
        $this->state->play($this);
    }

    public function pause() {
        $this->state->pause($this);
    }

    public function stop() {
        $this->state->stop($this);
    }
}

?>
