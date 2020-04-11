<?php

    // Sign up Page
    require 'config.php';

    if($_POST)
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username) || empty($password))
        {
            echo 'يرجى ملئ الحقول';
        }else 
        {
            // We use "" to tell sql this is a string value
            $check = mysqli_query($connectbd,'
            INSERT INTO `user`(`username`, `password`)
             VALUES ("'.$username.'","'.$password.'")') or die(mysqli_error($check));
            if($check)
            {
                // connection work
                echo 'تم تسجيل عضويتك بنجاح';
                echo 'يمكنك الان تسجيل الدخول <a href="database-login.php" >تسجيل دخول</a>';
                
            }else
            {
                echo 'حدث خطأ اثناء الاتصال بقواعد البيانات';
            }
        }
    }

 ?>
 <html>
 <head>
 </head>
 <body>
 <center>
 </br>
 <form method="POST" action="">
 <input type="text" name="username" placeholder="ادخل اسم المستخدم" /></br>
<input type="text" name="password" placeholder="ادخل كلمة المرور" /></br>
 <input type="submit" name="submit" value="تسجيل "/>
 </form></center>
 
 
 </body>
 </html>
 <?php require 'footer.php'; ?>