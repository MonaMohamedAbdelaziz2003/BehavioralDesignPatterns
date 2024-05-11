<?php
// Colleague Interface
interface User {
    public function sendMessage(string $message);
    public function receiveMessage(string $message);
}
