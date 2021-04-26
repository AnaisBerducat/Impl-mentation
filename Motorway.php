<?php
require_once 'Highway.php';

final class MotorWay extends Highway
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }
    public function addVehicle(Vehicle $vehicle){
        if ($vehicle instanceof Car){
            $currentVehicle = $this->getCurrentVehicles($vehicle);
            array_push($currentVehicle, $vehicle);
            $this->setCurrentVehicles($currentVehicle);
        }
    }

}
