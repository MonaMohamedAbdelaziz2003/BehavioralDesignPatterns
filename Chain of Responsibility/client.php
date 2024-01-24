
<?php

require_once 'facebook.php';
require_once 'youtube.php';
require_once 'instagram.php';
$handelar1= new youtube();
$handelar2= new facebook();
$handelar3= new instagram();

$link="https://www.facebook.com/watch?v=IKRVX3c8HuU&t=33s";
$handelar1->nextHandler($handelar2);
$handelar2->nextHandler($handelar3);
$handelar1->handlelink($link);
?>
