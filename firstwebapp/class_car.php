<?php

class Car
{
    public $speed;
    public $number;

    public function __construct()
    {
        echo "initialize\n";
    }

    public function drive(): void
    {
        echo "drive: {$this->speed}km/h\n";
    }

    public function stop(): void
    {
        echo "stop\n";
        $this->speed = 0;
    }
}
