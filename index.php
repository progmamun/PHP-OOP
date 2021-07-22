<?php
include 'database.php';

$obj = new Database();

// $obj->insert('students', ['student_name' => 'Al Mamun', 'age' => '21', 'city' => 'Pabna']);
// echo "Insert result is : ";
// print_r($obj->getResult());

// $obj->update('students', ['student_name' => 'Al Mamun Khan', 'age' => '22', 'city' => 'Sujanagar'], 'id="6"'); // 'students' table name
// echo "Update result is : ";
// print_r($obj->getResult());

// $obj->delete('students', 'id="5"');
// echo "Delete result is : ";
// print_r($obj->getResult());

$obj->sql('SELECT * FROM students');
//obj->sql('SELECT * FROM students WHERE age = "20"');
// echo "SQL result is : ";
// print_r($obj->getResult());
