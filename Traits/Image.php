<?php
trait Image {
    protected $productImage;

    public function setProductImage($image) {
        $this->productImage = $image;
    }

    public function getProductImage() {
        return $this->productImage;
    }
}
