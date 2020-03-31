<?php


// Homework
$username = $_POST['username'];
$password = $_POST['password'];


$user = array('omar','ahmad','mohammad');
$pass = '123';

       if ($username == $user[0] || $username == $user[1] || $username == $user[2] and $password == $pass)
       {
           // lgoin
           echo 'تسجيل دخول ناجح';
       }else
       {
           echo 'تسجيل دخول خاطئ';
       }
    // check if username in $user array and print success login


 ?>
 <html>
 <head>
 </head>
 <body>
 <form method="POST" action="">
 اسم المستخدم<input type="text" name="username" /></br>
 كلمة السر<input type="text" name="password" /></br>
 <input type="submit" name="submit"/>
 </form>
 
 
 </body>
 </html>