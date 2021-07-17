<?php
include 'database.php';

$obj = new Database();

$obj->insert('students', ['student_name' => 'Al Mamun', 'age' => '21', 'city' => 'Pabna']);
echo "Insert result is : ";
print_r($obj->getResult());
