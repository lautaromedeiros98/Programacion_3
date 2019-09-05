<?php
class Alumno
{
    protected $nombre;
    protected $apellido;
    protected $edad;

    public function __construct($n,$a,$e)
    {
        if($n!=NULL && $a!=NULL)
        {
            $this->nombre=$n;
            $this->apellido=$a;
        }
        $this->edad=$e;
    }

    public function ToString()
    {
        echo "<br>Nombre: ".$this->nombre. " Apellido: ".$this->apellido. " Edad:".$this->edad."<br>";
    }
}

    $alumno = new Alumno($_POST['nombre'],$_POST['apellido'],$_POST['edad']);
    echo "-----------Datos alumno-----------<br>";
    echo $alumno->ToString();
?>