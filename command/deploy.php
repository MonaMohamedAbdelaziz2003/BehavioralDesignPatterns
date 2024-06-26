<?php

require_once './command.php';
// concrete command
class deploy implements command{
   private receiver $receiver;
   public function __construct(receiver $receiver) {
        $this->receiver = $receiver;
    }
    function execute()
    {
        $this->receiver->add();
        $this->receiver->commit();
        $this->receiver->push();
    }
}
?>