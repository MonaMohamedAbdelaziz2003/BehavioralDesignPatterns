<?php
 // User
require_once './concreteElement.php';
require_once './concreteVisitor.php';

$circle = new Circle();
$square = new Square();
$rectangle = new Rectangle();

$areaVisitor = new AreaVisitor();
$circle->accept($areaVisitor);
$square->accept($areaVisitor);
$rectangle->accept($areaVisitor);

$xmlVisitor = new XMLExportVisitor();
$circle->accept($xmlVisitor);
$square->accept($xmlVisitor);
$rectangle->accept($xmlVisitor);
