<?php
    function ShowVisits()
    {
        //Introduce una nueva visita
        $fcvroute="C:/Contador/CountVisits.txt";
        $fcv=fopen($fcvroute,"r");
        $num=fread($fcv, filesize($fcvroute));
        $num++;
        //echo($num);
        $arrayvisits=str_split($num,1); //Convierte una cadena de texto en array.
        foreach($arrayvisits as $numv)
        {
            echo("<div>");
            echo($numv);
            echo("</div>");
        }
        fclose($fcv);
        
        $fcvl=fopen($fcvroute,"w+");
        fwrite($fcvl,$num);
        fclose($fcvl);
    }
?>
