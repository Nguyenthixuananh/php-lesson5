<?php

class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    /**
     * @param $xSpeed
     * @param $ySpeed
     */
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function move()
    {
        echo parent::getX() + $this->xSpeed . "<br>";
        echo parent::getY() + $this->ySpeed . "<br>";
    }
    public function toString()
    {
        parent::toString();
        echo "<br/>";
        echo " "."xSpeed =  " . $this->xSpeed . "<br>";
        echo " "."ySpeed =  " . $this->ySpeed . "<br>";
    }


}