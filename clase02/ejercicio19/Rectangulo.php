<?php
    require_once "FiguraGeometrica.php";

    class Rectangulo extends FiguraGeometrica
    {
        protected $_ladoUno;
        protected $_ladoDos;        

        public function __construct($l1,$l2)
        {
            $this->_color="red";
            $this->_ladoUno=$l1;
            $this->_ladoDos=$l2;
            $this->CalcularDatos();
        }

        protected function CalcularDatos()
        {
            $this->_perimetro=($this->_ladoUno + $this->_ladoDos)*2;
            $this->_superficie=($this->_ladoUno * $this->_ladoDos);
        }

        public function Dibujar()
        {
            
            echo '<span style="color:green">********<br>********<br>********<br><br><br><br><br></span>';
        }

        public function ToString()
        {
            return parent::ToString()." Lado uno: ".$this->$_ladoUno." Lado dos: ".$this->_ladoDos;
        }
    }
?>