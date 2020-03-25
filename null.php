<?php

 // Null Values mean there is no data
// In php we can check values by adding is_null

$name= '';
// here name is not null to make it null write just $name;
echo 'My name is : '.$name.'</br>';

echo 'Is the name null ?'. is_null($name).'</br>';

// is not
echo 'Is the name null ?'.!is_null($name).'</br>';

 ?>