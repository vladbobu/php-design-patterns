# Composite Design Pattern

## Description

The Composite Pattern is used to compose objects into tree structures to represent part-whole hierarchies. It lets clients treat individual objects and compositions of objects uniformly.

## Implementation

The example illustrates the Composite Pattern using a `Graphic` interface as the Component. The `Dot` class is a Leaf that implements the `Graphic` interface. The `CompoundGraphic` class is a Composite that can contain multiple `Graphic` objects, treating them uniformly. When `render` is called on a `CompoundGraphic`, it delegates the call to its children, rendering them sequentially.

## Usage

- Suitable when you need to represent part-whole hierarchies of objects.
- Applicable when clients should ignore the difference between compositions of objects and individual objects.
- Useful when you want to structure data, or you want to represent a part-whole hierarchy.

Refer to the PHP code for a detailed implementation.
