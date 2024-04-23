<?php
declare(strict_types=1);

class Osoba {
    protected string $ime;
    protected string $prezime;

    public function __construct(string $ime, string $prezime) {
        $this->ime = $ime;
        $this->prezime = $prezime;
    }

    public function __toString(): string {
        return $this->ime . ' ' . $this->prezime;
    }
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
}

$student = new Student('Pero', 'Perić', '1234567890');
echo $student;