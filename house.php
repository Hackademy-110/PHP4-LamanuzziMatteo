<?php
class Muro{
    public $muro;
    public function __construct($muro){
        $this->muro=$muro;
    }
}
class Tetto{
    public $tetto;
    public function __construct($tetto){
        $this->tetto=$tetto;
    }
}
class Pavimento{
    public $pavimento;
    public function __construct($pavimento){
        $this->pavimento=$pavimento;
    }
}
class Casa{
    public $muro, $tetto, $pavimento;
    public function __construct(Muro $muro,Tetto $tetto,Pavimento $pavimento){
        $this->muro=$muro;
        $this->tetto=$tetto;
        $this->pavimento=$pavimento;
    }
}
$casetta=new Casa(new Muro('Bianco'),new Tetto('Sporgente'),new Pavimento('Piastrelle'));
var_dump($casetta);