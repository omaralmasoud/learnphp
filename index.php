<?php
include 'header.php'; 
// The index file mean defult file in folder to auto open in requst
// In php format we should define a php page buy add php tags <?php and close it ? >
// You should save a php file like index.php


// the main page 
echo 'Welcome to php from scratch </br> by Omar Masoud </br>';
if(isset($_COOKIE['login']))
{
    if($_COOKIE['login'] == 1)
    {

if($_GET)
        {
    $user = $_GET['user'];
    echo 'اهلا بك يا '.$user;
        }
    }
}else 
{
    echo 'يرجى تسجيل الدخول </br>';
    echo '<a href="login.php" >تسجيل دخول</a>';
}
// We will use html tags like </br> it's mean new line
// We will use echo in php mean print something

include 'footer.php'; 
?>