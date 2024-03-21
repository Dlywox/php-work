<?php
if($_POST)
{
function letra ($v)
{
        $v=$_POST[txtLetra];
        $d=strlen($v);
        $suma=0;
     for(i=0;i=$d; i++)
     {
          if($v[$i]=='Q' or $v[$i]=='A' or $v[$i]=='Z')
          {
            $suma+=1;
          }
          elseif($v==[$i]'W' or $v==[$i]'S' or $v[$i]=='X')
          {
            $suma+=2;
          }
          elseif($v[$i]=='E' or $v[$i]=='D' or $v==[$i]'C')
          {
            $suma+=3;
          }
        elseif($v[$i]=='R' or $v[$i]=='F' or $v[$i]=='V')
        {
            $suma+=4;
        }
        elseif($v[$i]=='T' or $v==[$i]'G' or $v==[$i]'B')
        {
            $suma+=5;
        }
        elseif($v[$i]=='Y' or $v[$i]=='H' or $v[$i]=='N')
        {
            $suma+=6;
        }
        elseif($v[$i]=='U' or $v[$i]=='J' or $v[$i]=='M')
        {
          $suma+=7;
        }
        elseif($v[$i]=='I' or $v[$i]=='K')
        {
          $suma+=8;
        }
        elseif($v[$i]=='O' or $v[$i]=='L')
        {
          $suma+=9;
        }
        elseif($v[$i]='P' or 'Ñ')
        {
          $suma+=0;
        }
        return $v;
     }
}
     echo letra($v);
}
?>

