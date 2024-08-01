<?php
require_once "StrategyInterface.php";

class OperationAdd implements Strategy {
    public function doOperation($num1, $num2) {
        return $num1 + $num2;
    }
}

class OperationSubtract implements Strategy {
    public function doOperation($num1, $num2) {
        return $num1 - $num2;
    }
}

class OperationMultiply implements Strategy {
    public function doOperation($num1, $num2) {
        return $num1 * $num2;
    }
}
?>
