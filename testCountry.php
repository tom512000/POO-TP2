<?php

declare(strict_types=1);

require_once "Country.php";

# Question 1
$france = new Country('France', 641185.0, 66600000);
$france->print();
echo "\n";
# On peut voir qu'une nouvelle instance de Country est créée.
# Caractéristiques de la classe et de l'instance :
# - name       -> string  -> 'France'
# - surface    -> float   -> 641185.0
# - population -> integer -> 66600000
# Le constructeur permet de créer une instance ou objet de la classe Country.

# Question 2
$italie = new Country('Italie');
$italie->print();
# les valeurs des attributs d’instance de l’objet $italie sont :
# - name       -> 'Italie'
# - surface    -> 0
# - population -> 0
# Ici, le constructeur a permis de créer une instance avec un seul paramètre.
# Le constructeur a permis d'initialiser les valeurs de surface et population directement à 0 lorsqu'elle ne sont pas en paramètre.
$italie->setSurface(301336.0);
$italie->setPopulation(60626442);
$italie->print();
echo "\n";
# Lors de la création de l'instance $italie, on aurait du mettre directement en paramètres les valeurs de l'instance.
# Instancier l'objet avec name, surface et population.

# Question 3
$chine = new Country();
$chine->print();
# Ici, l'instance $chine est initialisé à :
# - name       -> 'Unknown'
# - surface    -> 0
# - population -> 0
$japon = new Country('Japon', 377973);
$japon->print();
echo "\n";
# Ici, l'instance $japon est initialisé à :
# - name       -> 'Japon'
# - surface    -> 377973
# - population -> 0

# Question 4
function decodeBooleen(bool $bool): string
{
    $res = "True";
    if (!$bool) {
        $res = "False";
    }
    return $res;
}
$copieFrance = new Country($france->getName(), $france->getSurface(), $france->getPopulation());
$france->print();
$copieFrance->print();
echo "Comparaison : ".decodeBooleen($france->isEqual($copieFrance))."\n";
echo "\n";

# Question 5
# Utilisation des getteurs et setteurs avec l'instance $copieFrance :
echo "Affichage de Name : ".$copieFrance->getName()."\n";
echo "Affichage de Surface : ".$copieFrance->getSurface()."\n";
echo "Affichage de Population : ".$copieFrance->getPopulation()."\n";
$copieFrance->setName("Monaco");
echo "Modification de Name : ".$copieFrance->getName()."\n";
$copieFrance->setSurface(202000.0);
echo "Modification de Surface : ".$copieFrance->getSurface()."\n";
$copieFrance->setPopulation(36686);
echo "Modification de Population : ".$copieFrance->getPopulation()."\n";
echo "\n";

# Question 6
/**
 * Copie un objet Country.
 * Cette fonction crée une copie de l'objet Country passé en paramètre en utilisant les valeurs actuelles
 * des propriétés name, surface et population.
 *
 * @param Country $country L'objet Country à copier.
 * @return Country La copie de l'objet Country.
 */
function copie(Country $country) : Country
{
    $name = $country->getName();
    $surface = $country->getSurface();
    $population = $country->getPopulation();

    return new Country($name, $surface, $population);
}
$copieMonaco = copie($copieFrance);
$copieMonaco->print();
echo "\n";

# Question 7
/**
 * Affiche les informations d'un pays.
 * Cette fonction affiche les informations d'un pays telles que le nom, la surface et la population.
 *
 * @param Country $country L'objet Country contenant les informations du pays à afficher.
 */
function printCountry(Country $country) : void
{
    echo $country->getName()."\n";
    echo "  Surface : ".$country->getSurface()."\n";
    echo "  Population : ".$country->getPopulation()."\n";
}
printCountry($copieMonaco);
echo "\n";

# Question 8
# La différence entre une fonction et une méthode d'instance réside dans leur contexte d'utilisation et leur relation avec une classe ou un objet.
# Une fonction peut être appelé et exécuté à partir de n'importe où dans un programme. Elle peut être définie en dehors de toute classe et être utilisée de manière autonome.
# Une méthode d'instance est une fonction qui est définie à l'intérieur d'une classe et est associée à des objets spécifiques. Elle peut être appelée que sur une instance ou un objet de la classe à laquelle elle appartient.
