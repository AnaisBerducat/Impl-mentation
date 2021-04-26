<?php

require_once 'Vehicle.php';

class Truck extends Vehicle{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    public int $capacityStockage;
    public int $cargo = 0;

    public function __construct(string $color, int $nbSeats, string $energy,int $capacityStockage)
{
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
}
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Truck
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
    public function getCapacityStockage(): int 
    {
        return $this->capacityStockage;
    }
    public function setCapacityStockage(int $capacityStockage): void
    {
        $this->capacityStockage = $capacityStockage;
    }
    public function getCargo(): int 
    {
        return $this->cargo;
    }
    public function setCargo(int $cargo): void
    {
        $this->cargo = $cargo;
    }
    public function cargoOrNot()
    {
        if ($this->getCargo() <= 99){
        echo "in filling";
        } else {
        echo "full";
        }
    }
}