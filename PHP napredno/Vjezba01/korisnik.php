<?php

declare(strict_types=1);

class Korisnik {
    private string $ime;
    private string $prezime;
    private string $email;

    public function __construct(string $ime, string $prezime, string $email) {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->email = $email;
    }

    public function getIme(): string {
        return $this->ime;
    }

    public function setIme(string $ime): void {
        $this->ime = $ime;
    }

    public function getPrezime(): string {
        return $this->prezime;
    }

    public function setPrezime(string $prezime): void {
        $this->prezime = $prezime;
    }

    public function getEmail(): string {
        return $this->email;
    }

    // Setter za email svojstvo treba provjeriti da li je poslan ispravan format email adrese

    public function setEmail(string $email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return;
        }
        $this->email = $email;
    }
}

$korisnik = new Korisnik ('Ivan', 'Ivić', 'ivan.ivic@gmail.com');
$korisnik->setEmail('ivan.ivic@gmail.com');
echo $korisnik->getEmail();

echo '<pre>';
var_dump($korisnik);
echo '</pre>';