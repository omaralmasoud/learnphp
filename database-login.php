<?php

// Database Login
require 'config.php';

if ($_POST) {
    if (isset($_POST['update'])) {
        $datauser = $_POST['updateuser'];
        $dataid = $_POST['id'];
        $datapass = $_POST['updatepass'];

        if(empty($datauser) || empty($datapass))
        {
            echo 'يرجى ملئ الحقول بشكل صحيح';
        }else 
        {
            $update = mysqli_query($connectbd,
            '
            UPDATE `user` SET `username`="'.$datauser.'",`password`="'.$datapass.'" WHERE id="'.$dataid.'"
            
            ') or die(mysqli_error($update));

            if($update)
            {
                // Connection work
                echo 'تم تعديل البيانات بنجاح';
            }else
            {
                //  connection down 
                echo 'حدث خطأ اثناء الاتصال بقواعد البيانات';
            }
        }
    }
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username) || empty($password)) {
            echo 'يرجى ملئ الحقول';
        } else {
            $check = mysqli_query($connectbd, 'SELECT * FROM `user` WHERE username="' . $username . '" AND password = "' . $password . '"') or die(mysqli_error($check));
            if ($check) {
                // connection work
                if (mysqli_num_rows($check) > 0) {
                    echo 'تسجيل دخول ناجح';
                    $fetchuser = mysqli_fetch_assoc($check);
                    $dataid = $fetchuser['id'];
                    $datauser = $fetchuser['username'];
                    $datapass = $fetchuser['password'];

                    echo '
                    <center><form method="POST" action="">
                    <input type
                    <input type="text" name="updateuser" value="' . $datauser . '"/></br>
                    <input type="text" name="updatepass" value="' . $datapass . '"  /></br>
                    <input type="hidden" name="id" value="'.$dataid.'"/>
                    <input type="submit" name="update" value="تعديل"/>
                    </form></center>
                                        ';
                } else {
                    echo 'المعلومات غير متطابقة';
                }
            } else {
                echo 'حدث خطأ اثناء الاتصال بقواعد البيانات';
            }
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
            <input type="submit" name="login" value="تسجيل دخول" />
            
        </form>
    </center>

</body>

</html>
<?php require 'footer.php'; ?>