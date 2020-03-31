<?php

    // Loops Page 

    // Loop in php as same as other languages while,for ...etc.

    // For loop -> simplest one and most popular

    for($i=0;$i < 10 ;$i++)
    {
        echo 'Hi world</br>';
    }

    // More applecations

    $phones = array(788,777,999);
    $countarray = count($phones);

    // For Loop
    for($i=0;$i < $countarray;$i++)
    {
        echo 'رقم الهاتف المسجل لدينا هو : '.$phones[$i].'</br>';
    }

    // The while loop - Loops through a block of code as long as the specified condition is true. -w3school
    
    $x=0;
    while($x < $countarray)
    {
        echo 'رقم الهاتف : '.$phones[$x].'</br>';
        $x++;
    }
 ?>