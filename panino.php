<?php
class Panino{
    public $bread;
    public $meat;
    public $side;
    public $dressing;
    public function __construct(Bread $bread, Meat $meat,Side $side,Dressing $dressing){
        $this->bread=$bread;
        $this->meat=$meat;
        $this->side=$side;
        $this->dressing=$dressing;
    }
}
class Bread{
    public $bread;
    public function __construct($bread){
        $this->bread=$bread;
    }
}
class Meat{
    public $meat;
    public function __construct($meat){
        $this->meat=$meat;
    }
}
class Side{
    public $side;
    public function __construct($side){
        $this->side=$side;
    }
}
class Dressing{
    public $dressing;
    public function __construct($dressing){
        $this->dressing=$dressing;
    }
}
$buonPanino=new Panino(new Bread('Piadina'),new Meat('Salsiccia'),new Side('Squacquerone'),new Dressing('Rucola'));
var_dump($buonPanino);