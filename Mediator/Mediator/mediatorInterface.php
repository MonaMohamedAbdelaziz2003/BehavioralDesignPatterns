<?php
require_once './Components/colleagueInterface.php';

// Mediator Interface
interface ChatMediator {
    public function addUser(User $user);
    public function sendMessage(string $message, User $sender);
}

