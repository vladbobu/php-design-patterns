# Factory Method Design Pattern

## Description

The Factory Method Pattern is a creational pattern that provides an interface for creating objects in a superclass but allows subclasses to alter the type of objects that will be created. It's used to delegate the instantiation logic to child classes.

## Implementation

This example demonstrates the Factory Method Pattern using a `VehicleFactory` interface and its concrete implementations (`CarFactory`, `TruckFactory`). Each factory creates a different type of vehicle (`Car`, `Truck`). This pattern allows for flexibility in creating various objects while still adhering to a common interface.

## Usage

- Useful when a class can't anticipate the class of objects it needs to create.
- When a class wants its subclasses to specify the objects it creates.
- When classes delegate responsibility to one of several helper subclasses, and you want to localize the knowledge of which helper subclass is the delegate.

Refer to the PHP code for a detailed implementation.
