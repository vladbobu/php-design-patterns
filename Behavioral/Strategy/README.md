# Strategy Design Pattern

## Description

The Strategy Pattern in PHP is a behavioral design pattern that enables selecting an algorithm's behavior at runtime. It defines a family of algorithms, encapsulates each one, and makes them interchangeable within that family.

## PHP Implementation

In this example, `ShoppingCart` acts as the context, and it can use different payment strategies (`CreditCardPayment`, `PayPalPayment`) interchangeably. The `PaymentStrategy` interface defines a way to pay, and concrete strategies implement this interface. This design allows changing the payment method dynamically. PHP features are used for type safety and clarity in implementation.

## Usage

- When you have multiple classes that differ only in their behavior.
- For isolating the business logic of a class from the implementation details of algorithms that may not be as important in the context of that logic.
- When class behavior needs to be selected or altered at runtime.

Refer to the provided PHP code for a detailed implementation.
