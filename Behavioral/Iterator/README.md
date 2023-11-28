# Iterator Design Pattern

This section covers the Iterator Design Pattern in PHP.

## Description

The Iterator Pattern provides a way to access the elements of an aggregate object sequentially without exposing its underlying representation. It is especially useful for collections of items.

## PHP Implementation

In the provided PHP example, we define an `Iterator` interface with methods `hasNext()` and `next()`. The `AlphabeticalOrderIterator` class implements this interface, allowing sequential traversal over a `WordsCollection` object. The iterator can traverse the collection in both forward and reverse order.

## Usage

The Iterator Pattern is widely used when:
- Accessing contents of a collection object without exposing its internal structure.
- Supporting multiple types of traversals on collection objects.
- Providing a uniform interface for different types of collections.

Refer to the provided PHP code for a practical implementation example.
