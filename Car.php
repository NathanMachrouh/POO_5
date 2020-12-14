<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private $hasParkBrake;
    private $light;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function switchOn() : bool
    {
        $this->light = true;
        return $this->light;
    } 
    public function switchOff() : bool
    {
        $this->light = false;
        return $this->light;
    }

    public function start(): string
    {
        if ($this->hasParkBrake == true)
        {
            throw new Exception("Park Brake Engaged"); 
        } 
        return "Start !!";
    }  

    public function setParkBrake(bool $hasParkBrake):void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    /*public function getParkBrake():bool
    {
        return $this->hasParkBrake;
    }*/

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}