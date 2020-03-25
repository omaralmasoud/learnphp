<?php

// Post Page
//  Post is a method to send data to server
// ex. we want to send username or password to check it from server, we should use html tags

// get Post values

$username = $_POST['username'];
$password = $_POST['password'];

echo 'اسم المستخدم المطبوع هو'. $username.'</br>';
echo 'الرقم السري المطبوع هو '.$password.'</br>';


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