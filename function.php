<?php

    // Function Page
    // More info please vist https://www.w3schools.com/php/php_functions.asp
    function hi()
    {
        echo 'Hi People</br>';
    }

    hi();

    // Let Make operations function
    function Operations($num1,$num2,$type)
    {
        if($type == 'sum')
        {
            $sum = $num1 + $num2;
            echo 'حاصل جمع العددين هو : '.$sum;
        }
        if($type == 'multiplay' )
        {
            $multi = $num1*$num2;
            echo 'حاصل ضرب العددين هو : '.$multi;
        }
        if($type == 'div')
        {
            $div = $num1/$num2;
            echo 'حاصل قسمة العدد الاول على العدد الثاني هو : '.$div;
        }
    }

    // Check if there is a POST requst
    if($_POST)
    {
        $number1 = $_POST['firstnumber'];
        $number2 = $_POST['scoundnumber'];
        $type = $_POST['type'];
        Operations($number1,$number2,$type);
    }

 ?>
 <html dir="rtl">
     <body>
         <form method="POST" action="">
        <input type="text" name="firstnumber" placeholder="Enter Number one"></br>
        <input type="text" name="scoundnumber" placeholder="Enter Number two"></br>
        <input type="submit" name="type" value="sum" />
        <input type="submit" name="type" value="multiplay" />
        <input type="submit" name="type" value="div" />
        </form>

     </body>
 </html>