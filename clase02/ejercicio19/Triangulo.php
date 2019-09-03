<?php
    require_once "FiguraGeometrica.php";
    class Triangulo extends FiguraGeometrica
    {
        protected $_base;
        protected $_altura;

        public function __construct($b,$h)
        {
            $this->_base=$b;
            $this->_altura=$h;
            $this->_color="blue";
            $this->CalcularDatos();

        }
        
        protected function CalcularDatos()
        {
            $this->_perimetro=($this->_base*$this->_altura);
            $this->_superficie=($this->_base*$this->_altura)/2;
        }

        public function Dibujar()
        {      
            echo '<span style="color:red">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   *   <br>&nbsp&nbsp&nbsp&nbsp ***  <br>&nbsp&nbsp ***** <br>&nbsp*******</span>';
        }

        public function ToString()
        {
            return parent::ToString()." Base: ".$this->$_base." Altura: ".$this->_altura;
        }
    }
?>