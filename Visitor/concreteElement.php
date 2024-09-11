<?php
require_once './element.php';

// Concrete Classes for Shapes

class Circle implements Shape {
    public function accept(Visitor $visitor) {
        $visitor->visitCircle($this);
    }
}

class Square implements Shape {
    public function accept(Visitor $visitor) {
        $visitor->visitSquare($this);
    }
}

class Rectangle implements Shape {
    public function accept(Visitor $visitor) {
        $visitor->visitRectangle($this);
    }
}
