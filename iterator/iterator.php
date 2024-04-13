<?php
interface IteratorInterface {
    public function hasNext(): bool;
    public function next();
}

class ListIterator implements IteratorInterface  {
    private $arrayIterator;

    public function __construct($arrayIterator) {
        $this->arrayIterator = $arrayIterator;
    }

    public function hasNext(): bool {
        return $this->arrayIterator->valid();
    }

    public function next() {
        $value = $this->arrayIterator->current();
        $this->arrayIterator->next();
        return $value;
    }
}

class StackIterator implements IteratorInterface {
    private $stack;

    public function __construct($stack) {
        $this->stack = $stack;
    }

    public function hasNext(): bool {
        return !$this->stack->isEmpty();
    }

    public function next() {
        return $this->stack->pop();
    }
}