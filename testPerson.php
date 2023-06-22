<?php

declare(strict_types=1);

require_once "Person.php";

# Question 10
# Attributs de la classe Person :
# - lastName  -> string  -> 'France'
# - firstName -> string  -> 641185.0
# - age       -> integer -> 66600000
# Private correspond à garder les attributs en privé dans la classe
# Public correspond à laisser un accès libre aux attributs de la classe
# On ne peut pas accéder aux attributs d'instance de la classe Person car elles sont privés
# et ne peuvent pas être récupérés sans la création d'une méthode.
# L'encapsulation des données vise à stocker des éléments en attribut d'un objet.

# Question 11
# $inconnu = new Person;
# $inconnu->print();
# La méthode print() ne fonctionne pas car les attributs n'ont pas été initialisé dans l'instance.
# var_dump($inconnu);
# Les 3 attributs ont pour valeur *uninitialized*, les attributs n'ont pas été initialisé dans l'instance et aucun constructeur le permet.

# Question 12
# On fait appel à un constructeur lors de la création d'une nouvelle instance d'une classe.
# L'opérateur qu'on associe à l'appel d'un constructeur est new.
# L'objectif du constructeur est de créer la nouvelle instance.
# On peu instancier une infinité d'objet grâce à un constructeur.
# Le constructeur ne renvoie rien.
# Un constructeur porte obligatoirement le nom __construct.

# Question 13
# Les paramètres de ce constructeur sont :
# - lastName  -> string
# - firstName -> string
# - age       -> integer
# Le constructeur permet de créer une instance composée des 3 attributs en paramètre.
# Le mot clé $this corespond à l'objet courant à l'intérieur de lui-meme.
# $this->lastName = $lastName; :
# L'instruction suivante ajoute à l'attribut lastName de l'objet courant la variable $lastName.
# L'instruction n'est pas valide car elle n'initialise pas de valeur si les attributs de l'instance ne sont pas en paramètre.
# Nous pouvons instancier un objet d'une seule façon, en ajoutant les 3 paramètres au constructeur.
$tom = new Person('Sikora', 'Tom', 19);
$tom->print();
echo "\n";
# Les valeurs de ses attributs sont :
# - lastName  -> 'Sikora'
# - firstName -> 'Tom'
# - age       -> 19

# Question 14
$jacques = new Person('Durand', 'Jacques');
$jacques->print();
echo "\n";

# Question 15
$inconnu = new Person;
$inconnu->print();
# constructeur qui initialise les attributs `a "Doe", "John" et 0.
$jules = new Person("Durand");
$jules->print();
echo "\n";
# constructeur qui initialise les attributs `a "Durand", "John" et 0.

# Question 16
# Le type de retour de la méthode d'instance getLastName est une chaine de caractères.
# Cette méthode n'a aucun paramètres.
$nomInconnu = $inconnu->getLastName();
echo "$nomInconnu\n";
echo "\n";
# Elle n'autorise pas sa modification car cette méthode d'instance permet simplement de récupérer la valeur d'un objet et non de la modifier.

# Question 17
$prenomInconnu = $inconnu->getFirstName();
echo "Prénom : $prenomInconnu\n";
$ageInconnu = $inconnu->getAge();
echo "Age : $ageInconnu\n";
echo "\n";

# Question 18
$copie = new Person($jacques->getLastName(), $jacques->getFirstName(), $jacques->getAge());
$copie->print();
echo "\n";

# Question 19
echo $jacques->getAge()."\n";
$jacques->setAge(26);
echo $jacques->getAge()."\n";
echo "\n";

# Question 20
# Modification de l'attribut lastName
echo $jacques->getLastName()."\n";
$jacques->setLastName('Raoult');
echo $jacques->getLastName()."\n";
# Modification de l'attribut firstName
echo $jacques->getFirstName()."\n";
$jacques->setFirstName('Didier');
echo $jacques->getFirstName()."\n";
echo "\n";

# Question 21
# Sans la méthode __toString, l'intruction ne renvoie rien car elle correspond à une instance d'une classe qui ne peut pas être convertit en chaîne de caractères directement.
echo "$jacques\n";
