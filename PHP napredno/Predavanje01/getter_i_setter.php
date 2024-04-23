<?php
declare(strict_types=1);

class Car {
    private string $color;
    private string $model;

    public function __construct(string $color, string $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        if ($color == 'black') {
            return;
        }
        $this->color = $color;
    }
}

$car = new Car('red', 'Audi');
$car->setColor('black');
echo $car->getColor();