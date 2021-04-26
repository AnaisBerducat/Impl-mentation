<?php

require_once 'Highway.php';
require_once 'Bicycle.php';

final class PedestrianWay extends Highway
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }
    public function addVehicle(Vehicle $vehicle){
        if ($vehicle instanceof Bicycle){
            $currentVehicle = $this->getCurrentVehicles($vehicle);
            array_push($currentVehicle, $vehicle);
            $this->setCurrentVehicles($currentVehicle);
        }
    }

}