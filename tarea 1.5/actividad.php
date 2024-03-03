<html>
     <?php
            $a=array();
            $b=rand(1,10000);
            for($i=1;$i<=$b;$i++)
            {
                array_push($a,rand(1,10));
            }
                echo "Datos generados: ",$b,"<br>";
                $c=0;
            for($i=0;$i<$b;$i++)
            {
                echo $a[$i]," ";
                if(($i+1)%10==0)
                {
                    echo "<br>";
                }
                $c=$c+$a[$i];
            }
            $ag=$c/$b;
            echo "<br>Promedio: ",$ag;
            $gta=0;
            $p=0;
            $f=0;
            for($i=0;$i<$b;$i++)
            {
                if($a[$i]>$ag)
                {
                    $gta++;
                }
                if($a[$i]>6)
                {
                    $p++;
                }
                else
                {
                    $f++;
                }
            }
            echo "Alumnos mayores: <br>",$gta;
            echo "Reprobados:",$f,"<br>";
            $r=($f/$b)*100;
            echo "Porcentaje de reprobados: ",$r,"<br>";
            echo "Aprobados: ",$p,"<br>";
            $r=($p/$b)*100;
            echo "Porcentaje de aprobados: ",$r,"<br>";

            $s=0;
            for($i=0;$i<$b;$i++)
            {
                $s=$s+(($a[$i]-$ag)*($a[$i]-$ag));
            }
            $sd=sqrt($s/$b);
            echo "Desviacion: ",$sd;

            $z=0;
            echo "<table border='1'>";
            while($z<=$b-29)
            {
                echo"<tr>";
                for($i=0;$i<=29;$i++)
                {
                    echo "<td>",$a[$z],"</td>";
                    $z++;
                }
                echo"</tr>";
            }
    ?>
</html>