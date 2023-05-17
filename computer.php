<?php

namespace Models;

class Computer {
    protected $brand;
    protected $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getProductType() {
        return "Computer";
    }

    public function getDeviceInfo() {
        return "Brand: {$this->brand}\nModel: {$this->model}";
    }
}
