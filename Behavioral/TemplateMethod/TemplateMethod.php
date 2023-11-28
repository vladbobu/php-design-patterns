<?php

// Abstract Class with the Template Method
abstract class MealPreparation
{
    // The template method
    final public function prepareMeal(): void
    {
        $this->prepareIngredients();
        $this->cook();
        $this->serve();
    }

    abstract protected function prepareIngredients(): void;
    abstract protected function cook(): void;

    protected function serve(): void
    {
        echo "Serving the meal.\n";
    }
}

// Concrete Class
class PastaMeal extends MealPreparation
{
    protected function prepareIngredients(): void
    {
        echo "Preparing pasta and sauce.\n";
    }

    protected function cook(): void
    {
        echo "Cooking pasta.\n";
    }
}

class SaladMeal extends MealPreparation
{
    protected function prepareIngredients(): void
    {
        echo "Preparing greens and dressing.\n";
    }

    protected function cook(): void
    {
        // Salad doesn't need cooking
    }
}

// Client code
$pastaMeal = new PastaMeal();
$pastaMeal->prepareMeal();

$saladMeal = new SaladMeal();
$saladMeal->prepareMeal();
