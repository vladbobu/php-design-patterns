# Bridge Design Pattern

## Description

The Bridge Pattern is a structural design pattern that decouples an abstraction from its implementation so that the two can vary independently. It's a way to avoid a permanent binding between an abstraction and its implementation.

## Implementation

The example demonstrates the Bridge Pattern with `Color` as the Implementor interface and `Red`, `Blue` as Concrete Implementors. The `Shape` class is the Abstraction, and `Circle`, `Square` are Refined Abstractions. This structure allows `Shape` to vary independently from the `Color` interface.

## Usage

- Applicable when you want to avoid a permanent binding between an abstraction and its implementation. This might be the case when the implementation must be selected or switched at runtime.
- Useful for hiding implementation details from clients.
- Beneficial when an abstraction and its implementation should be extensible by subclassing.

Refer to the PHP code for a detailed implementation.
