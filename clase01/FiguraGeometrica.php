<?php
abstract class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    public function _construct()
    {
        $this->_color="null";
        $this->_perimetro=0;
        $this->_superficie=0;
    }

    protected abstract function CalcularDatos();

    abstract function Dibujar();
 

    public function GetColor()
    {
        return $this->_color;
    }

    public function SetColor(string $color)
    {
        if($color != NULL)
        {
            $this->_color=$color;
        }
    }

    public function ToString()
    {
        return "Perimetro: " . $this->_perimetro . " Superficie: " . $this->_superficie . " Color: " . $this->_color; 
    }
}
?>