<?php

require 'Employee.php';

$obj1 = new Employee('Alex', 25000, 5000);
$obj1->setName('Lena');
$obj1->display();


$obj2 = new Employee();
$obj2->setName('Commander');
$obj2->setSalary(90000);
$obj2->display();
