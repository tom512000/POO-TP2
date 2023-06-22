<?php

declare(strict_types=1);

class Person
{
    private string $lastName;
    private string $firstName;
    private int $age;

    /**
     * Constructeur de la classe Person.
     *
     * @param string $lastName Le nom de famille de la personne (par défaut: 'Doe').
     * @param string $firstName Le prénom de la personne (par défaut: 'John').
     * @param int $age L'âge de la personne (par défaut: 0).
     */
    public function __construct(string $lastName = 'Doe', string $firstName = 'John', int $age = 0)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
    }

    /**
     * Accesseur de la classe Person.
     *
     * @return string Le nom de famille de la personne sous forme de chaîne de caractères.
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * Modificateur de la classe Person.
     *
     * @param string $lastName Le nouveau nom de famille de la personne sous forme de chaîne de caractères.
     */
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    /**
     * Accesseur de la classe Person.
     *
     * @return string Le prénom de la personne sous forme de chaîne de caractères.
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * Modificateur de la classe Person.
     *
     * @param string $firstName Le nouveau prénom de la personne sous forme de chaîne de caractères.
     */
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    /**
     * Accesseur de la classe Person.
     *
     * @return int L'âge de la personne sous forme d'entier.
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Modificateur de la classe Person.
     *
     * @param int $age Le nouvel âge de la personne sous forme d'entier.
     */
    public function setAge(int $age) : void
    {
        $this->age = $age;
    }

    /**
     * Affiche les informations de la personne.
     */
    public function print() : void
    {
        echo "Nom : {$this->lastName}\n";
        echo "Prenom : {$this->firstName}\n";
        echo "Age : {$this->age}\n";
    }

    /**
     * Retourne une représentation textuelle de la personne.
     *
     * @return string La représentation textuelle de la personne.
     */
    public function __toString() : string
    {
        $res = "Nom : {$this->lastName}\n";
        $res = $res."Prenom : {$this->firstName}\n";
        $res = $res."Age : {$this->age}";
        return $res;
    }
}