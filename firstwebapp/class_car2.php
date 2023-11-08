<?php

class Car2
{
    public $max_speed;
    private $manufacture;
    public $speed = 0;

    /**
    * @param string $manufacture
    * @param int $max_speed
    */
    public function __construct($manufacture, $max_speed)
    {
        $this->manufacture = $manufacture;
        $this->max_speed = $max_speed;
    }


    public function display(): void
    {
        echo "this car is $this->manufacture\n";
    }

    public function gear(): void
    {
        if ($this->speed + 10 < $this->max_speed) {
            $this->speed += 10;
        }
    }

    public function drive(): void
    {
        echo "run: $this->speed km/h\n";
    }
}
