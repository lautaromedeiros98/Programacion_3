<?php
    function EsPar($n)
    {
        if(($n%2)==0)
        {
            return 1;
        }
        return 0;
    }

    function EsImpar($n)
    {
        return !EsPar($n);
    }
?>