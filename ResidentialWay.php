<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(2);
        $this->setMaxSpeed(50);
    }
    public function addVehicle(Vehicle $vehicle){
            $currentVehicle = $this->getCurrentVehicles($vehicle);
            array_push($currentVehicle, $vehicle);
            $this->setCurrentVehicles($currentVehicle);
    }

}