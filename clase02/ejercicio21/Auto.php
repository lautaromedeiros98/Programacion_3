<?php
    class Auto
    {
        private $_color;
        private $_precio;
        private $_marca;
        private $_fecha;

        public function __construct($marca,$color,$precio=0,$fecha="09/10/2019")
        {
            $this->_marca=$marca;
            $this->_color=$color;
            $this->_precio=$precio;
            $this->_fecha=$fecha;
        }

        public function AgregarImpuestos($valor)
        {
            $this->_precio+=$valor;
        }

        public static function MostrarAuto($auto)
        {
            return "-Color: " .$auto->_color." -Marca: ". $auto->_marca." -Precio: ".$auto->_precio." -Fecha: ".$auto->_fecha."<br>";
        }

        public function Equals($auto)
        {
            if(is_a($auto,"Auto"))
            {
                if(!strcmp($this->_marca,$auto->_marca))
                {
                    return true;
                }
            }
            return false;
        }

        public static function Add($a1,$a2)
        {
            if(is_a($a1,"Auto")&&is_a($a2,"Auto"))
            {
                if(!strcmp($a1->_marca,$a2->_marca))
                {
                    if(!strcmp($a1->_color,$a2->_color))
                    {
                        return $a1->_precio + $a2->_precio;
                    }
                }
            }
            echo " No son iguales";
        }
    }
?>