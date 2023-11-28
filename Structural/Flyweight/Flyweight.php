<?php

// Flyweight Interface
interface Flyweight
{
    public function render(string $extrinsicState): string;
}

// Concrete Flyweight
class CharacterFlyweight implements Flyweight
{
    private string $intrinsicState;

    public function __construct(string $intrinsicState)
    {
        $this->intrinsicState = $intrinsicState; // Like character code
    }

    public function render(string $extrinsicState): string
    {
        return sprintf("Character: %s (Style: %s)\n", $this->intrinsicState, $extrinsicState);
    }
}

// Flyweight Factory
class FlyweightFactory
{
    /**
     * @var CharacterFlyweight[]
     */
    private array $pool = [];

    public function getFlyweight(string $intrinsicState): CharacterFlyweight
    {
        if (!isset($this->pool[$intrinsicState])) {
            $this->pool[$intrinsicState] = new CharacterFlyweight($intrinsicState);
        }
        return $this->pool[$intrinsicState];
    }
}

// Client code
$factory = new FlyweightFactory();

// Can share the flyweight but with different extrinsic states
$flyweightA = $factory->getFlyweight('A');
echo $flyweightA->render('Bold');

$flyweightB = $factory->getFlyweight('B');
echo $flyweightB->render('Italic');
