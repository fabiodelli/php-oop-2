<?php
require_once __DIR__ . '/../Traits/Image.php';
class Laptop extends Computer
{
    use Image;
    protected $monitor;
    protected $mbo;
    protected $keyboard;

    public function __construct($brand, $model, $productImage, $monitor, $mbo, $keyboard)
    {
        parent::__construct($brand, $model);
        $this->setProductImage($productImage);
        $this->monitor = $monitor;
        $this->mbo = $mbo;
        $this->keyboard = $keyboard;
    }

    public function getProductType()
    {
        return "Laptop";
    }

    public function getDeviceInfo()
    {
        return parent::getDeviceInfo() . "<br>Monitor: {$this->monitor}<br>Motherboard: {$this->mbo}<br>Keyboard: {$this->keyboard}";
    }
    
}