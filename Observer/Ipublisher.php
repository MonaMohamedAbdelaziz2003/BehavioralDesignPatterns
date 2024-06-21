<?php
interface IPublisher {
    public function addSubscriber(ISubscriber $observer);
    public function removeSubscriber(ISubscriber $observer);
    public function notifySubscriber();
}