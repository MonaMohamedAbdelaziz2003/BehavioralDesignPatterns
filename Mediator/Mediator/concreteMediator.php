<?php
require_once './Components/colleagueInterface.php';
require_once 'mediatorInterface.php';

// Concrete Mediator
class ChatRoom implements ChatMediator {
    private $users = [];

    public function addUser(User $user) {
        $this->users[] = $user;
    }

    public function sendMessage(string $message, User $sender) {
        foreach ($this->users as $user) {
            if ($user !== $sender) {
                $user->receiveMessage($message);
            }
        }
    }
}