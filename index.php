<?php

// Base class: SportsCar
class SportsCar
{
    // Encapsulation: Private attributes
    private $brand;
    private $model;
    private $maxSpeed;

    // Constructor to initialize attributes
    public function __construct($brand, $model, $maxSpeed)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
    }

    // Public method to display car details
    public function displayDetails()
    {
        return "Brand: {$this->brand}, Model: {$this->model}, Max Speed: {$this->maxSpeed} km/h";
    }

    // Public method to demonstrate acceleration
    public function accelerate()
    {
        return "The {$this->model} accelerates swiftly!";
    }
}

// Derived class: LuxuryCar (inherits from SportsCar)
class LuxuryCar extends SportsCar
{
    // Additional attribute for LuxuryCar
    private $interiorMaterial;

    // Constructor for LuxuryCar, using the parent constructor
    public function __construct($brand, $model, $maxSpeed, $interiorMaterial)
    {
        parent::__construct($brand, $model, $maxSpeed); // Call parent constructor
        $this->interiorMaterial = $interiorMaterial;
    }

    // Method to display luxury car details (overrides the parent method)
    public function displayDetails()
    {
        $parentDetails = parent::displayDetails(); // Access the parent method
        return $parentDetails . ", Interior Material: {$this->interiorMaterial}";
    }

    // Additional method specific to LuxuryCar
    public function playMusic()
    {
        return "Playing soothing music on the premium sound system.";
    }
}

// Creating an instance of SportsCar
$sportsCar = new SportsCar("Ferrari", "488 Spider", 330);
echo $sportsCar->displayDetails() . "\n";
echo $sportsCar->accelerate() . "\n\n";

// Creating an instance of LuxuryCar
$luxuryCar = new LuxuryCar("Mercedes-Benz", "S-Class", 250, "Leather");
echo $luxuryCar->displayDetails() . "\n";
echo $luxuryCar->accelerate() . "\n";
echo $luxuryCar->playMusic() . "\n";
