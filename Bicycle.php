<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

  class Bicycle extends Vehicle implements LightableInterface
  { 
    private $light;

    public function __construct(string $color, int $nbSeats)
    {
      parent::__construct($color, $nbSeats);
        
    }
    public function switchOn(): bool{
        if($this->currentSpeed > 10){
        $this->light = true;
        return $this->light;
       }
    }
    public function switchOff():bool{
        $this->light = false;
        return $this->light;
    }
}