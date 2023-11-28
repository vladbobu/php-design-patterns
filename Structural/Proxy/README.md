# Proxy Design Pattern

## Description

The Proxy Pattern provides a placeholder or surrogate for another object to manage its access. It's often used to control the operation and access to the object it is representing. Proxies can add functionality, control the creation and access, or log the operations of the real object.

## Implementation

This example demonstrates the Proxy Pattern with an `Image` interface representing the Subject, a `RealImage` class as the Real Subject, and a `ProxyImage` class as the Proxy. The `ProxyImage` controls access to `RealImage`, loading the image only when its `display` method is called. This adds a level of efficiency in resource management.

## Usage

- Useful when you need a more versatile or sophisticated reference to an object than a simple pointer.
- Applicable in scenarios where you want to add behavior or control the access to an object without changing the object itself.
- Common in scenarios where objects need to be created on demand or loaded only when needed.

Refer to the PHP code for a detailed implementation.
