<?php
require_once './command.php';
///////////////// invocker class
class invocker{
    private command $command;
    public function __construct(command $command) {
        $this->command = $command;
    }
    public function run()
    {
        $this->command->execute();
    }
}
?>