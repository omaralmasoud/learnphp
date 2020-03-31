<?php

    // GET method Page

    // Simple check if there is a GET requst
if($_GET)
{
    // Get values sent
    $Name = $_GET['name'];
    $Phone = $_GET['phone'];
    echo 'الاسم المرسل هو : '.$Name.'</br>';
    echo 'رقم الهاتف المرسل هو : '.$Phone.'</br>';
    echo 'كل المعلومات المرسلة : '.print_r($_GET) ;

}

 ?>
 <!-- html code -->
  <form method="GET" action="" >
 
    <input type="text" placeholder="Enter you name" name="name" /></br>
    <input type="text" placeholder="Enter you phone" name="phone" /></br>
    <input type ="submit" value="ارسال" />
 
 </form>