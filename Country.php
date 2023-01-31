<?php

class Country {

    private string $name ;
    private float $surface ;
    private int $population ;


    public function __construct (string $name="Unknown", float $surface = 0, int $population=0) {
        $this->name = $name;
        $this->surface = $surface;
        $this->population = $population;
    }

    public function __destruct(){
        echo "Destruction $this->name\n";
    }

    public function print (  ) : void
    {
        echo "$this->name\n  surface : $this->surface\n  population : $this->population \n";
    }

    public function getPopulation() : int {
        return $this->population;
    }


    public function setPopulation(int $population) : void {
        $this->population = $population;
    }


    public function getSurface() : float{
        return $this->surface;
    }

    public function setSurface(float $surface) : void {
        $this->surface = $surface;
    }


    public function getName() : string {
        return $this->name;
    }


    public function setName(string $name) : void {
        $this->name = $name;
    }

    public function getDensity() : float{
        $density = 0;
        if($this->surface > 0 && $this->surface > 0)
            $density = $this->population / $this->surface;
        return $density;
    }


    public function isEqual (Country $pays)  : bool {
        $egaux = false;
        if( $this->surface==$pays->surface && $this->name==$pays->name && $this->population==$pays->population)
            $egaux=true;
        return  $egaux;
    }
}