<?php

// Implementor
interface Color
{
    public function applyColor(): string;
}

// Concrete Implementors
class Red implements Color
{
    public function applyColor(): string
    {
        return "Red";
    }
}

class Blue implements Color
{
    public function applyColor(): string
    {
        return "Blue";
    }
}

// Abstraction
abstract class Shape
{
    protected Color $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract public function draw(): void;
}

// Refined Abstraction
class Circle extends Shape
{
    public function draw(): void
    {
        echo "Circle drawn in " . $this->color->applyColor() . " color.\n";
    }
}

class Square extends Shape
{
    public function draw(): void
    {
        echo "Square drawn in " . $this->color->applyColor() . " color.\n";
    }
}

// Client code
$redCircle = new Circle(new Red());
$blueSquare = new Square(new Blue());

$redCircle->draw();
$blueSquare->draw();
