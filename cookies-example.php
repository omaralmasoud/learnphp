<?php

    require 'header.php';
    // Cookies example
    $fullname = array('Omar','Al-Masoud');
    $phone = array('0788688798');
    $card = array('0000','447445-8878-9888');
    $login = 0;
    if(isset($_COOKIE['login']))
{
    if($_COOKIE['login'] == 1)
    {

        $login = $_COOKIE['login'];
    }
}else 
{
    echo 'يرجى تسجيل الدخول </br>';
    echo '<a href="login.php" >تسجيل دخول</a>';
}
 ?>
 <html dir="rtl">
 <body>
 
    </br>

    <label><h2>معلومات العميل </h2></label>
    
    <?php if($login == 1){ ?>
    
    <label><h5>يمكنك هنا استعراض معلوماتك </h5></label>
    <style>
table, td, th {
  border: 1px solid black;
  text-align: center;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
</style>
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Phone</th>
    <th>Cadr ID</th>
    <th>Cadr Number</th>
  </tr>
  
    <?php foreach($fullname as $value){ echo ' <td>'.$value.'</td>'; } ?>
    <?php foreach($phone as $value){ echo '<td>'.$value.'</td>'; } ?>
    <?php foreach($card as $value){ echo '<td>'.$value.'</td>'; } ?>
    
 
 
</table>
    
<?php } else { ?>
    <label><h5>لا تملك صلاحية للوصول لهذه المعلومات</h5></label>
<?php }  ?>

 </body>
 
 </html>