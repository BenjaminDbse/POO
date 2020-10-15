<?php


namespace Cars;


class Car
{
    const forward = 5;

    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * @return mixed
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * @param mixed $nbWheels
     */
    public function setNbWheels($nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return mixed
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @param mixed $currentSpeed
     */
    public function setCurrentSpeed($currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return mixed
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * @param mixed $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function forward()
    {
        while ($this->getEnergyLevel() > self::forward) {
            $this->setEnergyLevel($this->getEnergyLevel() - self::forward);
        }
    }

        public function brake()
        {
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Brake !!!";
            }
            $sentence .= "I'm stopped !";
            return $sentence;
        }

    }


