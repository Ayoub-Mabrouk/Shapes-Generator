<?php
abstract class Shape
{
    public $Xaxes;
    public $Yaxes;
}
class Circle extends Shape
{
    public $R;
    public function __construct($R, $Xaxes, $Yaxes)
    {
        $this->R = $R;
        $this->Xaxes = $Xaxes;
        $this->Yaxes = $Yaxes;
    }
}
class Square extends Shape
{
    public $Width;
    public function __construct($Width, $Xaxes, $Yaxes)
    {
        $this->Width = $Width;
        $this->Xaxes = $Xaxes;
        $this->Yaxes = $Yaxes;
    }
}
class Rect extends Shape
{
    public $Width;
    public $Height;

    public function __construct($Width, $Height, $Xaxes, $Yaxes)
    {
        $this->Width = $Width;
        $this->Height = $Height;
        $this->Xaxes = $Xaxes;
        $this->Yaxes = $Yaxes;
    }
}
