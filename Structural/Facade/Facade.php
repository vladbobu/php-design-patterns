<?php

// Subsystem Classes
class SubsystemOne
{
    public function operationOne(): string
    {
        return "SubsystemOne: Ready!\n";
    }

    public function operationN(): string
    {
        return "SubsystemOne: Go!\n";
    }
}

class SubsystemTwo
{
    public function operationOne(): string
    {
        return "SubsystemTwo: Get ready!\n";
    }

    public function operationZ(): string
    {
        return "SubsystemTwo: Fire!\n";
    }
}

// Facade
class Facade
{
    private SubsystemOne $subsystemOne;
    private SubsystemTwo $subsystemTwo;

    public function __construct(SubsystemOne $subsystemOne, SubsystemTwo $subsystemTwo)
    {
        $this->subsystemOne = $subsystemOne;
        $this->subsystemTwo = $subsystemTwo;
    }

    public function operation(): string
    {
        $result = "Facade initializes subsystems:\n";
        $result .= $this->subsystemOne->operationOne();
        $result .= $this->subsystemTwo->operationOne();
        $result .= "Facade orders subsystems to perform the action:\n";
        $result .= $this->subsystemOne->operationN();
        $result .= $this->subsystemTwo->operationZ();
        return $result;
    }
}

// Client code
$subsystemOne = new SubsystemOne();
$subsystemTwo = new SubsystemTwo();
$facade = new Facade($subsystemOne, $subsystemTwo);
echo $facade->operation();
