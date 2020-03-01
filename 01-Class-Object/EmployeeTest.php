<?php

require 'Employee.php';

$obj1 = new Employee;
$obj1->setName('Alex');
$obj1->setSalary(25000);
$obj1->setOverTime(5000);
$obj1->display();

$obj2 = new Employee;
$obj2->setName('Lena');
$obj2->setSalary(30000);
$obj2->setOverTime(2000);
$obj2->display();

$obj3 = new Employee;
$obj3->setName('Kate');
$obj3->setSalary(50000);
$obj3->setOverTime(0);
$obj3->display();
