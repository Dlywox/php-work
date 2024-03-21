<?php
    if($_POST)
    {
        $x=$_POST['txtX'];
        function rara ($x)
        {
            if($x<=0.0)
        {
            return pow($x, 2)-$x;
        }
        else
        {
            return -pow($x, 2) + 3*$x;
        }
        }
        echo rara($x);
    }
?>