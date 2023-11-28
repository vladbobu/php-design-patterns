<?php

// Product
class Car
{
    private array $parts = [];

    public function addPart(string $part): void
    {
        $this->parts[] = $part;
    }

    public function describe(): void
    {
        echo "Car with parts: " . implode(', ', $this->parts) . ".\n";
    }
}

// Builder Interface
interface CarBuilder
{
    public function buildEngine(): void;
    public function buildWheels(): void;
    public function buildDoors(): void;
    public function getCar(): Car;
}

// Concrete Builder
class SportsCarBuilder implements CarBuilder
{
    private Car $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function buildEngine(): void
    {
        $this->car->addPart('Sports Engine');
    }

    public function buildWheels(): void
    {
        $this->car->addPart('Sports Wheels');
    }

    public function buildDoors(): void
    {
        $this->car->addPart('2 Doors');
    }

    public function getCar(): Car
    {
        return $this->car;
    }
}

// Director
class CarDirector
{
    private CarBuilder $builder;

    public function __construct(CarBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function build(): Car
    {
        $this->builder->buildEngine();
        $this->builder->buildWheels();
        $this->builder->buildDoors();
        return $this->builder->getCar();
    }
}

// Client code
$builder = new SportsCarBuilder();
$director = new CarDirector($builder);
$car = $director->build();
$car->describe();
