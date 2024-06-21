<?php
interface IPublisher {
    public function registerSubscriber(ISubscriber $observer);
    public function removeSubscriber(ISubscriber $observer);
    public function notifySubscriber();
}