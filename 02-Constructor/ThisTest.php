<?php

require 'Employee.php';

$obj1 = new Employee('Alex', 25000, 5000);

$obj2 = new Employee('Lena', 30000, 2000);
$obj2->setName('Kara');

$obj3 = new Employee('Kate', 50000);

$obj1->display();
$obj2->display();
$obj3->display();
