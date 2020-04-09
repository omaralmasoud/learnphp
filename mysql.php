<?php 

    // mysql Page

    // first you should make a connection with database
    // to make a connection you need to be strat up your mysql on xampp server
    // you need also to create a database and to know server name , database username and his pass

    // let's write our info in a variable to use it in connection 
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $databasename = "database";

    // now let's make a connection
    $connectdb = mysqli_connect($servername,$user,$pass,$databasename) or die(mysqli_error($connectdb));

    if(mysqli_connect_error())
    {
        // Erorr in connection
        echo 'فشل الاتصال بقاعدة البينات';
    }
    

    // We should know the SQL query it's depends in what you are using in my case i use mysql
    // So first one is "SELECT * FROM `product` WHERE 1" or SELECT `id`, `name`, `type`, `date` FROM `product` WHERE 1
    // INSERT INTO `product`(`id`, `name`, `type`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4])
    // UPDATE `product` SET `id`=[value-1],`name`=[value-2],`type`=[value-3],`date`=[value-4] WHERE 1
    // DELETE FROM `product` WHERE 0

    // Let's try something with POST method
    if($_POST)
    {
        $productname = $_POST['name'];
        $producttype = $_POST['type'];

        // Let's try to add it in database
        if(isset($_POST['add'])){
        $add = mysqli_query($connectdb,'INSERT INTO `product`(`name`, `type`) VALUES ("'.$productname.'","'.$producttype.'")') or die(mysqli_error($add));
        if($add)
        {
            echo 'تم اضافة المنتج شكرا لك';
        }else 
        {
            echo 'حدث خطأ اثناء الاتصال بقاعدة البيانات';
        }
        }
        if(isset($_POST['view']))
        {
            $view = mysqli_query($connectdb,'SELECT * FROM `product`') or die(mysqli_error($add));
            if($view)
            {
                // Now we can fetch data
                
                while($fetchdata = mysqli_fetch_assoc($view))
                {
                    $pid = $fetchdata['id'];
                    $pname = $fetchdata['name'];
                    $ptype = $fetchdata['type'];
                    $pdate = $fetchdata['date'];

                    echo '
                    </br><table border="1px">
                    <tr>
                    <td>رقم المنتج</td>
                    <td>اسم المنتج</td>
                    <td>نوع المنتج</td>
                    <td>تاريخ المنتج</td>
                    </tr>
                    <tr>
                    <td>'.$pid.'</td>
                    <td>'.$pname.'</td>
                    <td>'.$ptype.'</td>
                    <td>'.$pdate.'</td>
                    </tr>
                    </table>
                    
                    ';
                }
            }else
            {
                echo 'فشل الاتصال';
            }
        }
    }
    
    
?>
<html>
<body>
<form method="POST" >
<h5>ادخل اسم المنتج</h5><input type="text" name="name" /></br>
<h5>ادخل نوع المنتج</h5><input type="text" name="type" /></br>
<input type="submit" name="add" value="ارسال" />
<input type="submit" name="view" value="استعراض المنتجات" />
</form>

</br>
<label><h5>استعراض المنتجات</h5></label>
</br>

</body>
</html>