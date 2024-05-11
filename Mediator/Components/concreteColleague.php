<?php

require_once 'colleagueInterface.php';
require_once './Mediator/mediatorInterface.php';

// Concrete Colleague
class ChatUser implements User {
    private $name;
    private $mediator;

    public function __construct(string $name, ChatMediator $mediator) {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    public function sendMessage(string $message) {
        echo $this->name . " sends message: " . $message . "\n";
        $this->mediator->sendMessage($message, $this);
    }

    public function receiveMessage(string $message) {
        echo $this->name . " receives message: " . $message . "\n";
    }
}