<?php
include "aggregate.php";
include "iterator.php";


$list = new ArrayList([1, 2, 3, 4, 5]);
$listIterator = $list->createIterator();

while ($listIterator->hasNext()) {
    echo $listIterator->next() ;
}
echo "\n";
$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stackIterator = $stack->createIterator();

while ($stackIterator->hasNext()) {
    echo $stackIterator->next() ;
}