<?php

// Product Interface
interface Vehicle
{
    public function getType(): string;
}

// Concrete Products
class Car implements Vehicle
{
    public function getType(): string
    {
        return 'Car';
    }
}

class Truck implements Vehicle
{
    public function getType(): string
    {
        return 'Truck';
    }
}

// Creator (Factory) Interface
interface VehicleFactory
{
    public function createVehicle(): Vehicle;
}

// Concrete Creators (Factories)
class CarFactory implements VehicleFactory
{
    public function createVehicle(): Vehicle
    {
        return new Car();
    }
}

class TruckFactory implements VehicleFactory
{
    public function createVehicle(): Vehicle
    {
        return new Truck();
    }
}

// Client code
function clientCode(VehicleFactory $factory): void
{
    $vehicle = $factory->createVehicle();
    echo 'Created vehicle type: ' . $vehicle->getType() . "\n";
}

clientCode(new CarFactory());
clientCode(new TruckFactory());
