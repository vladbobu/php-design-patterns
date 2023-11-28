# Command Design Pattern

## Description

The Command Pattern in PHP is a behavioral design pattern that turns a request into a stand-alone object. It contains all information about the request and separates concerns between the issuer of the request and the object that executes it.

## PHP Implementation

In this PHP example, the Command Pattern is demonstrated with a `Light` class (Receiver), a `TurnOnLightCommand` class (Concrete Command), and a `RemoteControl` class (Invoker). The Command interface defines an `execute` method, implemented by the concrete command. The invoker class triggers the command without needing to know the specifics of the operation.

## Usage

- Decoupling command issuers from executors.
- Implementing undo/redo operations.
- Parameterizing objects based on an action to perform.

Refer to the provided PHP code for a detailed implementation.
