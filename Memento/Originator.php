<?php
class Originator {
    private $state;

    public function setState($state) {
        echo "Setting state to " . $state . "\n";
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function saveToMemento() {
        return new Memento($this->state);
    }

    public function restoreFromMemento(Memento $memento) {
        $this->state = $memento->getState();
        echo "Restored state to " . $this->state . "\n";
    }
}
?>
