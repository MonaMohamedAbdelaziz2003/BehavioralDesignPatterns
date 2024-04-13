<?php

interface AggregateInterface {
    public function createIterator(): IteratorInterface;
}

class ArrayList implements AggregateInterface {
    private $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function createIterator(): IteratorInterface {
        return new ListIterator(new ArrayIterator($this->array));
    }
}

class Stack implements AggregateInterface {

    private $stack;
    public function __construct() {
        $this->stack = new SplStack();
    }

    public function push($value) {
        $this->stack->push($value);
    }

    public function createIterator(): IteratorInterface {
        return new StackIterator($this->stack);
    }
}