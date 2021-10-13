<?php

class Cylinder extends Circle
{
public $height;

    /**
     * @param $height
     */
    public function __construct($radius,$color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea()*2 + parent::calculatePerimeter()*$this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea()*$this->height;
    }

}