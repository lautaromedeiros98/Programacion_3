<?php
    include "FiguraGeometrica.php";

    class Rectangulo extends FiguraGeometrica
    {
        protected $_ladoUno;
        protected $_ladoDos;        

        public function __construct($ladoUno,$ladoDos)
        {
            parent::_construct();
            $this->_ladoUno=$laduUno;
            $this->_ladoDos=$ladoDos;
            $this->CalcularDatos();
        }

        protected function CalcularDatos()
        {
            $this->_perimetro=($this->_ladoUno + $this->_ladoDos)*2;
            $this->_superficie=($this->_ladoUno * $this->_ladoDos);
        }

        public function Dibujar()
        {
            return "";
        }

        public function ToString()
        {
            return parent::ToString()." Lado uno: ".$this->$_ladoUno." Lado dos: ".$this->_ladoDos;
        }
    }
?>