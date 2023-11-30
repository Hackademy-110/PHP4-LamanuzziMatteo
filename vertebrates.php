<?php
trait BloodTemp{
    public $bloodTemp;
}
abstract class Vertebrates{
    public $species;
    public $spineLength;
    public function __construct($species,$spineLength){
        $this->species=$species;
        $this->spineLength=$spineLength;
    }
}
abstract class WarmBlood extends Vertebrates{
    use BloodTemp;
    public $mantle;
    public function __construct($species,$spineLength,$mantle,$bloodTemp){
        parent::__construct($species,$spineLength);
        $this->mantle=$mantle;
        $this->bloodTemp=$bloodTemp;
    }
}
class Mammal extends WarmBlood{
    public $fangs;
    public $tails;
    public function __construct($species,$spineLength,$mantle,$bloodTemp,$fangs,$tails){
        parent::__construct($species,$spineLength,$mantle,$bloodTemp);
        $this->fangs=$fangs;
        $this->tails=$tails;
    }
}
$lion=new Mammal('leone','1m','manto corto','38°','retrattili','lunga');
// print_r($lion);

class Birds extends WarmBlood{
    public $flyHeight;
    public $song;
    public function __construct($species,$spineLength,$mantle,$bloodTemp,$flyHeight,$song){
        parent::__construct($species,$spineLength,$mantle,$bloodTemp);
        $this->flyHeight=$flyHeight;
        $this->song=$song;
    }
}
$pidgeon=new Birds('Piccione','20cm','Grigio/Nero','36§','1000m','Brubruh');
// print_r($pidgeon);

abstract class ColdBlooded extends Vertebrates{
    public $limbs;
    public $terrestrial;
    public function __construct($species,$spineLength,$limbs,$terrestrial){
        parent::__construct($species,$spineLength,$mantle);
        $this->limbs=$limbs;
        $this->terrestrial=$terrestrial;
    }
}
class Fish extends ColdBlooded{
    use BloodTemp;
    public $scales;
    public $waterType;
    public function __construct($species,$spineLength,$limbs,$terrestrial,$bloodTemp,$scales,$waterType){
        parent::__construct($species,$spineLength,$limbs,$terrestrial);
        $this->bloodTemp=$bloodTemp;
        $this->scales=$scales;
        $this->waterType=$waterType;
    }
}
$pesciotto=new Fish('Pesce rosso','30cm','pinne laterali e caudale','acquatico','30°','morbide','salata');
// print_r($pesciotto);