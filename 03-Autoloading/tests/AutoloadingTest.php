<?php

require '../includes/init.php';

$emp = new Employee();
$emp->display();

$manager = new Manager();
$manager->display();

$programmer = new Programmer();
$programmer->display();
