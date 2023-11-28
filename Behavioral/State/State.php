<?php

// State Interface
interface State
{
    public function doAction(Context $context): void;
}

// Concrete States
class StartState implements State
{
    public function doAction(Context $context): void
    {
        echo "Player is in start state.\n";
        $context->setState($this);
    }

    public function __toString(): string
    {
        return "Start State";
    }
}

class StopState implements State
{
    public function doAction(Context $context): void
    {
        echo "Player is in stop state.\n";
        $context->setState($this);
    }

    public function __toString(): string
    {
        return "Stop State";
    }
}

// Context
class Context
{
    private ?State $state = null;

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }
}

// Client code
$context = new Context();

$startState = new StartState();
$startState->doAction($context);

echo $context->getState() . "\n";

$stopState = new StopState();
$stopState->doAction($context);

echo $context->getState() . "\n";
