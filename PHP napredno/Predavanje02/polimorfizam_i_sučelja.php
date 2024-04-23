<?php

declare(strict_types=1);

interface Shape {
    public function calcArea(): float;
}

class Circle implements Shape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calcArea(): float {
        return $this->radius ** 2 * pi();
    }
}

class Rectangle implements Shape {
    private float $width;
    private float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calcArea(): float {
        return $this->width * $this->height;
    }
}

function printArea(Shape $shape): void {
    echo 'Površina oblika je: ' . $shape->calcArea() . PHP_EOL;
}

$circle = new Circle(5);
$rectangle = new Rectangle(5, 10);

printArea($circle);
printArea($rectangle);