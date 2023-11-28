# Flyweight Design Pattern

## Description

The Flyweight Pattern is used to minimize memory usage or computational expenses by sharing as much as possible with similar objects. It's a way to use objects in large quantities when a simple repeated representation would use an unacceptable amount of memory.

## Implementation

This example illustrates the Flyweight Pattern with a `CharacterFlyweight` class. The `FlyweightFactory` manages `CharacterFlyweight` objects and ensures that objects sharing the same intrinsic state are reused. The intrinsic state is internal and immutable, while the extrinsic state is passed in by the client.

## Usage

- Useful when a program needs to create a huge number of similar objects.
- Applicable for reducing the memory footprint of an application.
- Beneficial in cases where objects have repeatable states, and these states can be externalized.

Refer to the PHP code for a detailed implementation.
