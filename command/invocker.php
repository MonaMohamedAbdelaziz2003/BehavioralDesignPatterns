<?php



require_once './command.php';

class invocker
{
    private command $command;
    public function setCommand(command $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}
?>