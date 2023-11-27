# Command Design Pattern

This section covers the Command Design Pattern in PHP.

## Description

The Command Pattern encapsulates a request as an object, thereby allowing clients to be parameterized with different requests. It also supports operations like queuing, logging, and undoable actions. The pattern includes an `Invoker` component that triggers the command, a `Command` interface, concrete `Command` classes implementing the interface, and a `Receiver` that performs the actual work.

## PHP Implementation

In the provided PHP example, we have a `Light` class (Receiver) that has methods to turn on and off. The `TurnOnLightCommand` class (Concrete Command) implements the `Command` interface and executes the light's `turnOn` method. The `RemoteControl` class (Invoker) can be set with any command and executes it when its button is pressed.

## Usage

Use the Command Pattern when you want to:
- Decouple the sender of a request from its receiver.
- Support undoable operations.
- Implement callback functionality.
- Handle operations queues.

Refer to the provided PHP code for a practical implementation example.
