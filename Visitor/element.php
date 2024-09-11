<?php
// Interface for Shape declares the accept method
interface Shape {
    public function accept(Visitor $visitor);
}