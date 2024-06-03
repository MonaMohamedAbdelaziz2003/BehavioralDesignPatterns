<?php
require_once 'Memento.php';
require_once 'Originator.php';
require_once 'Caretaker.php';

$originator = new Originator();
$caretaker = new Caretaker();

$originator->setState("State1");
$caretaker->addMemento($originator->saveToMemento());

$originator->setState("State2");
$caretaker->addMemento($originator->saveToMemento());

$originator->setState("State3");

$originator->restoreFromMemento($caretaker->getMemento());
$originator->restoreFromMemento($caretaker->getMemento());
echo $caretaker->all();
?>
