<?php

class Shape {
    public string $name;
    public string $color;
    public function __construct(string $name, $color)
    { $this->name = $name;
        $this->color= $color;
    }

    public function show(): string
    {
        echo "I am a shape. My name is ".$this->name." . My color is".$this->color;
    }
}