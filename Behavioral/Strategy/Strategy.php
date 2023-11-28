<?php

// Strategy Interface
interface PaymentStrategy
{
    public function pay(int $amount): void;
}

// Concrete Strategies
class CreditCardPayment implements PaymentStrategy
{
    private string $cardNumber;

    public function __construct(string $cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    public function pay(int $amount): void
    {
        // Process the payment with CreditCard
        echo "Paying " . $amount . " using Credit Card.\n";
    }
}

class PayPalPayment implements PaymentStrategy
{
    private string $emailAddress;

    public function __construct(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function pay(int $amount): void
    {
        // Process the payment with PayPal
        echo "Paying " . $amount . " using PayPal.\n";
    }
}

// Context
class ShoppingCart
{
    private PaymentStrategy $paymentStrategy;

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy): void
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function checkout(int $amount): void
    {
        $this->paymentStrategy->pay($amount);
    }
}

// Client code
$cart = new ShoppingCart();

$cart->setPaymentStrategy(new CreditCardPayment("1234567890"));
$cart->checkout(100);

$cart->setPaymentStrategy(new PayPalPayment("user@example.com"));
$cart->checkout(200);
