<?php
class Alumno
{
    protected $nombre;
    protected $apellido;

    public function __construct($n,$a)
    {
        if($n!=NULL && $a!=NULL)
        {
            $this->nombre=$n;
            $this->apellido=$a;
        }
    }

    public function ToString()
    {
        echo "<br>Nombre: ".$this->nombre. " Apellido: ".$this->apellido;
    }
}
?>