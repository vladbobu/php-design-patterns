<?php

// Subject Interface
interface Image
{
    public function display(): void;
}

// Real Subject
class RealImage implements Image
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk($fileName);
    }

    public function display(): void
    {
        echo "Displaying " . $this->fileName . "\n";
    }

    private function loadFromDisk(string $fileName): void
    {
        echo "Loading " . $fileName . "\n";
    }
}

// Proxy
class ProxyImage implements Image
{
    private RealImage $realImage;
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function display(): void
    {
        if (!isset($this->realImage)) {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->display();
    }
}

// Client code
$image = new ProxyImage("test_image.jpg");

// Image will be loaded here
$image->display();

// Image will not be loaded here
$image->display();
