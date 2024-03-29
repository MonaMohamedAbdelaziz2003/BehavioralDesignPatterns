<?php

require_once './command.php';
class deploy implements command{
   private receiver $receiver;
   public function __construct(receiver $receiver) {
        $this->receiver = $receiver;
    }
    function execute()
    {
        $this->receiver->revert();
    }
}
?>