<?php
require_once 'Isubscriber.php';

// Subscriber observer
class Customer implements ISubscriber {
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function update(bool $productAvailable) {
        if ($productAvailable) {
            echo "{$this->name}: Product is now available! Visit the store.\n";
        } else {
            echo "{$this->name}: Product is not available yet. Keep checking.\n";
        }
    }
}