<?php

// 1
// 22
// 333
// 4444
// 55555
// 666666
// 7777777
// 88888888
// 999999999


for ($i=1; $i<=9; $i++) {

    for ($k=0; $k<$i; $k++)
    
    echo($i);   
        echo("<br>");    
    }
    
    echo "<br>";

    for($i=1;$i<=9;$i++)
    {
        echo str_repeat($i, $i);
        echo "<br>";
    }
    
    echo "<br>";
    
    for($i=9;$i>=1;$i--)
    {
        echo str_repeat($i, $i);
        echo "<br>";
    }