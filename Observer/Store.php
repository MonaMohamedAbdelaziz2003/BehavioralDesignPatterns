<?php

include  'Ipublisher.php';
require_once   'Isubscriber.php';

// Concrete Publisher
class Store implements IPublisher {
    private $Subscriber = [];
    private $productAvailable = false;

    public function registerSubscriber(ISubscriber $Subscriber) {
        $this->Subscriber[] = $Subscriber;
    }

    public function removeSubscriber(ISubscriber $Subscriber) {
        $key = array_search($Subscriber, $this->Subscriber, true);
        if ($key !== false) {
            unset($this->Subscriber[$key]);
        }
    }

    public function notifySubscriber() {
        foreach ($this->Subscriber as $Subscriber) {
            $Subscriber->update($this->productAvailable);
        }
    }

    // Method to update product availability
    public function setProductAvailable(bool $available) {
        $this->productAvailable = $available;
        $this->notifySubscriber();
    }
}