<?php

// Component Interface
interface Graphic
{
    public function render(): void;
}

// Leaf
class Dot implements Graphic
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function render(): void
    {
        echo "Dot at ({$this->x}, {$this->y})\n";
    }
}

// Composite
class CompoundGraphic implements Graphic
{
    private array $children = [];

    public function add(Graphic $child): void
    {
        $this->children[] = $child;
    }

    public function render(): void
    {
        foreach ($this->children as $child) {
            $child->render();
        }
    }
}

// Client code
$dot1 = new Dot(1, 2);
$dot2 = new Dot(3, 4);
$compoundGraphic = new CompoundGraphic();
$compoundGraphic->add($dot1);
$compoundGraphic->add($dot2);

$compoundGraphic->render();
