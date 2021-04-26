<?php


require_once 'Vehicle.php';
require_once 'Bicycle.php';


class Bicycle extends Vehicle implements LightableInterface
{
    public string $color;
    public int $currentSpeed;
    public int $nbSeats = 1;
    public int $nbWheels = 2;
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function switchOn(): bool
    {
        if($this->currentSpeed >= 10) {
            return true;
        }
    }
    public function switchOff(): bool
    {
        return false;
    }
}

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
