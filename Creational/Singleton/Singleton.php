<?php

class Singleton
{
    private static ?Singleton $instance = null;

    // The constructor is private to prevent initialization with 'new'
    private function __construct()
    {
    }

    // Prevent the instance from being cloned
    private function __clone()
    {
    }

    // Prevent from being unserialized
    private function __wakeup()
    {
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    // Example method
    public function doSomething(): void
    {
        echo "Doing something.\n";
    }
}

// Client code
$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

$instance1->doSomething();

// Check if the same instance
echo $instance1 === $instance2 ? 'Same instance' : 'Different instances';
