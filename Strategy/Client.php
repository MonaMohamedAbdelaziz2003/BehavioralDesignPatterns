<?php
require_once "Concrete.php";
require_once "Context.php";
$context = new Context();

$context->setStrategy(new OperationAdd());
echo "10 + 5 = " . $context->executeStrategy(10, 5) . "\n";

$context->setStrategy(new OperationSubtract());
echo "10 - 5 = " . $context->executeStrategy(10, 5) . "\n";

$context->setStrategy(new OperationMultiply());
echo "10 * 5 = " . $context->executeStrategy(10, 5) . "\n";
?>
