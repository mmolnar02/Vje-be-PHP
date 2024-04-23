<?php
declare(strict_types=1);

abstract class Osoba {
    protected string $ime;
    protected string $prezime;

    public function __construct(string $ime, string $prezime) {
        $this->ime = $ime;
        $this->prezime = $prezime;
    }

    public function __toString(): string {
        return $this->ime . ' ' . $this->prezime;
    }

    abstract public function pozdrav(): string;
}

$osoba = new Osoba('John', 'Doe');
echo $osoba;

class Student extends Osoba {
    private string $jmbag;

    public function __construct(string $ime, string $prezime, string $jmbag) {
        parent::__construct($ime, $prezime);
        $this->jmbag = $jmbag;
    }

    public function __toString(): string {
        return parent::__toString() . ' (' . $this->jmbag . ')';
    }

    public function pozdrav(): string {
        return 'Bok, ja sam ' . $this->ime . ' ' . $this->prezime . '!';
    
    }
}