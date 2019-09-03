<?php
    class Punto
    {
        protected $_y;
        protected $_x;

        public function __cosntruct($x,$y)
        {
            $this->_y=$y;
            $this->_x=$x;
        }

        public function GetX()
        {
            return $this->_x;
        }

        public function GetY()
        {
            return $this->_y;
        }
    }
?>