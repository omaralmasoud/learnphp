<?php

    // Html encoding

    // To add spacil chart in link you should use urlencode in php
    
    $name = 'Omar&ahmad';

    if($_GET)
    echo $_GET['name'].'</br>';
 ?>

 <html>
 <body>
 <a href="?name=<?php echo $name; ?>"> الزر الاول </a></br>
 <a href="?name=<?php echo urlencode($name) ; ?>">الزر الثاني</a>
 </body>
 </html>