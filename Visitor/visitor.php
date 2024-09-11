<?php
// Visitor interface declares methods to visit each Shape type
interface Visitor {
    public function visitCircle(Circle $circle);
    public function visitSquare(Square $square);
    public function visitRectangle(Rectangle $rectangle);
}
