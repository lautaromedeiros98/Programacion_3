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


    $arch=fopen("archivo.txt","r");
    if($arch!=NULL)
    {
        $ñe=fgets($arch);
        if(fclose($arch))
        {
               echo "Se leyó el archivo<br>";               
        }
        else
        {
            echo "ERROR<br>"; 
        }          
    }
    $array=explode(" ",$ñe);
    var_dump($array);
    echo "<br>";
    $alumno = new Alumno($array[0],$array[1]);
    $alumno->ToString();
    return 0;  
?>