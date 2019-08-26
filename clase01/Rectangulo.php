<?php
require "FiguraGeometrica.php";
class Rectangulo extends FiguraGeometrica
{
    private $_ladoUno;
    private $_ladoDos;

    public function _construct($ladoUno,$ladoDos)
    {
        parent::_construct();
        $this->_color="yellow";
        $this->_ladoUno=$ladoUno;
        $this->_ladoDos=$ladoDos;
        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_perimetro = (($this->_ladoUno)*2) + (($this->_ladoDos)*2);
        $this->_superficie = $tihs->_ladoUno * $this->_ladoDos;
    }

    public function ToString()
    {
        return parent::ToString()." Lado uno: ".$this->_ladoUno." Lado dos: ".$this->ladoDos;
    }

    public function Dibujar()
    {

    }
}
?>