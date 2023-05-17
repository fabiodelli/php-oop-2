<?php

namespace Models;

class Desktop extends Computer
{
    protected $monitor;
    protected $mbo;
    protected $keyboard;

    public function __construct($brand, $model, $monitor, $mbo, $keyboard)
    {
        parent::__construct($brand, $model);
        $this->monitor = $monitor;
        $this->mbo = $mbo;
        $this->keyboard = $keyboard;
    }

    public function getProductType()
    {
        return "Desktop";
    }

    public function getDeviceInfo()
    {
        return parent::getDeviceInfo() . "<br>Monitor: {$this->monitor}<br>Motherboard: {$this->mbo}<br>Keyboard: {$this->keyboard}";
    }
}