<?php

// Command Interface
interface Command
{
    public function execute(): void;
}

// Concrete Command
class TurnOnLightCommand implements Command
{
    private Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->turnOn();
    }
}

// Receiver
class Light
{
    public function turnOn(): void
    {
        echo "Light is on.\n";
    }

    public function turnOff(): void
    {
        echo "Light is off.\n";
    }
}

// Invoker
class RemoteControl
{
    private ?Command $command = null;

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    public function pressButton(): void
    {
        if ($this->command) {
            $this->command->execute();
        }
    }
}

// Client code
$light = new Light();
$turnOnCommand = new TurnOnLightCommand($light);

$remote = new RemoteControl();
$remote->setCommand($turnOnCommand);
$remote->pressButton();
