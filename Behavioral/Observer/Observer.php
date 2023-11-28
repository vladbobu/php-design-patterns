<?php

// Observer Interface
interface Observer
{
    public function update(string $message): void;
}

// Observable Interface
interface Observable
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notifyObservers(): void;
}

// Concrete Observable
class NewsPublisher implements Observable
{
    private array $observers = [];
    private string $latestNews;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, fn ($o) => $o !== $observer);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->latestNews);
        }
    }

    public function publishNews(string $news): void
    {
        $this->latestNews = $news;
        $this->notifyObservers();
    }
}

// Concrete Observer
class NewsSubscriber implements Observer
{
    public function update(string $news): void
    {
        echo "New update received: " . $news . "\n";
    }
}

// Client code
$publisher = new NewsPublisher();
$subscriber1 = new NewsSubscriber();
$subscriber2 = new NewsSubscriber();

$publisher->attach($subscriber1);
$publisher->attach($subscriber2);

$publisher->publishNews("Breaking News: PHP 8.3 Released!");

$publisher->detach($subscriber1);

$publisher->publishNews("Update: PHP 8.3 Features Unveiled.");
