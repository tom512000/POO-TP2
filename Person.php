<?php
declare(strict_types=1);

class Person
{
    private string $lastName;
    private string $firstName;
    private int $age;

    public function print() : void
    {
        echo "Nom : {$this->lastName}\n";
        echo "Prenom : {$this->firstName}\n";
        echo "Age : {$this->age}\n" ;
    }

    public function __construct (string $lastName = 'Doe', string $firstName = 'John', int $age = 0)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
    }

    public function getLastName() : string
    {
        return $this->lastName;
    }
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    public function getAge() : int
    {
        return $this->age;
    }

    public function setAge(int $age) : void
    {
        $this->age = $age;
    }

    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    public function __toString() : string
    {
        $res = "Nom : {$this->lastName}\n";
        $res = $res."Prenom : {$this->firstName}\n";
        $res = $res."Age : {$this->age}" ;
        return $res;
    }

}
