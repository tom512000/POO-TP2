<?php
declare(strict_types=1);
require_once "Country.php";
require_once "../TP1/Exercice2.php";

# Question 1
$france = new Country('France', 641185.0, 66600000);
$france -> print();
# On peut voir qu'une nouvelle instance de Country est créée.
# Caractéristiques de la classe et de l'instance :
# - name       -> string  -> 'France'
# - surface    -> float   -> 641185.0
# - population -> integer -> 66600000
# Le constructeur permet de créer une instance ou objet de la classe Country.

# Question 2
$italie = new Country('Italie');
$italie -> print();
# les valeurs des attributs d’instance de l’objet $italie sont :
# - name       -> 'Italie'
# - surface    -> 0
# - population -> 0
# Ici, le constructeur a permis de créer une instance avec un seul paramètre.
# Le constructeur a permis d'initialiser les valeurs de surface et population directement à 0 lorsqu'elle ne sont pas en paramètre.
$italie -> setSurface(301336.0);
$italie -> setPopulation(60626442);
$italie -> print();
# Lors de la création de l'instance $italie, on aurait du mettre directement en paramètres les valeurs de l'instance.
# Instancier l'objet avec name, surface et population.

# Question 3
$chine = new Country();
$chine -> print();
# Ici, l'instance $chine est initialisé à :
# - name       -> 'Unknown'
# - surface    -> 0
# - population -> 0
$japon = new Country('Japon', 377973);
$japon -> print();
# Ici, l'instance $japon est initialisé à :
# - name       -> 'Japon'
# - surface    -> 377973
# - population -> 0

# Question 4
$copieFrance = new Country($france -> getName(), $france -> getSurface(), $france -> getPopulation());
$france -> print();
$copieFrance -> print();
echo "Comparaison de Name : ".decodeBooleen($france -> getName() == $copieFrance -> getName())."\n";
echo "Comparaison de Surface : ".decodeBooleen($france -> getSurface() == $copieFrance -> getSurface())."\n";
echo "Comparaison de Population : ".decodeBooleen($france -> getPopulation() == $copieFrance -> getPopulation())."\n";

# Question 5
# Utilisation des getteurs et setteurs avec l'instance $copieFrance :
echo "Affichage de Name : ".$copieFrance -> getName()."\n";
echo "Affichage de Surface : ".$copieFrance -> getSurface()."\n";
echo "Affichage de Population : ".$copieFrance -> getPopulation()."\n";
$copieFrance -> setName("Monaco");
echo "Modification de Name : ".$copieFrance -> getName()."\n";
$copieFrance -> setSurface(202000.0);
echo "Modification de Surface : ".$copieFrance -> getSurface()."\n";
$copieFrance -> setPopulation(36686);
echo "Modification de Population : ".$copieFrance -> getPopulation()."\n";

# Question 6
function copie( Country $country ) : Country
{
    return new Country($country -> getName(), $country -> getSurface(), $country -> getPopulation());
}
$copieMonaco = copie($copieFrance);
$copieMonaco -> print();

# Question 7
function printCountry( Country $country ) : void
{
    echo $country -> getName()."\n";
    echo "  surface : ".$country -> getSurface()."\n";
    echo "  population : ".$country -> getPopulation()."\n";
}
printCountry($copieMonaco);

# Question 8
# Selon moi, une fonction peut être utilisé avec n'importe quel variable ou autre fonction
# alors qu'une méthode peut être uniquement utilisé avec une Classe.

# Question 9
# Définition de :
# - classe = Créateur d'élément du même type (de même base)
# - instance = Objet utilisant une classe
# - objet = Element créé comportant des caractéristiques
# - méthode d'instance = Fonction permettant de modifier l'instance en paramètre
# - constructeur = Créateur d'une instance de classe

