<?php

abstract class Device {

    private $deviceId = null;

    /**
    * @param string $deviceId
    */
    public function __construct($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
    * @param string $deviceId
    */
    abstract public function connectDevice($deviceId): void;
    abstract public function disconnectDevice(): void;

    public function getDeviceId(): string
    {
        return $this->deviceId;
    }
}

class AudioIO extends Device
{
    private $deviceId;
    private $inputs = [];
    private $outputs = [];
    private $volume = 0;

    public static $manufacturer = "AudioIO Inc.";

    /**
    * @param string $deviceId
    */
    function __construct($deviceId)
    {
        parent::__construct($deviceId);
    }

    /**
    * @param string $deviceId
    */
    public function connectDevice($deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    public function disconnectDevice(): void
    {
        $this->deviceId = null;
    }

    /**
    * @param string $input_descriptor
    */
    public function addInput($input_descriptor): void
    {
        array_push($this->inputs, $input_descriptor);
    }

    public function getVolume(): int {
        return $this->volume;
    }

    /**
    * @param int $volume
    */
    public function setVolume($volume): void
    {
        $this->volume = $volume;
    }

}

/**
* @param Device $device
*/
function ShowDevice($device): string
{
    return $device->getDeviceId();
}
