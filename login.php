<?php

// basic login page

// the login page is the one of most important part of any web site
// up to now we learend a lot of things and let's try is we can make a login page
if($_POST){
$username = $_POST['username'];
$password = $_POST['password'];
    $rightuser = 'omar';
    $rightpass = '123';

    if ($username == $rightuser and $password == $rightpass)
    {
        echo 'تسجيل دخول ناجح';
        header("Location: index.php?user=omar");
    }else
    {
        echo 'تسجيل دخول غير صحيح';
    }


}

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