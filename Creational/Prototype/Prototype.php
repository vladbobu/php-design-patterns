<?php

// Prototype Interface
interface Prototype
{
    public function clone(): Prototype;
}

// Concrete Prototype
class ConcretePrototype implements Prototype
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function clone(): Prototype
    {
        // Deep copy is used if objects have complex references
        // Shallow copy is used when that is not the case
        return clone $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

// Client code
$original = new ConcretePrototype("Original");
$clone = $original->clone();
$clone->setName("Cloned");

echo "Original Object Name: " . $original->getName() . "\n";
echo "Cloned Object Name: " . $clone->getName() . "\n";
