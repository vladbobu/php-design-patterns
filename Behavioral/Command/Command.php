<?php

// Command interface
interface Command
{
    public function execute();
}

// Concrete Command
class TurnOnLightCommand implements Command
{
    protected $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->turnOn();
    }
}

// Receiver
class Light
{
    public function turnOn()
    {
        echo "Light is on\n";
    }

    public function turnOff()
    {
        echo "Light is off\n";
    }
}

// Invoker
class RemoteControl
{
    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function pressButton()
    {
        $this->command->execute();
    }
}

// Client code
$light = new Light();
$turnOnCommand = new TurnOnLightCommand($light);

$remote = new RemoteControl();
$remote->setCommand($turnOnCommand);
$remote->pressButton();
