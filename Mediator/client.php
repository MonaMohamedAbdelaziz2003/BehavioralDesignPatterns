<?php

require_once './Mediator/concreteMediator.php';
require_once './Components/concreteColleague.php';

// client 
$chatMediator = new ChatRoom();

$user1 = new ChatUser("User1", $chatMediator);
$user2 = new ChatUser("User2", $chatMediator);
$user3 = new ChatUser("User3", $chatMediator);

$chatMediator->addUser($user1);
$chatMediator->addUser($user2);
$chatMediator->addUser($user3);

$user1->sendMessage("Hello, everyone!");
$user2->sendMessage("Hi there!");