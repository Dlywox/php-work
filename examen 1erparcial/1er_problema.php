<?php
   if($_POST)
   {
     $j1= $_POST[txtj1]
     $j2= $_POST[txtj2]
     $j3= $_POST[txtj3]
     $j4= $_POST[txtj4]
     $j5= $_POST[txtj5]
     $j6= $_POST[txtj6]
     $p= $j1+$j2+$j3+$j4+$j5+$j6;
     return $p;
     echo $p;
   }
?>