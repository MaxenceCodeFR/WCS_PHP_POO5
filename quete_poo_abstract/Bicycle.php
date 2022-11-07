<?php
require_once 'Vehicle.php';
require_once 'interface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() >= 10) {
            return $this->true;
        } else {
            return $this->false;
        }
    }


    public function switchOff()
    {
        return false;
    }
}
