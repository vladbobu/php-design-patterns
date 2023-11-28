<?php

// Abstract Factory Interface
interface FurnitureFactory
{
    public function createChair(): Chair;
    public function createSofa(): Sofa;
}

// Concrete Factories
class ModernFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new ModernChair();
    }

    public function createSofa(): Sofa
    {
        return new ModernSofa();
    }
}

class VictorianFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createSofa(): Sofa
    {
        return new VictorianSofa();
    }
}

// Product Interfaces
interface Chair
{
    public function describe(): void;
}

interface Sofa
{
    public function describe(): void;
}

// Concrete Products
class ModernChair implements Chair
{
    public function describe(): void
    {
        echo "This is a modern chair.\n";
    }
}

class ModernSofa implements Sofa
{
    public function describe(): void
    {
        echo "This is a modern sofa.\n";
    }
}

class VictorianChair implements Chair
{
    public function describe(): void
    {
        echo "This is a Victorian chair.\n";
    }
}

class VictorianSofa implements Sofa
{
    public function describe(): void
    {
        echo "This is a Victorian sofa.\n";
    }
}

// Client code
function clientCode(FurnitureFactory $factory): void
{
    $chair = $factory->createChair();
    $sofa = $factory->createSofa();

    $chair->describe();
    $sofa->describe();
}

clientCode(new ModernFurnitureFactory());
clientCode(new VictorianFurnitureFactory());
