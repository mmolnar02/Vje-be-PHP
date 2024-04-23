<?php

class Utils {
    public static function generateRandomNumber(int $min, int $max): int {
        return rand($min, $max);
    }

    public static function generateRandomString(): string {
        $number = self::generateRandomNumber(1, 100);
        return "Random number is: $number";
    }
}

$random = Utils::generateRandomNumber(1, 100);
echo $random; // 1-100

enum Gender: string{
    case M = "Male";
    case F = "Female";
    case O = "Other";
}

class User {
    private string $name;
    private Gender $gender;

    public function __construct(string $name, Gender $gender) {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function __get($property){
        return $this->$property;
    }
}

$user = new User("Anita", Gender::F);
echo $user->gender->value; //