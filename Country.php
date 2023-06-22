<?php

declare(strict_types=1);

class Country
{
    private string $name;
    private float $surface;
    private int $population;

    /**
     * Constructeur de la classe Country.
     *
     * @param string $name Le nom du pays (par défaut : "Unknown").
     * @param float $surface La surface du pays en kilomètres carrés (par défaut : 0).
     * @param int $population La population du pays (par défaut : 0).
     */
    public function __construct(string $name="Unknown", float $surface = 0, int $population = 0)
    {
        $this->name = $name;
        $this->surface = $surface;
        $this->population = $population;
    }

    /**
     * Destructeur de la classe Country.
     * Affiche un message de destruction contenant le nom du pays.
     */
    public function __destruct()
    {
        echo "Destruction $this->name\n";
    }

    /**
     * Affiche les informations du pays.
     * Inclut le nom, la surface et la population.
     *
     * @return void
     */
    public function print() : void
    {
        echo "$this->name\n";
        echo "Surface : {$this->surface}\n";
        echo "Population : {$this->population}\n";
    }

    /**
     * Accesseur de la classe Country.
     *
     * @return int La valeur de la population du pays. sous forme d'un entier.
     */
    public function getPopulation() : int
    {
        return $this->population;
    }

    /**
     * Modificateur de la classe Country.
     *
     * @param int $population La population du pays.
     */
    public function setPopulation(int $population) : void
    {
        $this->population = $population;
    }

    /**
     * Accesseur de la classe Country.
     *
     * @return float La surface du pays.
     */
    public function getSurface() : float
    {
        return $this->surface;
    }

    /**
     * Modificateur de la classe Country.
     *
     * @param float $surface La surface du pays.
     */
    public function setSurface(float $surface) : void
    {
        $this->surface = $surface;
    }

    /**
     * Accesseur de la classe Country.
     *
     * @return string Le nom du pays.
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Modificateur de la classe Country.
     *
     * @param string $name Le nom du pays.
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * Calcule la densité de population du pays.
     *
     * @return float La densité de population du pays.
     */
    public function getDensity() : float
    {
        $density = 0;
        if (($this->surface > 0) && ($this->population > 0)) {
            $density = $this->population / $this->surface;
        }
        return $density;
    }

    /**
     * Vérifie si un pays est égal à un autre pays.
     *
     * @param Country $pays Le pays à comparer.
     * @return bool Vrai si les pays sont égaux, sinon faux.
     */
    public function isEqual(Country $pays) : bool
    {
        $res = false;
        if (($this->surface == $pays->getSurface()) && ($this->name == $pays->getName()) && ($this->population == $pays->getPopulation())) {
            $res = true;
        }
        return $res;
    }
}