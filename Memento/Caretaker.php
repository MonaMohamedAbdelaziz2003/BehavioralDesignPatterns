<?php
class Caretaker {
    private $mementoList = array();

    public function addMemento(Memento $memento) {
        $this->mementoList[] = $memento;
    }

    public function getMemento() {
        if (!empty($this->mementoList)) {
            return array_pop($this->mementoList);
        }
        return null;
    }
    public function all() {    
        return array_pop($this->mementoList);
    }
}
?>
