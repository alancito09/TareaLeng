<!doctype html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
    for ($i=1;$i<=100;$i++)
    {
        if (primo($i))
            echo "El numero ".$i." SI es Primo";
        else
            echo "El numero ".$i." NO es Primo ";
    }

    function primo($num)
    {
        $cont=0;
        // Funsion que recorre todos los numero desde el 2 hasta el valor recibido.

        for ($i=2;$i<=$num;$i++)
        {
            if ($num%$i==0)
            {
                # si se puede dividir por algun numero mas de una vez, no es primo
                if (++$cont>1)
                    return false;

            }

            
        }
        return true;
    }
    
?>

</body>
</html>
   