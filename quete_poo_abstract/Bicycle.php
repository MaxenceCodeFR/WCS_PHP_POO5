<?php
require_once 'Vehicle.php';
require_once 'interfaces.php';

class Bicycle extends Vehicle implements LightableInterface
{
    protected int $currentSpeed;



    /**
     * Get the value of currentSpeed
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     *
     * 
     */
    public function setCurrentSpeed($currentSpeed)
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
        return $this;
    }

    public function switchOn(): bool
    {
        if ($currentSpeed >= 10) {
            return $this->true;
        } else {
            return $this->false;
        }
    }
}
