<?php

// Iterator Interface
interface IteratorInterface
{
    public function hasNext(): bool;
    public function next();
}

// Concrete Iterator
class AlphabeticalOrderIterator implements IteratorInterface
{
    private array $collection;
    private int $position = 0;
    private bool $reverse;

    public function __construct(WordsCollection $collection, bool $reverse = false)
    {
        $this->collection = $collection->getItems();
        $this->reverse = $reverse;
        $this->rewind();
    }

    public function rewind(): void
    {
        $this->position = $this->reverse ? count($this->collection) - 1 : 0;
    }

    public function hasNext(): bool
    {
        if ($this->reverse) {
            return $this->position > -1;
        }

        return $this->position < count($this->collection);
    }

    public function next(): mixed
    {
        $item = $this->collection[$this->position];
        $this->position += $this->reverse ? -1 : 1;
        return $item;
    }
}

// Aggregated Object
class WordsCollection
{
    private array $items = [];

    public function addItem(string $item): void
    {
        $this->items[] = $item;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getIterator(): AlphabeticalOrderIterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): AlphabeticalOrderIterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}

// Using the Iterator
$collection = new WordsCollection();
$collection->addItem("First");
$collection->addItem("Second");
$collection->addItem("Third");

$iterator = $collection->getIterator();

while ($iterator->hasNext()) {
    echo $iterator->next() . "\n";
}
