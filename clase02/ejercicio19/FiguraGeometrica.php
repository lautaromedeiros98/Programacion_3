<?php
    abstract class FiguraGeometrica
    {
        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        public function _construct()
        {

        }

        public function GetColor()
        {
            return $this->_color;
        }

        public function SetColor($color)
        {
            if($color!=NULL)
            {
                $this->_color=$color;
            }
        }

        public abstract function Dibujar();
        protected abstract function CalcularDatos();

        public function ToString()
        {
            return "Color: ".$this->_color." Perimetro: ".$this->_perimetro." Superficie: ".$this->_superficie."<br>";
        }
    }
?>