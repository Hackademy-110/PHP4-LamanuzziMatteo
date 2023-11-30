<?php
class Razza{
    public $race;
    public function __construct($race){
        $this->race=$race;
    }
}
class Arma{
    public $weapon;
    public function __construct($weapon){
        $this->weapon=$weapon;
    }
}
class Armatura{
    public $armour;
    public function __construct($armour){
        $this->armour=$armour;
    }
}
class Soldato{
    public function __construct(Razza $race, Arma $weapon, Armatura $armour){
        $this->race=$race;
        $this->weapon=$weapon;
        $this->armour=$armour;
    }
}
$soldatino=new Soldato(new Razza('Orco'),new Arma('Asciona'),new Armatura('Piastroni'));
var_dump($soldatino);
