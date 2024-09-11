<?php

// Concrete Visitor for exporting Shapes to XML and calculate area

require_once './visitor.php';
class AreaVisitor implements Visitor {
    public function visitCircle(Circle $circle) {
        echo "Area of Circle: π * r² \n";
    }

    public function visitSquare(Square $square) {
        echo "Area of Square: s² \n";
    }

    public function visitRectangle(Rectangle $rectangle) {
        echo "Area of Rectangle: w * h \n";
    }
}

class XMLExportVisitor implements Visitor {
    public function visitCircle(Circle $circle) {
        echo "Exporting Circle to XML. \n";
    }

    public function visitSquare(Square $square) {
        echo "Exporting Square to XML. \n";
    }

    public function visitRectangle(Rectangle $rectangle) {
        echo "Exporting Rectangle to XML. \n";
    }
}
